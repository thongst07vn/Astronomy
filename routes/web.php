<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/login',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'signup']);
Route::post('/home',[LoginController::class,'signin']);
Route::get('/',[MenuController::class,'index']);
Route::get('/index',[MenuController::class,'index']);
Route::get('/about',[MenuController::class,'about']);