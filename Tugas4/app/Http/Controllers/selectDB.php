<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use Illuminate\Http\Request;

class selectDB extends Controller
{
    public function index(){
        $dataDiri = Datadiri::all();
        return view('cobadulu',compact(['dataDiri']));
    }
}
