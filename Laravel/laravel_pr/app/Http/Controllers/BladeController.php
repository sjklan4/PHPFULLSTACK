<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index(){
        $arr = [
            'name' => '사람'
            ,'gender' => '모름'
            ,'brithday' => '1550203'
            ,'addr' => '경북'
            ,'tell' => '010222222'
        ];

        return view('blade')->with('data',$arr);
    }
}
