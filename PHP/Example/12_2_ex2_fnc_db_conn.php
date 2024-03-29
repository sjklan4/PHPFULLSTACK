<?php

// -------------------------------------------------
// 함수명   : my_db_conn
// 기능     : DB Connet
// 파라미터 : PDO &$param_conn
// 리턴     : 없음
//--------------------------------------------------
function my_db_conn(&$param_conn) //레퍼런스 참조 값 &로 표시
{
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
    
    $param_conn = new PDO($db_dns, $db_user, $db_password, $db_option);


}



$obj_conn = null; //PDO class를 받기 위해 초기화


// DB Connect 함수 구문
my_db_conn($obj_conn);

// //SQL
// $sql = 
//     " SELECT "
//     ." * "
//     ." FROM " 
//     ." employees "
//     ." LIMIT :limit_start ";

// $arr_prepare = 
//     array(
//         ":limit_start" => 5
//     );
    
// $stmt = $obj_conn->prepare($sql);
// $stmt->execute($arr_prepare);
// $result = $stmt->fetchAll();

// print_r($result);




