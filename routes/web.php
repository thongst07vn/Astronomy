<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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
Route::get('/welcome',[LoginController::class,'signout']);

Route::get('/admin',[AdminController::class,'shows']);
Route::get('/test',[AdminController::class,'signout']);
Route::post('/admin/table',[AdminController::class,'signin']);
Route::get('/admin/table',[AdminController::class,'showtb']);
Route::post('/admin/delete/{id}',[AdminController::class,'deleted']);
Route::get('/admin/delete/{id}',[AdminController::class,'delete']);
Route::post('/admin/form',[BlogController::class,'editor']);
Route::get('/admin/form',[BlogController::class,'showf']);
Route::get('/admin/form/{id}',[BlogController::class,'edit']);
Route::post('/admin/form/{id}',[AdminController::class,'update']);
Route::get('/admin/formconstellar',[AdminController::class,'showfc']);
Route::get('/admin/observatory',[AdminController::class,'showo']);

Route::post('/home',[LoginController::class,'signin']);
Route::get('/',[MenuController::class,'index']);
Route::post('/',[MenuController::class,'avatar']);
Route::get('/home',[MenuController::class,'index']);
Route::get('/about',[MenuController::class,'about']);
Route::get('/blog',[MenuController::class,'blog']);
Route::get('/blog/{id}',[BlogController::class,'post']);
Route::get('/constellation',[MenuController::class,'constellation']);
Route::get('/planet',[MenuController::class,'planet']);
Route::get('/observatory',[MenuController::class,'observatory']);



