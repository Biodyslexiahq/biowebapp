<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appointment extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request,[
            "Parentname"=>"required",
            "Studentname"=>"required",
            "Studentage"=>"required",
            "Address"=>"required",
            "Contactnum"=>"required",
            "Email"=>"required|email|min:20",
            "Date"=>"required",
            "timeform"=>"required",
            "assestmentform"=>"required",
            "paymentform"=>"required"

        ],[
            "Parentname.required"=>" Parent Name should be filled",
            "Studentname.required"=>" Student Name should be filled",
            "Studentage.required"=>" Student age should be filled",
            "Address.required"=>" Address should be filled",
            "Contactnum.required"=>" Contact Number should be filled",
            "Email.min"=>" Email should be filled more than 20",
            "Date.required"=>" Date should be filled",
            "timeform.required"=>" Time should be filled",
            
        ]);

        $Parentname = $request->input('Parentname');
        $Studentname = $request->input('Studentname');
        $Studentage = $request->input('Studentage');
        $Address =$request->input('Address');
        $Contactnum =$request->input('Contactnum');
        $Email =$request->input('Email');
        $Date =$request->input('Date');
        $timeform =$request->input('timeform');
        $assestmentform =$request->input('assestmentform');
        $paymentform =$request->input('paymentform');
        $data=array('Parentname'=>$Parentname,'Studentname'=>$Studentname,'Studentage'=>$Studentage,'Address'=>$Address,'Contactnum'=>$Contactnum,'Email'=>$Email,'Date'=>$Date,'timeform'=>$timeform,'assestmentform'=>$assestmentform,'paymentform'=>$paymentform);

        DB::table('booking_table')->insert($data);

        die("Form Submitted");
    }
}
