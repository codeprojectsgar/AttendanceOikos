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

    public function calendar () {
        return view("student.calendar");
    }
    public function timerecord () {
        return view("student.time_record");
    }


    //Employee navigation
    public function e_userInfo(){
        return view("employees.userinfo");
    }
    
    public function e_announcement(){
        return view("employees.announcement");
    }
    public function e_calendar(){
        return view("employees.calendar");
    }
    public function e_home(){
        return view("employees.home");
    }
    public function e_time_record(){
        return view("employees.time_record");
    }

    public function e_document_request(){
        return view("employees.document_request");
    }

}
