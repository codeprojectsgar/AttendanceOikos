<?php

use App\Http\Controllers\ForgotPassword;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/reset',function(){
    return view('reset_password');
});



Route::get('/',function(){
    return view('login');
});

Route::post('/submitcode', [ForgotPassword::class,'submit']);


//Routes for students
Route::get('/student/home',function(){
    return view('student.home');
});

Route::get('/student/announcement',function(){
    return view('student.announcement');
});
Route::get('/student/calendar',function(){
    return view('student.calendar');
});
Route::get('/student/time_record',function(){
    return view('student.time_record');
});
Route::get('/student/user',function(){
    return view('student.user');
});


//Routes for admins
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});