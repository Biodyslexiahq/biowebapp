<?php

namespace App\Http\Controllers;

use App\Models\fourmdailydata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fourmdailycontroller extends Controller
{
    public function add(Request $request)
    {
        fourmdailydata::create([
            'Programme'=> $request -> Programme,
            'time'=> $request -> time,
            'Online_Class'=> $request -> Online_Class,
            'Student_name'=> $request -> Student_name,
            'NRIC'=> $request -> NRIC,


        ]);

        return redirect()->to('/')->with ('success','Appointment has been made!');
    }

    public function addfourmdailydata (Request $request)
    {
        $tablename = 'four_mdailyclass';

        $data = [[
            'Programme'=> $request -> programmeselect1,
            'time' => $request -> Sessionphysical,
            'Online_Class' => $request -> onlineclass,
            'Student_name' => $request -> studentname,
            'NRIC'=> $request -> nric,
            
        ]];

        
        DB::connection('mysql')->table($tablename)->insert($data);
        return redirect()->to('/');
    }
}
