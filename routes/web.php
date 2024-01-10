<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::view('/', 'welcome');
//These code statement were made using controllers.php
Route::get('Aboutus',[Controller::class,'aboutus']);
Route::get('Login',[Controller::class,'login']);
Route::get('Programs',[Controller::class,'programs']);
Route::get('Register',[Controller::class,'register']);
Route::get('Booking',[Controller::class,'booking']);
Route::get('Booking2',[Controller::class,'booking2']);
Route::get('Admin',[Controller::class,'admin']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    
require __DIR__.'/auth.php';
