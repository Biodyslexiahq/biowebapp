<?php

namespace App\Http\Controllers;

use App\Models\Registerroledata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $TableName='users'; 

        $data=([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'role'=>$request->role,
        ]);

        DB::connection('mysql')->table($TableName)->insert($data);
    
        // Rest of your registration logic
    }

    

   
}
