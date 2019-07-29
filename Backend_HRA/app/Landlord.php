<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $connection = 'mysql';
    protected $table = 'landlord';
    protected $primaryKey = 'landlord_id';
    public $timestamp = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';
    protected $guarded = ['landlord_id'];
    protected $fillable = [
        'Landlord_name', 'Account_holder_name', 'Bank_name', 'IFSC', 'Account_number', 'Landlord_city', 'Landlord_state', 'Landlord_PAN_number', 'pan_doc','maintainer_name','maintainer_bank_name','maintainer_ifsc','maintainer_account_no', 'created_by', 'landlord_plus_code','updated_by'
    ];

   /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	//
    ];
} 
