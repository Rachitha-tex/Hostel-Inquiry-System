<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SmsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,"home"]);
Route::get('/redirects',[HomeController::class,"redirects"]);
Route::get('/contactus',[HomeController::class,"contactus"]);
Route::get('/about',[HomeController::class,"about"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Admin Controllers */
Route::get('/users',[AdminController::class,"user"]);
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::get('/carouselimage',[AdminController::class,"carouselimage"]);
Route::post('/uploadcarousel',[AdminController::class,"uploadcarousel"]);
Route::get('/deletecarousel/{id}',[AdminController::class,"deletecarousel"]);


Route::get('/hostels',[AdminController::class,"hostels"]);
Route::post('/uploadhostel',[AdminController::class,"uploadhostel"]);
Route::get('/deletehostel/{id}',[AdminController::class,"deletehostel"]);
Route::get('/updatehostel/{id}',[AdminController::class,"updatehostel"]);
Route::post('/update/{id}',[AdminController::class,"update"]);

Route::post('/complain',[AdminController::class,"complain"]);
Route::get('/viewcomplaints',[AdminController::class,"viewcomplaints"]);

Route::post('/sms',[SmsController::class,'send_sms']);