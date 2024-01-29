<?php

use App\Http\Controllers\ForgotPassword;
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

Route::get('/', function () {
    return view('');
});

Route::get('/forgot', [Pages::class,'forgotpassword']);

Route::get('/login', [Pages::class,'login']);

Route::get('/reset', [Pages::class,'resetpassword']);

Route::post('/submitcode', [ForgotPassword::class,'submit']);