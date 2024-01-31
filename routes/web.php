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

//Routes for main account
Route::get('/', [Pages::class,'login']);
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



Route::get('/forgot',[Pages::class,'forgotpassword']);
Route::get('/reset',[Pages::class,'resetpassword']); 

//Routes for admins
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});
Route::get('/admin/logout',[LoginController::class,'logout']);


Route::get('/reset', [Pages::class,'resetpassword']);

//Routes for students
Route::get('/students/time-logs', [Pages::class,'timerecord']);

//Routes for employees
Route::get('/employees/user-info',[Pages::class,'e_userInfo']);
Route::get('/employees/Announcement',[Pages::class,'e_announcement']);
Route::get('/employees/Calendar',[Pages::class,'e_calendar']);
Route::get('/employees/Document-Request',[Pages::class,'e_document_request']);
Route::get('/employees/Time-Record',[Pages::class,'e_time_record']);
Route::get('/employees/Home',[Pages::class,'e_home']);

