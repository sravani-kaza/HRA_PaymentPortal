<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $connection = 'mysql';
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';
    public $timestamp = true;

    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';
    protected $guarded = ['transaction_id'];
    protected $fillable = [
        'property_id', 'user_id', 'landlord_id', 'tenant_name', 'tenant_address', 'tenant_phone', 'landlord_address', 'landlord_phone', 'landlord_name','acc_holder_name', 'acc_number', 'bank_name', 'bank_ifsc', 'mode_of_payment','date','rent_month','rent_amount','remarks','receipt','rent_receipt'
    ];

}
