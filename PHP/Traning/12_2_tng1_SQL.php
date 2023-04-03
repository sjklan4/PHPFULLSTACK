<?php
//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.
include_once("../Example/12_2_ex2_fnc_db_conn.php");




//1. 전체 월급의 평균
my_db_conn($obj_conn);

// $sql = 
//             " SELECT AVG(salary)
//             FROM salaries ";


// $stmt = $obj_conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchAll();

// print_r($result);


//2. 새로운 사원 정보를 emloyees 테이블에 등록해주세요.

$sql_insert = " INSERT into employees(
                emp_no
                ,birth_date
                ,first_name
                ,last_name
                ,gender
                ,hire_date
                )
                VALUES(    
                :emp_no
                ,:birth_date
                ,:first_name
                ,:last_name
                ,:gender
                ,:hire_date ) ";

$arr_prepare = array(
    ":emp_no"=>999999
    ,":birth_date"=>date(19900808)
    ,":first_name"=>"merced"
    ,":last_name"=>"benze"
    ,":gender"=>"M" 
    ,":hire_date"=>date(19900909)
);

$stmt = $obj_conn->prepare($sql_insert);
$result1 = $stmt->execute($arr_prepare);

$obj_conn->commit();








//3. 2에서 등록한 사원의 이름을 "길동", 성 "홍"으로 변경해주세요.





//4. 2에서 등록한 사원을 삭제해 주세요.