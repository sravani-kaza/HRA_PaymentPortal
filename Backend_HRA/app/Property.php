<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $connection = 'mysql';
    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $timestamp = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';
    protected $guarded = ['property_id'];
    protected $fillable = ['Property_name', 'Security_deposit_amount', 'Rent_amount', 'Maintenance_amount','Maintenance_due_date','Rent_due_date','Staying_since','deposit', 'property_image','Door_number', 'Society',
    'Area', 'City', 'State', 'Pin', 'plus_code','created_by', 'updated_by'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	//
    ];
}
