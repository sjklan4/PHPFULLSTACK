<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        return view('test')->with('name', '아카이브'); //with구문작성후 ('name','작성하려는 내용')을가지고 추가로 연결시킬수 있다.
    }

}

