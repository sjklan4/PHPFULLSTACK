<?php
//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.
include_once("../Example/12_2_ex2_fnc_db_conn.php");




//1. 전체 월급의 평균
my_db_conn($obj_conn); //정의도니 위치를 모르면 ctrl 클릭 하면 위치를 볼수 있다. 다시 돌아가는건 alt+왼쪽 / alt+오른쪽  = 다시앞으로

// $sql = 
//             " SELECT AVG(salary)
//             FROM salaries ";

//-------query 메소드로 하는 방법------------
// $stmt = $obj_conn->query( $sql );
// $resutl = $stmt->fetchAll();
// var_dump( $resutl );

// $stmt = $obj_conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchAll();

// print_r($result);

// $obj_conn = null;
//2. 새로운 사원 정보를 emloyees 테이블에 등록해주세요.

// $sql_insert = " INSERT into employees(
//                 emp_no
//                 ,birth_date
//                 ,first_name
//                 ,last_name
//                 ,gender
//                 ,hire_date
//                 )
//                 VALUES(    
//                 :emp_no
//                 ,:birth_date
//                 ,:first_name
//                 ,:last_name
//                 ,:gender
//                 ,:hire_date ) ";

// $arr_prepare = array(
//     ":emp_no"=>999999
//     ,":birth_date"=>date(19900808)
//     ,":first_name"=>"merced"
//     ,":last_name"=>"benze"
//     ,":gender"=>"M" 
//     ,":hire_date"=>date(19900909)
// );



// $stmt = $obj_conn->prepare($sql_insert);
// $result1 = $stmt->execute($arr_prepare);

// $obj_conn->commit();
// $obj_conn = null; //마리아 DB의 close의 기능과 같은 역활로 사용하지않는 메모리를 정리해주기도 한다.



//3. 2에서 등록한 사원의 이름을 "길동", 성 "홍"으로 변경해주세요.
// $sql = " UPDATE employees SET first_name = :first_name, last_name = :last_name WHERE emp_no = 999999 ";
// $arr_prepare = array(":first_name"=>"홍",":last_name"=>"길동"); //array에는 공백이 들어 가면안된다.
// $stmt = $obj_conn->prepare($sql);
// $resutl3 = $stmt->execute($arr_prepare);

// $obj_conn->commit();


// $obj_conn = null;
//4. 2에서 등록한 사원을 삭제해 주세요.
$sql = " DELETE FROM employees WHERE emp_no = :emp_no ";
    $arr_prepare = 
        array(
            ":emp_no" => 999999
        );

$obj_conn = null;
my_db_conn( $obj_conn );
$stmt = $obj_conn->prepare( $sql );
$result_del = $stmt->execute( $arr_prepare );
$obj_conn->commit();

