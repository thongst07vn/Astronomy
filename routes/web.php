<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;

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

Route::get('/login',[LoginController::class,'shows']);
Route::post('/login',[LoginController::class,'signup']);
Route::get('/login/forgotpasswword',[LoginController::class,'forgot']);
Route::get('/login/forgotpasswword/otp',[LoginController::class,'forgotmail']);
Route::get('/login/forgotpasswword/resetpassword',[LoginController::class,'checkotp']);
Route::post('/login/forgotpasswword/resetpassword',[LoginController::class,'reset']);

Route::get('/admin',[AdminController::class,'shows']);
Route::get('/admin/dashboard',[AdminController::class,'show']);
Route::get('/admin/table',[AdminController::class,'showtb']);
Route::get('/admin/form',[AdminController::class,'showf']);




Route::post('/home',[LoginController::class,'signin']);
Route::get('/',[MenuController::class,'index']);
Route::get('/index',[MenuController::class,'index']);
Route::get('/about',[MenuController::class,'about']);