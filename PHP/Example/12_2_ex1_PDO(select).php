<?php

$db_host        = "localhost"; //host
$db_user        = "root";      //user
$db_password    = "root506";   //password
$db_name        = "employees"; //DB name
$db_charset     = "utf8mb4";   //charset
$db_dns         = "mysql:host =".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option      = 
array(
    PDO::ATTR_EMULATE_PREPARES      => false //DB의 Prepared Statement 기능을 사용하도록 설정 
    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION //PDO Excpetion 을 Throws하도록 설정
    ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 FETCH를 하도록 설정
);



//PDO Class로 DB연동
$obj_conn = new PDO($db_dns, $db_user, $db_password, $db_option);

// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.
$sql = 
    "SELECT e.emp_no, e.birth_date,s.salary
    FROM employees e
    INNER JOIN salaries s
    ON e.emp_no = s.emp_no
    WHERE e.emp_no = :emp_no1 OR e.emp_no = :emp_no2
    AND s.to_date >= NOW()";

$arr_prepare = array(
        ":emp_no1" => 10001, ":emp_no2" => 10002
);

$stmt = $obj_conn->prepare($sql); // Prepare Statement를 생성
$stmt->execute($arr_prepare); //쿼리 실행
$result = $stmt->fetchAll(); //쿼리 결과를 fetch
//var_dump($result);




// foreach($result as $val)
// {
//     echo $val["emp_no"]." : ".$val["salary"], "\n";
// }


$obj_conn = null; //DB 파기








?>