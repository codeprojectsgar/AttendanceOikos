<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'employee_id',
        'email',
        'password',
        'fname',
        'lname',
        'minitial',
        'extension',
        'bday',
        'phone_number',
        'telephone_number',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'nationality',
        'sex',
        


    
           


        


    ];
    public $timestamps=false;
}
