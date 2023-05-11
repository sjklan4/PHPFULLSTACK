<?php

session_name("park");
session_start();

//session 파기
// session_destroy();

//LogOut시 session파기로 삭제 해야 된다.

// session 정보 삭제()
session_unset(); //sesssion 전체 정보 삭제
unset($_SESSION["del"]); // session특정 요소를 삭제



?>