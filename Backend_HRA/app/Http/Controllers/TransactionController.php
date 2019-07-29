<?php

namespace App\Http\Controllers;

// require "vendor/autoload.php";
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Landlord;
use App\Property;
use App\Property_Documents;
use App\Transaction;
use PDF;
use GuzzleHttp\Client;


class TransactionController extends Controller
{
    public function showtransactions(){
        $transactions = Transaction::paginate(20);
        return response()->json([
            "status"=>'SUCCESS',
            "code"=>"200",
            "data"=>$transactions
        ]);
    }

    public function getusertransaction($id){
        $trans=DB::table('transactions')->where('user_id',$id)->get();
        return response()->json([
            "status"=>'SUCCESS',
            "code"=>'200',
            "data"=>$trans,
        ]);
    }

    public function retreivetransaction($id){
        $trans=DB::table('transactions')->where('transaction_id',$id)->get();
        return response()->json([
            "status"=>'SUCCESS',
            "code"=>'200',
            "data"=>$trans,
        ]);
    }

    public function gettransaction($property_id){
        
        $property = Property::findorFail($property_id);
        $landlord = Landlord::findorFail($property_id);
        $rent_sum=$property->rent_amount;

        $trans=DB::table('transactions')->select('rent_amount')->where('property_id',$property_id)->where('mode_of_payment','Rent Deposit')->get();
        $sum=0;
        foreach($trans as $transc){
            $sum += $transc->rent_amount;
        }
        $rent_deposit= $property->rent_deposit;
        $deposit_sum = $rent_deposit - $sum;

        $trans=DB::table('transactions')->select('rent_amount')->where('property_id',$property_id)->where('mode_of_payment','Maintenance')->get();
        $sum=0;
        foreach($trans as $transc){
            $sum += $transc->rent_amount;
        }
        $rent_maintenance= $property->rent_maintenance;
        $maintenance_sum = $rent_maintenance - $sum;

       
        return response()->json([
            "status"=>"SUCCESS",
            "code"=>"200",
            "data"=>[
                "maintenance"=>$maintenance_sum,
                "rent_deposit"=>$deposit_sum,
                "rent"=>$property->rent_amount,
                "landlord_name"=>$landlord->name,
                "last_date_for_rent"=>$property->rent_due_date
            ]
        ]);
    }

    
    public function addtransaction($data){
            $property_id = $data['property_id'];
            $landlord_id = $data['landlord_id'];

            //getting all the transactions assosiated with a given propertyid
            $trans=DB::table('transactions')->select('rent_amount')->where('property_id',$property_id)->get();
            
            
            //getting total amount of these transactions
            $sum=0;
            foreach($trans as $transc){
                $sum += $transc->rent_amount;
            }
            $sum += $data['rent_amount'];
            

            //retreiving pan no from existing datbase associated with the given property
            $pan_no=DB::table('landlord')->select('pan_number')->where('property_id',$property_id)->get();
            $pan_no=$pan_no[0]->pan_number;

            //if total amount is greater than 100000 and Pan no is not supplied ask for pan no
            if($sum >=100000 && $pan_no==NULL && $data['pan_no']==''){
                return response()->json([
                    "status" => "FAILURE",
                    "code" => "400",
                    "message" => "PAN No Required"
            ]);
            }

            //if total amount is greater than 100000 but the Pan no is supplied then update the database with given pan no
            if($sum >=100000 && $pan_no==NULL &&$data['pan_no']!=NULL){
                DB::table('landlord')->where('property_id', $property_id)->update(array('pan_number' => $data['pan_no']));
            }

            //new "transaction" used to store the transaction and a new "variable" used to send the details for generating pdf
            $transaction = new Transaction;
            $transaction->property_id = $data['property_id']; 	
            $transaction->landlord_id = $data['landlord_id']; 
            $transaction->user_id = "1";
            $transaction->tenant_name = "John";	
            $transaction->tenant_address = "26/11 Banjara Hills";	
            $transaction->tenant_phone = "1234567890";
            
            $property = Property::findorFail($property_id);
        
            //Adding landlord details in the transaction
            $landlord = Landlord::findorFail($landlord_id);
            $city = $landlord->landlord_city;
            $state =  $landlord->landlord_state;
            $address = $city." ".$state;
            $transaction->landlord_address = $address; 	
            // $transaction->landlord_phone = "9876543210";	
            $transaction->landlord_name = $landlord->name;
            $transaction->acc_holder_name = $landlord->account_holder_name;	
            $transaction->acc_number = $landlord->account_number ;	
            $transaction->bank_name = $landlord->bank_name;	
            $transaction->bank_ifsc = $landlord->ifsc;	
            $transaction->mode_of_payment = $data['mode_of_payment']; 
            $todayDate = date("Y-m-d");
            $transaction->date = $todayDate;
            $transaction->rent_month = $data['rent_month'];
            $transaction->rent_amount = $data['rent_amount'];
            $transaction->remarks = $data['remarks'];
            
            try{
                $transaction->save();
                return $transaction->transaction_id;
            }
            catch(\Exception $e){
                error_log($e);
            }
    }  
    
    public function checktransaction(Request $request){
       
        $data = $request->all();

        $rent_month = $data['month']."-".$data['year'];
        $data['rent_month'] = $rent_month;
        // foreach($data as $x => $x_value){
        //     error_log($x."-".$x_value);
        // }

        $validator=Validator::make($request->all(), [
            'property_id' => 'required',
            'landlord_id' => 'required',
            'mode_of_payment' => 'required',
            'month' => 'required',
            'year' => 'required',
            'rent_amount' => 'required'
        ]);
        if ($validator->fails()) {
                return response()->json([
                    "status" => "FAILURE",
                    "code" => "400",
                    "message" => $validator->messages()//"ERROR Ocurred"
            ]);
        }
        else{
            
            $transactionid = $this-> addtransaction($data);
            $status=$this -> payredirect($transactionid);

        }   
    }

    public function payredirect($transactionid){
        // $data['email']="ramubonkuri@gmail.com";
        $action="http://35.200.220.124/api/initiate";
        $client_id="123456";
        $orderId=$transactionid;
        $orderAmount="100";
        $orderNote="test mode pay";
        $customerName="Rambabu";
        $customerPhone="9985004737";
        $customerEmail="ramubonkuri@gmail.com";
        $returnUrl='http://127.0.0.1:8000/api/transaction_response';
        $html='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
        <html> 
        <head>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html;CHARSET=iso-8859-1">
        </head>
        <body>
            <form align="center" id="payForm" method="post" action="'.$action.'" name="payForm">
                <input type="text" id="orderId" name="orderId" value="'.$orderId.'" />
                <input type="text" id="amount" name="amount" value="'.$orderAmount.'" />
                <input type="text" id="note" name="note" value="'.$orderNote.'" />
                <input type="text" id="name" name="name" value="'.$customerName.'" />
                <input type="text" id="phone" name="phone" value="'.$customerPhone.'" />
                <input type="text" id="email" name="email" value="'.$customerEmail.'" />
                <input type="text" id="returnUrl" name="returnUrl" value="'.$returnUrl.'" />
                <input type="text" id="client_id" name="client_id" value="123456" />
                <input type="Submit" id = "cpay" value="Please donot refresh the page..."/>
            </form>
        </body>
        </html>
        <script type="text/javascript">
        function myfunc () {
            var frm = document.getElementById("payForm");
            frm.submit();
        }
        myfunc();
        </script>';
        echo $html;
    }

    public function response(Request $request){
        $data=$request->all();
        if($data['txStatus']=='SUCCESS'){
            $transactionid=$data['orderId'];
            $variable=DB::table('transactions')->where('transaction_id',$transactionid)->get();
           
            $variable->landlord_phone ="9876543210";
            $variable = $variable[0];
            // storing receipt of transaction in database
            $pdf_content = view('pdfshow',['variable'=>$variable]);
            PDF::SetAuthor('Souvik');
            PDF::SetTitle('Title');
            PDF::SetCreator('Creator');
            PDF::SetDisplayMode('real','default');
            PDF::AddPage();
            @PDF::writeHTML($pdf_content);
            $fileName1 = str_random().'.pdf';
            PDF::Output(public_path().'/Receipts/'.$fileName1,'F');
            PDF::reset();
            $receipt = $fileName1;

            //storing rent_receipt of transaction in database
            $property = DB::table('property')->where('property_id','1')->first();
            $variable->door_number =$property->door_number;
            $variable->society = $property->society;
            $variable->area = $property->area;
            $variable->city =$property->city;
            $variable->state = $property->state;
            $variable->pin=$property->pin;

            $pdf_content = view('pdfrent_receipt',['variable'=>$variable]);
            PDF::SetAuthor('Souvik');
            PDF::SetTitle('Title');
            PDF::SetCreator('Creator');
            PDF::SetDisplayMode('real','default');
            PDF::AddPage();
            @PDF::writeHTML($pdf_content);
            $fileName2 = str_random().'.pdf';
            PDF::Output(public_path().'/Receipts/'.$fileName2,'F');
            PDF::reset();
            $rent_receipt=$fileName2;
            $status="SUCCESS";
            DB::table('transactions')->where('transaction_id', $transactionid)->update(array('receipt' => $receipt,'rent_receipt' => $rent_receipt,'status' => $status));
            $var=DB::table('transactions')->where('transaction_id',$transactionid)->get();
            $html = "<html>
                <form id='back' action='http://localhost:8080/transactionview/".$transactionid."'>
                </form>
                <script>
                function myfunc () {
                    var frm = document.getElementById('back');
                    frm.submit();
                }
                myfunc();
                </script>
                </html>";
            echo $html;
        }
        else{
            $transactionid=$data['orderId'];
            $status = "FAILURE";
            DB::table('transactions')->where('transaction_id', $transactionid)->update(array('status' => $status));
            $var=DB::table('transactions')->where('transaction_id',$transactionid)->get();
            $html = "<html>
            <form id='back' action='http://localhost:8080/transactionview/".$transactionid."'>
            </form>
            <script>
            function myfunc () {
                var frm = document.getElementById('back');
                frm.submit();
            }
            myfunc();
            </script>
            </html>";
            echo $html;
        }
    }
}
