<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Documents extends Model
{
    protected $connection = 'mysql';
    protected $table = 'property_documents';
    protected $primaryKey = 'property_id';
    public $timestamp = true;
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';
    protected $guarded = ['property_id','landlord_id'];
    protected $fillable = ['startdate_agreement', 'enddate_agreement','rent_agreement_doc', 'created_by', 'updated_by'];
}
