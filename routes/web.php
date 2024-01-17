<?php

use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\Contactuscontroller;
use App\Models\ContactusDataModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Appointment;
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

Route::get('Appointment',[Controller::class,'appointment']);
Route::get('Dyslexiainfo',[Controller::class,'dyslexiainfo']);
Route::get('ProbleminDyslexia',[Controller::class,'problemindyslexia']);
Route::get('Childevaluation',[Controller::class,'childevaluation']);
Route::get('Commonques',[Controller::class,'Commonques']);
Route::get('Collab',[Controller::class,'collab']);
Route::get('Biofeedback',[Controller::class,'biofeedback']);
Route::get('Vakt',[Controller::class,'vakt']);
Route::get('Multisensory',[Controller::class,'multisensory']);
Route::get('Multisensory2',[Controller::class,'multisensory2']);
Route::get('Chooseus',[Controller::class,'chooseus']);
Route::get('Contactus',[Controller::class,'contactus']);
Route::get('Introductionletters',[Controller::class,'introductionletters']);
Route::get('Foundationprog',[Controller::class,'foundationprog']);
Route::get('Aboutusselection',[Controller::class,'aboutusselection']);
Route::get('Arifulbio',[Controller::class,'arifulbio']);
Route::get('Idrisbio',[Controller::class,'idrisbio']);
Route::get('Nohbio',[Controller::class,'nohbio']);
Route::get('Childrensuccess',[Controller::class,'childrensuccess']);


//FORM//
Route::post('/addappdata',[Appointmentcontroller::class, 'addappdata'])->name('addappdata');
Route::post('/addcontactusdata',[Contactuscontroller::class, 'addcontactusdata'])->name('addcontactusdata');
//FORM//

Route::get('Booking2',[Controller::class,'booking2']);
Route::get('Admin',[Controller::class,'admin']);
Route::get('Default',[Controller::class,'default']);
Route::get('Teacher',[Controller::class,'teacher']);



//CHATBOX PUSHER//
//Route::get('/', 'app\Http\Controllers\PusherController@index');//
Route::post('/broadcast', 'app\Http\Controllers\PusherController@broadcast');
Route::post('/receive', 'app\Http\Controllers\PusherController@receive');
//CHATBOX PUSHER//
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('teacher', 'teacher')
    ->middleware(['auth', 'verified'])
    ->name('teacher');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::view('welcome', 'welcome')
    ->middleware(['auth', 'verified'])
    ->name('welcome');


    
require __DIR__.'/auth.php';
