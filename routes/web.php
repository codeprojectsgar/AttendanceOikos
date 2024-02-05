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
    return view('student.time_record');
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
Route::get('/students/Home', [Pages::class,'s_home']);
Route::get('/students/Calendar', [Pages::class,'s_calendar']);
Route::get('/students/Announcement', [Pages::class,'s_announcement']);
Route::get('/students/User-Info', [Pages::class,'s_userInfo']);
Route::get('/students/Time-Logs', [Pages::class,'s_timerecord']);

//Routes for employees
Route::get('/employees/User-Info',[Pages::class,'e_userInfo']);
Route::get('/employees/Announcement',[Pages::class,'e_announcement']);
Route::get('/employees/Calendar',[Pages::class,'e_calendar']);
Route::get('/employees/Document-Request',[Pages::class,'e_document_request']);
Route::get('/employees/time_record',[Pages::class,'e_time_record']);
Route::get('/employees/Home',[Pages::class,'e_home']);
Route::get('/employees/Document-Request/Approval',[Pages::class,'e_approval']);

