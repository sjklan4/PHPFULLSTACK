<?php

include_once("./12_2_ex2_fnc_db_conn.php"); //다른 파일에 있는 함수를 참조 시켜서 사용하게 한다. - 다른 파일의 내용을 가지고 와서 보게 시키는 기능

$obj_conn = null; //PDO class를 받기 위해 초기화


// DB Connect 함수 구문
my_db_conn($obj_conn);

//SQL
$sql = 
    " SELECT "
    ." * "
    ." FROM " 
    ." employees "
    ." LIMIT :limit_start ";

$arr_prepare = 
    array(
        ":limit_start" => 5
    );
    
$stm = $obj_conn->prepare($sql);
$stm->execute($arr_prepare);
$result = $stm->fetchAll();

print_r($result);





?>
