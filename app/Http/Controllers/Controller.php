<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function aboutus()
    {
        return view('Aboutus');
    }
    public function login()
    {
        return view('Login');
    }
    public function programs()
    {
        return view('Programs');
    }
    public function register() 
    {
        return view('Register');
    }
    public function booking()
    {
        return view('Booking');
    }
    public function booking2()
    {
        return view('Booking2');
    }
    public function appointment()
    {
        return view('Appointment');
    }
    public function dyslexiainfo()
    {
        return view('Dyslexiainfo');
    }
    public function problemindyslexia()
    {
        return view('ProbleminDyslexia');
    }
    public function childevaluation()
    {
        return view('Childevaluation');
    }


}


