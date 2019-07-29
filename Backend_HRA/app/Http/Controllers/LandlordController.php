<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Landlord;
use App\Property;
use App\Property_Documents;
use Image;

class LandlordController extends Controller
{

    // function to add a new property in database which returns propertyid of the given property
    public function addproperty($data){
        // error_log($data);
        $property = new Property;
        $property->name = $data['Property_name'];
        $property->rent_deposit = $data['Security_deposit_amount'];
        $property->rent_amount = $data['Rent_amount'];
        $property->rent_maintenance = $data['Maintenance_amount'];
        $property->maintenance_due_date = $data['Maintenance_due_date'];
        $property->rent_due_date = $data['Rent_due_date'];
        //$date=date('Y-m-d',strtotime($data['Staying_since']));
        $property->staying_since = $data['Staying_since'];
        $property->paid_secuirty_deposit = $data['deposit'];
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
        file_put_contents($path, $decoded);//storing the image
        $fileName=$fileName;
        $property->property_image = $fileName;//storing the filename in database
        $property->door_number = $data['Door_number'];
        $property->society = $data['Society'];
        $property->area = $data['Area'];
        $property->city = $data['City'];
        $property->state = $data['State'];
        $property->pin = $data['Pin'];
        // $property->created_by = $data['created_by'];
        // $property->updated_by = $data['updated_by'];
        try{
            $property->save();
            $propertyid = $property->property_id;
            return $propertyid;
        }
        catch(\Exception $e){
            error_log($e);
        }
    }

    // function to add a landlord in database which returns id of the landlord
    public function addlandlord($data,$propertyid){
        $landlord = new Landlord;
        $landlord->property_id = $propertyid;
        $landlord->name = $data['Landlord_name'];
        $landlord->account_holder_name = $data['Account_holder_name'];
        $landlord->bank_name = $data['Bank_name'];
        $landlord->ifsc = $data['IFSC'];
        $landlord->account_number = $data['Account_number'];
        $landlord->landlord_city = $data['Landlord_city'];
        $landlord->landlord_state = $data['Landlord_state'];
        if(!empty($data['Landlord_PAN_number']))
            {
                $landlord->pan_number = $data['Landlord_PAN_number'];
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
                $fileName=$fileName;
                $landlord->pan_doc = $fileName;//storing the filename in database
            }
        $landlord->maintainer_name=$data['M_Account_holder_name'];
        $landlord->maintainer_bank_name=$data['M_Bank_name'];
        $landlord->maintainer_ifsc=$data['M_IFSC'];
        $landlord->maintainer_account_no=$data['M_Account_number'];
        // $landlord->created_by = $data['created_by'];
        // $landlord->updated_by = $data['updated_by'];
        try{
            $landlord->save();
            $landlordid=$landlord->landlord_id;
            return $landlordid;
        }
        catch(\Exception $e){
            error_log($e);
        }
        
    }

    // function to add the documents of the property in database
    public function addpropertydoc($data,$propertyid,$landlordid){
        $property_documents = new Property_Documents;
        $property_documents->property_id = $propertyid;
        $property_documents->landlord_id = $landlordid;
        $property_documents->agreement_start = $data['startdate_agreement'];
        $property_documents->agreement_end = $data['enddate_agreement'];
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
        $path = public_path().'/Propertydocuments/'.$fileName;//path where the image need to be store
        file_put_contents($path, $decoded);//storing the image
        $fileName=$fileName;
        $property_documents->rent_agreement = $fileName;//storing the filename in database
        // $property_documents->created_by = $data['created_by'];
        // $property_documents->updated_by = $data['updated_by'];
        try{
            $property_documents->save();
        }
        catch(\Exception $e){
            error_log($e);
        }
    }

    //main function which is used to vaildate and return the response
    public function store(Request $request)
    {
        //Validate and store the blog post...
        $validator=Validator::make($request->all(), [
            'Property_name' => 'required|regex:/^[A-za-z0-9\s\-\/]+$/',
            'Security_deposit_amount' => 'required|numeric',
            'Rent_amount' => 'required|numeric',
            'Maintenance_amount' => 'required|numeric',
            'Maintenance_due_date' => 'required|integer',
            'Rent_due_date' => 'required|numeric',
            'Staying_since' => 'required|date_format:Y-m-d',
            'deposit' => 'required|alpha_num',
            'property_image' => 'required',
            'Door_number' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Society' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Area' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'City' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'State' => 'required|regex:/^[A-z0-9\s\-\/]+$/',
            'Pin' => 'required|digits:6',
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
            // 'Landlord_PAN_number' => 'required|alpha_num',
            // 'pan_doc' => 'required',
            'startdate_agreement' => 'required|date_format:Y-m-d',
            'enddate_agreement' => 'required|date_format:Y-m-d',
            'rent_agreement' => 'required',
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
            error_log("pass1");
            $propertyid = $this -> addproperty($data);
            $landlordid =  $this -> addlandlord($data,$propertyid);
            $this -> addpropertydoc($data,$propertyid,$landlordid);
            return response()->json([
                "status" => "SUCCESS",
                "code" => "200",
                "message" => "Property added Successfully",
                "data" => $data
            ]);
        }
    }
}
