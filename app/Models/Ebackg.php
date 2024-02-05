<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EBackg extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        //Mother
        'm_email',
        'm_fname',
        'm_lname',
        'm_minitial',
        'm_extension',
        'm_bday',
        'm_phone_number',
        'm_address',
        'm_city',
        'm_region',
        'm_postal_code',
        'm_country',
        'm_nationality',
        //Father   
        'f_fname',
        'f_lname',
        'f_minitial',
        'f_extension',
        'f_bday',
        'f_phone_number',
        'f_address',
        'f_city',
        'f_region',
        'f_postal_code',
        'f_country',
        'f_nationality',

        //spouse's Details
        'spouse_lname',
        'spouse_fname',
        'spouse_minitial',
        'spouse_extension',
        'spouse_occupation',
        'spouse_employer',
        'spouse_business_address',
        'spouse_telephone_number',

    ];
    public $timestamps=false;
    protected $table='e_backgs';
}
