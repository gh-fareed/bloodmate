<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorQuiz extends Model
{
    use HasFactory;

    protected $table = 'donorquiz';
    protected $primarykey = 'id';
   	public $timestamps = false;
   	protected $fillable = [

   		
   		'id',
   		'q',
   		'ans'
   	];
}
