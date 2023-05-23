<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index(){
        $arr = [
            'name' => '박상준'
            ,'gender' => '남자'
            ,'birthday' => '19900606'
            ,'addr' => '구미'
            ,'tel' => '0102212593'
            
        ];


        $arr2 = [];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }
}

// 데이터 체이닝을 통해서 with에 지정한 이름을 한번더 지정해서 불러 올수있다.
// 위 구문 직역 하면 with(data1)를 불러오고 with(data2)을 불러온다. 로 할 수 있다.