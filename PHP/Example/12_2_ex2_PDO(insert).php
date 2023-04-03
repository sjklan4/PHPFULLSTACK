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

$obj_conn = new PDO($db_dns, $db_user, $db_password, $db_option);

//INSERT 예제

$sql = 
    "INSERT INTO departments(
            dept_no
            ,dept_name
            )
    VALUES
	(:dept_no,:dept_name)";

$arr_prepare = array(
            ":dept_no"=>"d011"
            ,":dept_name"=>"PHP풀스택"
);

$stmt = $obj_conn->prepare($sql);
$resutl = $stmt->execute($arr_prepare);
var_dump($resutl);




$obj_conn->commit();













$obj_conn = null; //DB 파기

?>