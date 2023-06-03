<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Hr;

// use App\Models\user;
// use App\Http\Controllers\ApiUserController;

class ApiUserController extends Controller
{
    public function userget($email){
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $user = DB::select('select name, email from users where email = ?', [$email]);

        if (!$user) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Get User';
            $arr['data'] = $user[0];
        } else{
            $arr['code'] = 'E01';
            $arr['msg'] = 'No Data';
        }
        // var_dump($user);
        return $arr;
    }

    
    public function userpost(Request $req){
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $user = DB::insert('INSERT INTO users(NAME, email, PASSWORD)VALUES(?,?,?)',[
            $req->name
            ,$req->email
            ,Hash::make($req->password)
        ]);
        if (!$user) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success Registration';
            $arr['data'] = [$req->email];
        }else{
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild Ragistration';
        }
        return $arr;
    }

    
    public function userput(Request $req, $email){
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $result = DB::update(
            'update users set name = ? where email= ?',
            [
            $req->name
            ,$email
        ]);

        if ($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success update';
            $arr['data'] = [$req->name];
        }else{
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild update';
        }
        return $arr;

    }

    
    public function userdelete($email){
        //CRUD 처리 구문
        $arr = [
            'code' => '0'
            ,'msg' => ''
        ];
        $date = Carbon::now();
        $result = DB::update(
            'update users set deleted_at = ?, delete_flg = ? where email= ?',
        [
            $date
            ,'1'
            ,$email
        ]);
    //----------------------------------------------------------------------   
       
        if ($result) {
            $arr['code'] = '0';
            $arr['msg'] = 'Success update';
            $arr['data'] = ['deleted_at' => $date, 'email' => $email];
        }else{
            $arr['code'] = 'E01';
            $arr['msg'] = 'Faild update';
        }
        return $arr;
    }
}

