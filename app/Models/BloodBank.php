<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

    protected $table = 'bloodbank';
    protected $primarykey = 'id';
   	public $timestamps = false;
   	protected $fillable = [

   		
   		'id',
        'uid',
        'bbname',
        'bbemail',
        'fulname',
        'password',
        'phno',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'daysOn',
        'blood',
        'epname',
        'ephone',

   	];
}
