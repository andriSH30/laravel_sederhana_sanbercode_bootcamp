<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function welcome(Request $request){
        $namaDepan = $request->first_name;
        $namaBelakang = $request->last_name;

        return view('welcome',compact('namaDepan','namaBelakang'));
    }
}
