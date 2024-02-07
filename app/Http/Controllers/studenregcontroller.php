<?php

namespace App\Http\Controllers;
use App\Models\studentregdata;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class studenregcontroller extends Controller
{
    
    public function add (Request $request)
    {
        studentregdata::create([
            'Studentname' => $request->Studentname,
            'Studentage' => $request->Studentage,
            'Gender' => $request->Gender,
            'NRIC' => $request->NRIC,
            'EtchnicBackground' => $request->EtchnicBackground,
            'Ethnicothers' => $request->Ethnicothers,
            'Schoolgrade' => $request->Schoolgrade,
            'Address' => $request->Address,
            'Fathername' => $request->Fathername,
            'Fathernum' => $request->Fathernum,
            'FatherEmail' => $request->FatherEmail,
            'Mothername' => $request->Mothername,
            'Motheremail' => $request->Motheremail,
            'Mothernum' => $request->Mothernum,
            'progreg' => $request->progreg,
        ]);

        return redirect()->to('/');
    }

    public function addstudentregdata (Request $request)
    {
        $tablename = 'studentreg';

        $data = [[
            'Studentname' => $request->studentname,
            'Studentage' => $request->studentage,
            'Gender' => $request->genderselect,
            'NRIC' => $request->nric,
            'EtchnicBackground' => $request->ethnicselect,
            'Ethnicothers' => $request->enthnicothers,
            'Schoolgrade' => $request->schoolgrade,
            'Address' => $request->studentaddress,
            'Fathername' => $request->fathername,
            'Fathernum' => $request->fathernum,
            'FatherEmail' => $request->fatheremail,
            'Mothername' => $request->mothername,
            'Motheremail' => $request->motheremail,
            'Mothernum' => $request->mothernum,
            'progreg' => $request->progselect,
            
        ]];

        DB::connection('mysql')->table($tablename)->insert($data);
        return redirect()->to('/');
    }
}
