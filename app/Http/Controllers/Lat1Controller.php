<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Agus";
        $data["asal"]="Bandung";
       return view('v_latihan1', $data);
    }

}
