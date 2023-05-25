<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show']);


Route::get('admin/register',[RegisterController::class,'create_admin'])->middleware('guest');


Route::get('admin/login',[LoginController::class,'login_admin'])->name('admin-login')->middleware('guest');


Route::post('admin/register',[AdminController::class,'store']);
Route::post('admin/login',[AdminController::class,'login_admin']);
Route::get('/admin/dashboard',[AdminController::class,'index']);



// Route::get('/home', [HomeController::class, 'index'])->name('home');


