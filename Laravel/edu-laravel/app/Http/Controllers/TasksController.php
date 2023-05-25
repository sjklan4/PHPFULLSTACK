<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스의 목록 페이지 -  메인페이지 같은 역활
     * @return \Illuminate\Http\Response
     */
    public function index()  // view단에서 출력하고자 하는 부분을 지정해서 출력할 수 있다.
    {
        return 'Tasks.index';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지 - 글 작성페이지 역활
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrOnly = $request->only(['id','pw']);
        return 'Tasks.store!! : '.$arrOnly['id']." ".$arrOnly['pw'];
        // return 'Tasks.store id: '.$request->id.'<br> PW'.$request->pw;
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *  리소스 수정 폼 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasks.edit!! : '.$id;
    }
// 위에 $id부분은 무엇을 위해 사용하는거?
    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리 - 수정페이지에서 수정버튼 클릭시 작동하는 처리 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request); // request에서 받아오는 자료를 확인하기 위함
        $arrAll = $request->all(); //사용자가 전달하는 모든데이터 획득(배열)
        $arrOnly = $request->only(['id','name']); //[]안에는 사용자가 전달한 데이터중 뽑고 싶은 데이터의 키값만 작성
        $oneGet = $request->get('pw'); //사용자가 전달한 데이터 중에 해당하는 데이터의 값만 획득

        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);

        return 'Tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy!! : '.$id;
    }
    
}
