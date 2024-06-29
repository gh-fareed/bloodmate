<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUsers extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primarykey = 'id';
   	public $timestamps = false;
   	protected $fillable = [

   		'id',
   		'fname',
   		'lname',
   		'email',
   		'city',
		'blood',
   		'username',
   		'password',
   		'phoneno',
   		'status',
        'profilepic'
   	];


}
