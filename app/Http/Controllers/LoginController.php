<?php

namespace App\Http\Controllers;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $credentials=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::guard('users')->attempt($credentials)){
            $user_role=Auth::guard('users')->user()->role;
            switch($user_role){
                case 1:
                    $request->session()->put('adminsuccess',true);
                    break;
                case 2:
                    $request->session()->put('employeesuccess',true);
                    break;
                case 3:
                    $request->session()->put('studentsuccess',true);
                    break;
            }
            return response()->json(['success'=>true,'role'=>$user_role]);
        }
        return response()->json(['success'=>false]);
    }

    public function logoutAdmin(){
        Session::forget('adminsuccess');
        return redirect('/');
    }

    public function logoutEmployee(){
        Session::forget('employeesuccess');
        return redirect('/');
    }

    public function logoutStudent(){
        Session::forget('studentsuccess');
        return redirect('/');
    }
}