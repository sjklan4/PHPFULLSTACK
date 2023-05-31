<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------------------------------------------------------------
    // 쿼리 빌더
    //------------------------------------------------------------------------------
        // select 
        // $result = DB::select('select * from categories');
        $no = '5';
        // $result = DB::select('select * from categories where no = :no', ['no' => $no]);
        // return var_dump($result);
        // $result = DB::select('select * from categories where no = ? and no =?', [$no, 7]);


        $input = ['4', '7', '8']; //categories의 no 컬럼
        // // // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)
        //  $result_input =DB::select('SELECT * FROM 
        //         (SELECT DB::raw(RANK() over(order by b.bno DESC) AS bno_number, b.btitle, c.name
        //         FROM boards b
        //         inner JOIN categories c ON b.bno = c.`no`where c.`no` in (?,?,?)', $input
        //     )->WHERE('bno_rnk.bno_number', '<=', '5')->get();

            $result_input = DB::table(function ($query) {
                $query->select(DB::raw('RANK() over(order by b.bno) AS bno_number'), 'c.no', 'b.btitle', 'c.name')
                    ->from('categories as c')
                    ->join('boards as b', 'c.no', '=', 'b.category')
                    ->whereIn('c.no', [4, 7, 8]);
            }, 'bno_rnk')
            ->where('bno_rnk.bno_number', '<=', 5)
            ->get();


        return var_dump($result_input);
        
        // $result = DB::select(
        // 'select b.bno, b.btitle, c.name 
        // from categories c 
        // inner join board b 
        // on c.no = b.category 
        // where c.no in(?,?,?) order by b.bno
        // limit 5', $input);

        //$insert_con = ['category' =>'8', 'btitle'=>'제목같어','bcontent' => '내용같어', 'created_at'=>now(), 'updated_at'=>now()];
        // $result_int = DB::insert('
        // INSERT INTO boards(
        //     category 
        //     ,btitle
        //     ,bcontent
        //     ,created_at
        //     ,updated_at
        // )
        // VALUES ( :category 
        // , :btitle
        // , :bcontent
        // , :created_at
        // , :updated_at)',$insert_con);

        // return var_dump($result_int,now());

        // 방금 등록한 게시글의 제목 : test, 내용 : testest 변경.
        // 업데이트 구문
        // $up_write = ['btitle'=> 'test','bcontent'=>'testest'];
        // $result_up = DB::update('
        //     UPDATE boards
        //     SET btitle = :btitle
        //         ,bcontent = :bcontent
        //     WHERE bno = 1001',
        //     $up_write);

        //     return var_dump($result_up,now());
        // 삭제구문
        // $result_dl = DB::delete('delete from boards where bno in(?)', [1001]);
        //     return var_dump($result_dl);
        

//----------------------------------------------------------------------------------------------
// 쿼리 빌더 체이닝
//----------------------------------------------------------------------------------------------
$no = '5';
$no1 = '8';
//select * from categories` where no =: no
$result = DB::table('categories')->where('no', '=', $no)->get(); // tip : TODO : 삭제 예정 식으로 남겨 놓는다.

// ORM방식으로 작성하기 --
// select * from categories where no = ? or no= ?
// $resutl = DB::table('categories')->where('no', $no)->orwhere('no', $no1)->dd();

// 속도 문제로 실무에서 사용은 잘 하지 않는다.
// select * from categories where no in (?,?)
//$resutl = DB::table('categories')->whereIn('no',[$no1, $no2])->dd();

// select * from categories where no not in (?,?) -- 
//$result = DB::table('categories')->whereNotIn('no',[$no, $no1])->dd();

// select id, no, name from categories
// $result = DB::table('categories')->select('id', 'no','name')->dd();

// select id, no, name from categories order by name desc
//$result = DB::table('categories')->select('id', 'no','name')->orderBy('name', 'desc')->dd();

// select id, no, name from categories where no =? and no=?
//$resutl = DB::table('categories')->where('no',$no)->where('no',$no1)->get();

// *** 주의해서 사용(사용 안하는쪽으로) *** whereRaw()
//$result = DB::table('categories')->whereRaw('no ='.$no1);
// 검색하고자 하는 where문이 string으로 해서 그대로 다 들어 가기 때문에 보안상 문제가 발생한다.

// first() : 테이블 안에서 가장 상위에 있는 한개의 자료만 가져오는 역활 = limit 1 과 같은 형식이다. / 실패시 false 리턴
//$result = DB::table('boards')->orderBy('bno','desc')->first();

// firstOrFail() : first() 와 같은 동작을 하는데, 실패시 결과가 예외 발생(Eloquent ORM 모델 객체에서만 사용 가능)
// $result = DB::table('boards')->orderBy('bno', 'desc')->firstorFail();

// 집계 메소드
//$result = DB::table('boards')->count(); // 결과의 레코드수를 반환
//$result = DB::table('boards')->MIN('bno');
//$result = DB::table('boards')->MAX('bno'); // 해당 컬럼'max(컬럼명)'의 최대치를 반환.


// 트랜잭션 : 더이상 쪼갤수 없는 작업의 단위. 모든 작업이 완료되면 커밋 완료 되지 못하면 롤백
//DB::beginTransaction(); // 트랜잭션 시작
//DB::rollback(); // 롤백
//DB::commit();  // 커밋

// 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력해 주세요.
// 카테고리 번호, 카테고리명, 갯수.
$result = DB::table('categories as c')->select('c.no', 'c.name')->selectRaw('COUNT(c.no) as count')
            ->join('boards as b', 'c.no','=','b.category')
            ->where('c.active_flg',1)->groupBy('c.no','c.name')->get();



// $result = DB::table('categories as c')
//             ->select('c.no', 'c.name', DB::raw('COUNT(c.no) as count'))
//             ->join('boards as b', 'c.no', '=', 'b.category')
//             ->where('c.active_flg', 1)
//             ->groupBy('c.no', 'c.name')
//             ->get();


return var_dump($result);

}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
