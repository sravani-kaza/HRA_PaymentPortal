<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Landlord;
use App\Property;
use App\Property_Documents;
use Image;

class PropertyController extends Controller
{
    public function indexProperty(){

        $properties = Property::paginate(20);

        return response()->json([
            "status"=>"SUCCESS",
            "code"=>"200",
            "data"=>$properties
        ]);
    }


    public function showLandlord($property_id)
    {
        //Get landlord
        $landlord = Landlord::findorFail($property_id);
        
        return response()->json([
            "status"=>"SUCCESS",
            "code"=>"200",
            "data"=>$landlord
        ]);
    }

    public function showProperty($property_id)
    {

        //Get property
        $property = Property::findorFail($property_id);
       
        return response()->json([
            "status"=>"SUCCESS",
            "code"=>"200",
            "data"=>$property
        ]);
    }

    public function showDocuments($landlord_id,$property_id){

        $property_document = DB::table('property_documents')->where('landlord_id',$landlord_id)->where('property_id',$property_id)->first();

        return response()->json([
            "status"=>"SUCCESS",
            "code"=>"200",
            "data"=>$property_document
        ]);
    }

    public function updateProperty($property_id,Request $request)
    {
        $data = $request->all();
        error_log("HELLO");
        // foreach ($data as $method_name) 
        // {
        //     error_log($method_name);
        // }
        // error_log($data['property_image']);
        error_log("BYE");
        $property = Property::findorFail($property_id);
        
        //Validate and update the property..
        $validator=Validator::make($request->all(), [
            'Property_name' => 'required|regex:/^[A-za-z0-9\s\-\/]+$/',
            'Security_deposit_amount' => 'required|numeric',
            'Rent_amount' => 'required|numeric',
            'Maintenance_amount' => 'required|numeric',
            'Maintenance_due_date' => 'required|integer',
            'Rent_due_date' => 'required|numeric',
            'Staying_since' => 'required|date_format:Y-m-d',
            // 'deposit' => 'required',
            // 'property_image' => 'required',
            'Door_number' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Society' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Area' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'City' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'State' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Pin' => 'required|digits:6',
        ]);
        if ($validator->fails()) {
          error_log("FAIL");
          error_log($validator->messages());
            return response()->json([
                "status" => "FAILURE",
                "code" => "200",
                "message" => $validator->messages()//"ERROR Ocurred"
            ]);
        }
        else{
            // error_log("Pass");
            $data = $request->all();
            $name = $data['Property_name'];
            $rent_deposit = $data['Security_deposit_amount'];
            $rent_amount = $data['Rent_amount'];
            $rent_maintenance = $data['Maintenance_amount'];
            $maintenance_due_date = $data['Maintenance_due_date'];
            $rent_due_date = $data['Rent_due_date'];
            $staying_since = $data['Staying_since'];
            // error_log($data['property_image_name']);
            if(empty($data['deposit'])){
                $paid_secuirty_deposit = $property->paid_secuirty_deposit;
            }
            if(!empty($data['deposit'])){
                $paid_secuirty_deposit = $data['deposit'];
            }
            if(empty($data['property_image'])){
                $property_image = $property->property_image;
            }
            if(!empty($data['property_image'])){
                // error_log("property iamge");
                $image = $data['property_image'];//image data encoded in base64
                $exploded = explode(',', $image);//seprating only the imagedata
                $decoded = base64_decode($exploded[1]);//decoding again into image
                if(str_contains($exploded[0],'jpg'))//giving the value to extension
                $extension = 'jpg';
                elseif(str_contains($exploded[0],'png'))
                $extension = 'png';
                elseif(str_contains($exploded[0],'pdf'))
                $extension = 'pdf';
                elseif(str_contains($exploded[0],'jpeg'))
                $extension = 'jpeg';
                $fileName = str_random().'.'.$extension;//giving the name to the image
                $path = public_path().'/Propertyimage/'.$fileName;//path where the image need to be store
                file_put_contents($path, $decoded);//storing the im$property = Property::findorFail($property_id);age
                $property_image = $fileName;//storing the filename in database
            }
            $door_number = $data['Door_number'];
            $society = $data['Society'];
            $area = $data['Area'];
            $city = $data['City'];
            $state = $data['State'];
            $pin = $data['Pin'];
            $property = [
                'name'=>$name,
                'rent_deposit'=>$rent_deposit,
                'rent_amount'=>$rent_amount,
                'rent_maintenance'=>$rent_maintenance,
                'maintenance_due_date'=>$maintenance_due_date,
                'rent_due_date'=>$rent_due_date,
                'staying_since'=>$staying_since,
                'paid_secuirty_deposit'=>$paid_secuirty_deposit,
                'property_image'=>$property_image,
                'door_number'=>$door_number,
                'society'=>$society,
                'area'=>$area,
                'city'=>$city,
                'state'=>$state,
                'pin'=>$pin,
            ];
            DB::table('property')->where('property_id',$property_id)->update($property);
            
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "message" => "Property updated Successfully",
                "data" => $data
            ]);
        }

    }

    public function updateLandlord($landlord_id,Request $request)
    {
        error_log($landlord_id);
        $data = $request->all();
        foreach ($data as $method_name) 
        {
            error_log($method_name);
        }
        $landlord = Landlord::findorFail($landlord_id);
        //Validate and update the property..
        $validator=Validator::make($request->all(), [
            'Landlord_name' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Account_holder_name' => 'required|regex:/^[A-z0-9\s]+$/',
            'M_Account_holder_name' => 'required|regex:/^[A-z0-9\s]+$/',
            'Bank_name' => 'required',
            'M_Bank_name' => 'required',
            'M_IFSC' => 'required|regex:/^[A-Z]{4}\d{7}+$/',
            'IFSC' => 'required|regex:/^[A-Z]{4}\d{7}+$/',
            'Account_number' => 'required|numeric',
            'M_Account_number' => 'required|numeric',
            'Landlord_city' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Landlord_state' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Landlord_PAN_number' => 'required|alpha_num',
            // 'pan_doc' => 'required',
        ]);

        if ($validator->fails()) {
          error_log("FAIL");
          error_log($validator->messages());
            return response()->json([
                "status" => "FAILURE",
                "code" => "200",
                "message" => $validator->messages()//"ERROR Ocurred"
            ]);
        }

        else{
            $name = $data['Landlord_name'];
            $account_holder_name = $data['Account_holder_name'];
            error_log($name);
            error_log($account_holder_name);
            error_log("PASSED");
            $bank_name = $data['Bank_name'];
            $ifsc = $data['IFSC'];
            $account_number = $data['Account_number'];
            $landlord_city = $data['Landlord_city'];
            $landlord_state = $data['Landlord_state'];
            $pan_number = $data['Landlord_PAN_number'];
            error_log("Pass1");
            if(empty($data['pan_doc'])){
                error_log("Pass2");
                $pan_doc="pan123";
            }
            if(!empty($data['pan_doc'])){
                $image = $data['pan_doc'];//image data encoded in base64
                $exploded = explode(',', $image);//seprating only the imagedata
                $decoded = base64_decode($exploded[1]);//decoding again into image
                if(str_contains($exploded[0],'jpg'))//giving the value to extension
                $extension = 'jpg';
                elseif(str_contains($exploded[0],'png'))
                $extension = 'png';
                elseif(str_contains($exploded[0],'pdf'))
                $extension = 'pdf';
                elseif(str_contains($exploded[0],'jpeg'))
                $extension = 'jpeg';
                $fileName = str_random().'.'.$extension;//giving the name to the image
                $path = public_path().'/Pandocs/'.$fileName;//path where the image need to be store
                file_put_contents($path, $decoded);//storing the image
                $pan_doc = $file;//storing the filename in database
            }
            if($data["M_same"]!=1){
                $maintainer_name=$data['M_Account_holder_name'];
                $maintainer_bank_name=$data['M_Bank_name'];
                $maintainer_ifsc=$data['M_IFSC'];
                $maintainer_account_no=$data['M_Account_number'];
            }
            if($data["M_same"]==1){
                $maintainer_name=$data['Account_holder_name'];
                $maintainer_bank_name=$data['Bank_name'];
                $maintainer_ifsc=$data['IFSC'];
                $maintainer_account_no=$data['Account_number'];
            }
            
            $landlord = [
                'name'=>$name,
                'account_holder_name'=>$account_holder_name,
                'bank_name'=>$bank_name,
                'ifsc'=>$ifsc,
                'account_number'=>$account_number,
                'landlord_city'=>$landlord_city,
                'landlord_state'=>$landlord_state,
                'pan_number'=>$pan_number,
                'pan_doc'=>$pan_doc,
                'maintainer_name'=>$maintainer_name,
                'maintainer_bank_name'=>$maintainer_bank_name,
                'maintainer_ifsc'=>$maintainer_ifsc,
                'maintainer_account_no'=>$maintainer_account_no,
            ];
            error_log($landlord_id);
            DB::table('landlord')->where('landlord_id',$landlord_id)->update($landlord);

            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "message" => "Landlord updated Successfully",
                "data" => $data
            ]);
        }
    }

    public function updateDocuments($property_id,$landlord_id,Request $request)
    {
        //Validate and update the property..
        $validator=Validator::make($request->all(), [
            'startdate_agreement' => 'required|date_format:Y-m-d',
            'enddate_agreement' => 'required|date_format:Y-m-d',
            // 'rent_agreement' => 'required',
        ]);

        if ($validator->fails()) {
          error_log($validator->messages());
            return response()->json([
                "status" => "FAILURE",
                "code" => "200",
                "message" => $validator->messages()//"ERROR Ocurred"
            ]);
        }

        else{
            $data = $request->all();
            $agreement_start = $data['startdate_agreement'];
            $agreement_end = $data['enddate_agreement'];
            // $image = $data['property_image'];//image data encoded in base64
            // $exploded = explode(',', $image);//seprating only the imagedata
            // $decoded = base64_decode($exploded[1]);//decoding again into image
            // if(str_contains($exploded[0],'jpg'))//giving the value to extension
            // $extension = 'jpg';
            // elseif(str_contains($exploded[0],'png'))
            // $extension = 'png';
            // elseif(str_contains($exploded[0],'pdf'))
            // $extension = 'pdf';
            // elseif(str_contains($exploded[0],'jpeg'))
            // $extension = 'jpeg';
            // $fileName = str_random().'.'.$extension;//giving the name to the image
            // $path = public_path().'/Propertydocuments/'.$fileName;//path where the image need to be store
            // file_put_contents($path, $decoded);//storing the image
            $rent_agreement = 'rent_agreement';//storing the filename in database
            $documents = [
            'agreement_start'=>$agreement_start,
            'agreement_end'=>$agreement_end,
            'rent_agreement'=>$rent_agreement,
            ];
            DB::table('property_documents')->where('landlord_id',$landlord_id)->where('property_id',$property_id)->update($documents);
        }
    }

}
