<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonePeController extends Controller
{
    public function phonepe(){

    }

    public function response(Request $request){
        $input = $request->all();
        dd($input);
    }
}
