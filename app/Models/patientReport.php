<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientReport extends Model
{
    use HasFactory;

    protected $table = "patientreport";

    protected $primaryKey = 'patientreportID';

    public $incrementing = false;
 
    protected $keyType = 'string';

    protected $fillable = [
        'patientreportID',
        'patientName',
        'patientEmail',
        'patientGender', 
        'bookingDate', 
        'bookingTime', 
        'venue',
        'reportpdf',
        'uploader',
     ];
 
     public $timestamps = false; 


    
}
