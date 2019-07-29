<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Landlord;
use App\Property;
use App\Property_Documents;
use Transaction;

class AdminController extends Controller
{
    Public function getreceipts(Request $request){
        $data = $request->all();
        $startdate = $data['start_date'];
        $enddate = $data['end_date'];
        $startdate = date('Y-m-d',strtotime($data['start_date']));
        $enddate = date('Y-m-d',strtotime($data['end_date']));
        $trans=DB::table('transactions')->whereDate('date','>=',$startdate)->whereDate('date','<=',$enddate)->get();
        if($data['download']==1){
            $name=str_random();
            $filename = public_path()."/CSV/".$name.".csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array('transaction_id', 'property_id','user_id','landlord_id', 'tenant_name', 'tenant_address', 'tenant_phone', 'landlord_address', 'landlord_name','acc_holder_name', 'acc_number', 'bank_name', 'bank_ifsc', 'mode_of_payment','date','rent_month','rent_amount','remarks','receipt','rent_receipt'));
            foreach($trans as $row) {
                fputcsv($handle, array($row->transaction_id, $row->property_id,$row->user_id,$row->landlord_id,$row->tenant_name,$row->tenant_address,$row->tenant_phone,$row->landlord_address,$row->landlord_name,$row->acc_holder_name,$row->acc_number,$row->bank_name,$row->bank_ifsc,$row->mode_of_payment,$row->date,$row->rent_month,$row->remarks,$row->receipt,$row->rent_receipt));
            }
            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv',
            );
            error_log("OPEN");
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "link" => '/CSV/'.$name.'.csv',
            ]);
        }
        else{
            return response()->json([
                "status"=>'SUCCESS',
                "code"=>"200",
                "data"=>$trans
            ]);
        }        
        
    }

    Public function getagreements(Request $request){
        $data= $request->all();
        $startdate=date('Y-m-d',strtotime($data['start_date']));
        $enddate=date('Y-m-d',strtotime($data['end_date']));
        $startdate=$startdate." 00:00:00";
        $enddate=$enddate." 24:60:60";
        $documents=DB::table('property_documents')->whereDate('created_time','>=',$startdate)->whereDate('created_time','<=',$enddate)->get();
        if($data['download']==1){
            $name=str_random();
            $filename = public_path()."/CSV/".$name.".csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array('property_id','landlord_id','agreement_start','agreement_end','rent_agreement'));
            foreach($trans as $row) {
                fputcsv($handle, array($row->property_id,$row->landlord_id,$row->agreement_start,$row->agreement_end,$row->rent_agreement));
            }
            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv',
            );
            error_log("OPEN");
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "link" => '/CSV/'.$name.'.csv',
            ]);
        }
        else{
            return response()->json([
                "status"=>'SUCCESS',
                "code"=>"200",
                "data"=>$documents
            ]);
        }
    }
}
