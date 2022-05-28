<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Patient extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = "patiens";
    protected $fillable = [
        'TYPE',
        'PTNO',
        'SALUTATION',
        'PATIENTNAME',
        'GENDER',
        'NATIONALITY',
        'REGION',
        'REGISTREDDATE',
        'EDDITDATE'
    ];

    //TODO devolverá los valores
    // public static function getPatient()
    // {
    //     $records = DB::table('patiens')->select('TYPE','PTNO','SALUTATION','PATIENTNAME','GENDER','NATIONALITY','REGION','REGISTREDDATE','EDDITDATE');
    //     return $records;
    // }

}

