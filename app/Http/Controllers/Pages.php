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


    //Student navigation

    public function calendar () {
        return view("student.calendar");
    }
  
    public function s_timerecord () {
        return view("student.time_record");
    }

    public function s_home () {
        return view("student.home");
    }

    public function s_userInfo () {
        return view("student.user");
    }

    public function s_calendar () {
        return view("student.calendar");
    }

    public function s_announcement () {
        return view("student.announcement");
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

    public function e_approvalpage(){
        return view("employees.approval");
    }

    public function e_approval(){
        return view("employees.approval");
    }

}
