<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function forgotpassword () {
        return view("forgot");
    }

    public function login () {
        return view("login");
    }

    public function resetpassword () {
        return view("reset_password");
    }

    public function timerecord () {
        return view("student.time_record");
    }
}
