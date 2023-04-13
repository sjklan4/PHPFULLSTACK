<?php
include_once("./12_2_ex2_fnc_db_conn.php");

// try-catch문

// try 
// {
//     // 우리가 실행하고 싶은 소스코드를 작성 ? 이 구문안에 있으면 함수 실행됨?
// } 
// catch ( Exception $e)  //담고 싶은 코드의 함수 구문을 담을 수 있다.
// {
//     // 에러가 발생 했을 때 실행되는 소스코드를 작성;
// }
// finally
// {
//     // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
// }

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELEC * from employees where emp_no = 1100000";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll(); //결과 0건을 가져온다음

    if( count( $result ) === 0 )
    {
        throw new Exception("쿼리 결과 0건"); // throw Exception : 에러를 강제로 일으키는 구문 - 페이털 에러를 강제로 발생시킨다.
    }
    var_dump( $result );
    echo "Try\n";
} 
catch ( Exception $e) //$e는 에러 발생을 의미 - 발생시 아래 구문 발동.
{
    echo "-----에러 발생----\n";
    if( $e->getmessage() === "쿼리 결과 0건") // >에러메세지를 지정해서 출력 해줄수 있다.
    {
        echo "데이터 0건";
    }
    else
    {
        echo $e->getcode(); //오류 내용을 보고 싶을때 설정 - 변수에 전부 담아서 별도로 출력 하도록 만들수 있다.
    }
    echo "-----에러 발생----\n";
}
finally
{
    echo "Finally";
    $obj_conn = null;
}

echo "종료";