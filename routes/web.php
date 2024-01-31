<?php

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

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


Route::get('/login', [Pages::class,'login']);


Route::post('/login-user',[LoginController::class,'login']);

Route::post('/submitcode', [ForgotPassword::class,'submit']);


//routes for students
Route::get('/student/home',function(){
    return view('student.home');
});
Route::get('/student/announcement',function(){
    return view('student.announcement');
});
Route::get('/student/user',function(){
    return view('student.user');
});
Route::get('/student/time_record',function(){
    return view('student.dashboard');
});
Route::get('/student/calendar',function(){
    return view('student.calendar');
});



//Routes for admins
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});

Route::get('/admin/logout',[LoginController::class,'logout']);

Route::get('/reset', [Pages::class,'resetpassword']);

