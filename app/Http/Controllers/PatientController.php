<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Imports\PatientImport;
use Excel;


class PatientController extends Controller
{
    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new PatientImport,$request->file);
        return "Record are imported succesfully";
    }
}