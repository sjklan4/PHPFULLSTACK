<?php
include_once("../Example/12_2_ex2_fnc_db_conn.php");

//아래 쿼리를 이용해서 DB접속 > data획득 후 출력해주세요.
//try-catch로 에러 처리를 해주세요.
// 에러가 날 경우의 해당 에러메세지를 출력해 주세요.
// 정상 종료일 경우 "정상종료"라고 출력해 주세요.
// try 
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn );
//     $sql = " SELECT * FROM department ";
//     $stmt = $obj_conn->query( $sql );
//     $result = $stmt->fetchAll(); 
//     if( count ($result) === 0)
//     {
//         throw new Exception("쿼리 결과 없음");
//     }
//     var_dump($result);
//     echo "Try\n";
// } 
// catch ( Exception $e)  //담고 싶은 코드의 함수 구문을 담을 수 있다.
// {
//     echo $e->getMessage();

// }
// finally
// {
//     echo "정상종료"; // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
//     $obj_conn = null;
// }

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn->query( $sql );
    $stmt2 = $obj_conn->query( $sql2 );
    $result = $stmt->fetchAll(); 
    $result1 = $stmt2->fetchAll(); 
    
    echo "정상종료";
    
} 
catch ( Exception $e)  //담고 싶은 코드의 함수 구문을 담을 수 있다.
{

        echo $e->getcode();
        // 에러가 발생 했을 때 실행되는 소스코드를 작성;
    $obj_conn = null;
}
finally
{
    echo "종료"; // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
    $obj_conn = null;
}

// try 
// {
//     my_db_conn( $obj_conn );
//     $sql2 = " SELECT * FROM dept_manager ";
//     $stmt2 = $obj_conn->query( $sql2 );
//     $result1 = $stmt2->fetchAll(); 
    
//     echo "정상종료";
    
// } 
// catch ( Exception $e)  //담고 싶은 코드의 함수 구문을 담을 수 있다.
// {

//         echo $e->getcode();
//         // 에러가 발생 했을 때 실행되는 소스코드를 작성;
//     $obj_conn = null;
// }
// finally
// {
//     echo "종료"; // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
//     $obj_conn = null;
// }





