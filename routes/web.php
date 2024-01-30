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


Route::get('/', [Pages::class,'login']);

Route::get('/students/time-logs', [Pages::class,'timerecord']);

Route::post('/login-user',[LoginController::class,'login']);

Route::post('/submitcode', [ForgotPassword::class,'submit']);

Route::get('/forgot',[Pages::class,'forgotpassword']);

Route::get('/reset',[Pages::class,'resetpassword']); 

//Routes for admins
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});

Route::get('/admin/logout',[LoginController::class,'logout']);


