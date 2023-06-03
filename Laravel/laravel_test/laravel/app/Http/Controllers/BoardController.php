<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    public function list()
    {
        $result = DB::select(
            "select * from test_boards where deleted_flg = '0'"
        );
        return view('board')->with('data', $result);
    }

    public function write(){
        return view('write');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'require'
            ,'content' => 'require'
        ]);
        //쿼리 빌더로 작성시 컬럼에 들어가야 되는 값들에 대한 insert문을 전부 작성해 주어야 한다.
        $date = Carbon::now();
        DB::insert("INSERT INTO test_boards (
            title ,content ,created_at, updated_at, write_user_id) VALUES (?,?,?,?,?)",[$req->title, $req->content, $date,1]);
        
        return redirect()->route('board.list');
    }
}
