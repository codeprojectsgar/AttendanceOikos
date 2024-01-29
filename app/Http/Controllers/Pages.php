<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function forgotpassword () {
        return view("forgot");
    }

}
