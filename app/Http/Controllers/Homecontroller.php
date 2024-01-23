<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user();
        if(Auth::id()){
            if($user->hasRole('admin')){
                return view('admin.index');
            }else if ($user->hasRole('user')) {
                return view('user.index');
            }
            
        }else{
            return view('auth.login');
        }
    }

    public function post()
    {
        return view('post');
    }
}
