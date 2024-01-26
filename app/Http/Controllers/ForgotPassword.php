<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function submit(Request $request) {
        $email= $request->input("email");
        $code= $request->input("code");
        return response()->json(['Email Received' => $email,'Code Received'=> $code]);
    }
}
