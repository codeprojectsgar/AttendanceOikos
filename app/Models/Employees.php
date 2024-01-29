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
        'name',
        'role',
        'status'
    ];
    public $timestamps=false;
}
