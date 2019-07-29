<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class PdfGenerateController extends Controller
{
    public function pdfview(Request $request)
    {
        $data=$request->all();
        $user_id = $data['ID'];
        $financialyear = $data['year'];
        $exploded = explode('-',$financialyear);
        $startdate = $exploded[0]."-04-01";
        $enddate = $exploded[1]."-03-31";

        // $user_id = "1";
        // $propertyid = "1";
        // $startdate = "2018-04-01";
        // $enddate = "2019-03-31";
        $trans = DB::table("transactions")->where('user_id',$user_id)->first();
        $propertyid = $trans->property_id;
        $tenantname = $trans->tenant_name;
        $landlordname = $trans->landlord_name;
        $stdate=explode('-',$startdate)[1]."-".explode('-',$startdate)[0];
        $endate=explode('-',$enddate)[1]."-".explode('-',$enddate)[0];
        $tenantemail="abc@gmail.com";
        $tenantphone=$trans->tenant_phone;
        $landlordemail="xyz@gmail.com";
        $landlordpan="ABCDE1234F";
        
        $info = array("user_id"=>$user_id,"tenantname"=>$tenantname,"landlordname"=>$landlordname,"stdate"=>$stdate,"endate"=>$endate,'tenantemail'=>$tenantemail,'tenantphone'=>$tenantphone,'landlordemail'=>$landlordemail,'landlordpan'=>$landlordpan);

        $property = DB::table("property")->where('property_id',$propertyid)->get();
        $property =  (array) $property[0];

        $transaction = DB::table("transactions")->whereDate('date','>=',$startdate)->whereDate('date','<=',$enddate)->where('user_id',$user_id)->where('property_id',$propertyid)->get();
        
        if($data['download']==1){
            $pdf_content = view('pdfhra_report',['transaction'=>$transaction,'info'=>$info,'property'=>$property]);
            PDF::SetAuthor('Souvik');
            PDF::SetTitle('Title');
            PDF::SetCreator('Creator');
            PDF::SetDisplayMode('real','default');
            PDF::AddPage();
            @PDF::writeHTML($pdf_content);
            $fileName1 = str_random().'.pdf';
            PDF::Output(public_path().'/Receipts/'.$fileName1,'F');
            PDF::reset();
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "link" => '/Receipts/'.$fileName1,
            ]);
        }
        else{
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "info"=>$info,
                "property"=>$property,
                "transaction"=>$transaction,
            ]);
        }
        
    }
}