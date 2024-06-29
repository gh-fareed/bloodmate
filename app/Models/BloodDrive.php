<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDrive extends Model
{
    use HasFactory;

    protected $table = 'blooddrive';
    protected $primarykey = 'bdriveid';
   	public $timestamps = false;
   	protected $fillable = [
   		'bdriveid',
        'blooddrivetitle',
        'blooddrivedate',
        'blooddrivetime',
        'blooddrivelocation',
        'blooddrivedescription',
        'blooddrivetype'
    ];
}
