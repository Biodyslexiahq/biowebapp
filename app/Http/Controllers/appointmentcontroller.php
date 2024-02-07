<?php

namespace App\Http\Controllers;

use App\Models\AppointmentData;
use App\Http\Requests\Appointmentformreq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Appointmentcontroller extends Controller{


   
    public function add(Appointmentformreq $request){

     

        AppointmentData::create([
            'studentssname' => $request->studentssname,
            'studentsage'=> $request->studentsage,
            'address'=> $request->address,
            'contactnum'=>$request->contactnum,
            'email'=> $request->email,
            'date'=> $request->date,
            'time'=> $request->time,
            'assessmentopt'=> $request->assessmentopt,
            'paymentopt'=> $request->paymentopt,

        ]);
        

        return redirect()->to('/')->with ('success','Appointment has been made!');
    }

    public function addappdata(Appointmentformreq $request){

        $tableName='appointment';

        $data =[
            [
           
            'studentssname' => $request->Studentname,
            'studentsage'=> $request->studentage,
            'address'=> $request->Address,
            'contactnum'=>$request->contactnum,
            'email'=> $request->Email,
            'date'=> $request->Date,
            'time'=> $request->timeform,
            'assessmentopt'=> $request->assestmentform,
            'paymentopt'=> $request->paymentform,
            ],
        ];

        


        
        DB::connection('mysql')->table($tableName)->insert($data);
        return redirect()->to('/');
    }

    




}