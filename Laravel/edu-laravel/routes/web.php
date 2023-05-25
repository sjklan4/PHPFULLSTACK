<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //view 단에 있는 그 파일명을 직접 지정해서 찾도록
});

//---------------------------
// 라우트 정의 : 
//---------------------------
// 문자열 리턴
Route::get('/hi', function(){
    return '안녕하세요.'; // echo와 같은 느낌으로
});

// Route::get -get방식으로 ('/ url명칭 ' - url명칭 지정, function(){
//     return '안녕하세요.' - 무엇을 할지를 설정;
// });
// 뷰 리턴(뷰 파일이 없으면 에러발생, 디버그모드 설정이 false면 500에러, true면 에러의 상세정보 출력)
Route::get('/myview', function(){
    return view('myview');
});

// ------------------------------------------------
// HTTP 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의 된것이 실행
// ------------------------------------------------
Route::get('/home', function(){
    return view('home');
});


// GET 요청에 대한 처리
Route::get('/method', function(){
    return 'GET Method!!';
});

// post 요청에 대한 처리
Route::post('/method', function(){
    return 'POST Method!!';
});

// PUT 요청에 대한 처리 
Route::put('/method', function(){
    return 'PUT Method!!';
});

// delete 요청에 대한 처리
Route::delete('/method', function(){
    return 'Delete Method';
});

// 위 기능은 mvc에서 application 안에서 동작 처리 진행 

//*-----------------------------
// 모든요청에 대한 처리
// 처리결과는 가장 마지막에 작성되는 라우터를 기준으로 실행된다. - 중복 라우터 생성금지
//-------------------------------
Route::any('/method', function(){
    return 'ANY method';
});

// 특정 메소드 요청에 대한 처리 - 지정한 method에 대해서 설정한 값에 따라 처리를 한다는 의미
Route::match(['get','post'],'/method', function(){
    return 'MATCH Method!!';
});

//-----------------------------------------------
// 라우트에서 파라미터 제어
//-----------------------------------------------
// 쿼리 스트링으로 파라미터 획득 - request $requst이 표현은 $에 있는 값을 request화 시키 겠다는 의미 변수를 객체로 정의 시킨다는 의미
Route::get('/query', function(Request $request){
    return $request->id.", ".$request->name.",".$request->title;
});

// *URL 세그먼트로 지정 파라미터 획득  - 형태 중요. API에서 주로 사용 , 라우터가 segement값에 있는 것을 보고 그곳으로 접속하겠다는 의미
Route::get('/segment/{id}', function($id){
    return 'segment ID : '.$id; 
});

// *URL 세그먼트로 지정 파라미터 획득 : 기본값 설정 function($키값 = 기본값 ) / segement2{키값이름}
Route::get('/segment2/{id?}', function($id = 'base'){
    return 'segment2 ID : '.$id;
});
// Request로도 세그먼트 파라미터를 획득 가능 segment를 request방식으로 받을수도 있다.  ex) function(Request $request)
// 세그먼트 파라미터가 없어도 404에러 발생 안함
// Route::get('/segment2/{id?}', function(Request $request){
//     return 'segment2 ID : '.$id;
// });


// -------------------------------------------------------------------
// 라우트의 이름 지정 
// -------------------------------------------------------------------
Route::get('/nameshome', function(){
    return view('myview');
}); //view단의 이름을 정해주고 아래 출력 값을 지정해 주는 순서로 진행

// Route::get('/names/home', function(){ //이름 꼭 나눠야 되나요?
//     return view('nameshome');
// }); //view단의 이름을 정해주고 아래 출력 값을 지정해 주는 순서로 진행


Route::get('/names' , function(){
    return 'name.index';
})->name('names.index'); // 3번 방식에서 찾아가는 지정 이름을 작성하는 부분

// ------------------------------------------
// 라우트 매칭 실패시 대체 라우트 정의
// : 항상 최하단에 작성
// ------------------------------------------
Route::fallback(function(){
    return '잘못된 경로로 접속하셨습니다.';
}); //잘못된 경로로 url을 입력시 오류 메시지를 보여 주도록 하는 구문.


//---------------------------------------------
// 라우트의 그룹 및 공통경로설정
// --------------------------------------------
// 공통 경로 설정시 (middleware('auth')는 로그인 여부를 확인해주는 역활을 한다.)
Route::prefix('users')->group(function(){ //prefix('그룹이름') 묵고 형식에 맞추기
    Route::get('/login', function(){
        return 'Login!!';
    })->name('users.login');

    Route::get('/logout', function(){
        return 'Logout!!';
    })->name('users.logout');

    Route::get('/registration', function(){
        return 'Registration!!';
    })->name('users.registration');
});

//-------------------------------------
// 서명 라우터
//-------------------------------------.
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function(){
    // 일반 URL 링크 생성하기
    $baseUrl = route('sign'); // URL 링크의 주소를 만들어 주는 역활을 한다. 

    //서명된 URL 링크 생성하기
    // $signUrl = URL::signedRoute('invitations', ['invitation' => 5816, 'group' => 678]);
    $signUrl = URL::signedRoute('sign'); // 유효기간이 없는 방식은 사용을 잘 안한다.

    // 유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl = URL::temporarySignedRoute('sign', now() -> addSecond(10)); //('로우터 이름', 시간처리[얼마동안할지])

    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

Route::get('/sign', function(){
    return "Sign!!";
})->name('sign')->middleware('signed');

// ----------------------------------------------------------------------
//          *컨트롤러 
// ----------------------------------------------------------------------
// 커멘드로 컨트롤러 생성 : php artisan make:controller TestController
use  App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');

// ----------------------------------------------------------------------
//  커멘드로 컨트롤러 생성 : php artisan make:controller TasksController --resource
//  :resource로 작성시 모든 method를 사용하도록 한다.
// ----------------------------------------------------------------------
use App\Http\Controllers\TasksController;
Route::resource('/tasks', TasksController::class);

// ----------------------------------------------------------------------
// 블레이드
// ----------------------------------------------------------------------
use App\Http\Controllers\BladeController;
Route::get('blade', [BladeController::class, 'index'])->name('blade.index');

//**---------------------------------------------------- */
// 보드컨트롤러
//**---------------------------------------------------- */
use App\Http\Controllers\BoardController;
Route::resource('/board', BoardController::class);

