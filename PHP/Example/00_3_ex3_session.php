<?php

$user_id = "php506";
$user_pw = "506";


//session명 지정, 지정하지 않으면 쿠키명이 "PHPSESSID"로 지정된다.
session_name("park");

//session 시작
session_start();

// ---------------------------------
// 유저 인증작업 필요, 지금은 생략
// ---------------------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = "정보삭제";



?>