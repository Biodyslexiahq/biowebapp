<?php

namespace App\Http\Controllers;

use App\Models\fourmsatdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fourmsatcontroller extends Controller
{
    public function add(Request $request)
    {
        fourmsatdata::create([
            'Programme'=> $request -> Programme,
            'time'=> $request -> time,
            'Online_Class'=> $request -> Online_Class,
            'Student_name'=> $request -> Student_name,
            'NRIC'=> $request -> NRIC,


        ]);

        return redirect()->to('/')->with ('success','Appointment has been made!');
    }

    public function addfourmsatdata (Request $request)
    {
        $tablename = 'fourmsatclass';

        $data = [[
            'Programme'=> $request -> progselect,
            'time' => $request -> timeselect,
            'Online_Class' => $request -> timeselect2,
            'Student_name' => $request -> studentname,
            'NRIC'=> $request -> nric,
            
        ]];

        
        DB::connection('mysql')->table($tablename)->insert($data);
        return redirect()->to('/');
    }
}
