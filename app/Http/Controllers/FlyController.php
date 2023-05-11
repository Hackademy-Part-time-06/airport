<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlyController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

       public function details(){
        return view('detailfly');
    }
}
