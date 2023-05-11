<?php
session_name("park");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE);
var_dump("세션ID : ".session_id()); //sessionID를 반환
//php의 header에서 쿠키의 같은 값을 찾아서 찾아오게 ..........