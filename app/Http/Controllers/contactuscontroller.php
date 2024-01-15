<?php

namespace App\Http\Controllers;

use App\Models\ContactusDataModel;
use Illuminate\Http\Request;
use App\Http\Requests\contactusformreq;
use Illuminate\Support\Facades\DB;

class Contactuscontroller extends Controller{

    public function add(contactusformreq $request){

        ContactusDataModel::create([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        return redirect()->to('/')->with ('success','Message has been sent!');
    }

    public function addcontactusdata(contactusformreq $request){

        $tableName = 'contactus';

        $data = [[
                'name'=> $request->contact_nom,
                'email'=> $request->contact_email,
                'subject'=> $request->contact_sujet,
                'message'=> $request->contact_message,
        ],
    
    ];


    DB::connection('mysql')->table($tableName)->insert($data);
        return redirect()->to('/');

    }
}