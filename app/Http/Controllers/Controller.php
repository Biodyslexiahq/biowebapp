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
        public function admin()
    {
        return view('Admin');
    }
    public function default()
    {
        return view('Default');
    }
    public function teacher()
    {
        return view('Teacher');
    }
    public function commonques()
    {
        return view('Commonques');
    }
    public function collab()
    {
        return view("Collab");
    }
    public function biofeedback()
    {
        return view("Biofeedback");
    }
    public function vakt()
    {
        return view("Vakt");
    }
    public function multisensory()
    {
        return view("Multisensory");
    }
    public function multisensory2()
    {
        return view("Multisensory2");
    }
    public function chooseus()
    {
        return view("Chooseus");
    }
    public function contactus()
    {
        return view("Contactus");
    }
    public function introductionletters()
    {
        return view("Introductionletters");
    }
    public function foundationprog()
    {
        return view("Foundationprog");
    }
    public function aboutusselection()
    {
        return view("Aboutusselection");
    }
    public function arifulbio()
    {
        return view("Arifulbio");
    }
    public function idrisbio()
    {
        return view("Idrisbio");
    }
    public function nohbio()
    {
        return view("Nohbio");
    }
    public function childrensuccess()
    {
        return view("Childrensuccess");
    }
    public function mmi()
    {
        return view("MMI");
    }
    public function bioiqra1()
    {
        return view("Bioiqra1");
    }
    public function bioiqra2()
    {
        return view("Bioiqra2");
    }
    public function bioiqrainfo()
    {
        return view("Bioiqrainfo");
    }
    public function programschedule()
    {
        return view("Programschedule");
    }




}


