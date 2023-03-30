<?php
//문자열 합치기
// $str_1 = "aaa";
// $str_2 = "bbb";
// $str_sum = $str_1 . $str_2;

// echo $str_sum;

// 대문자 변환
// $str_en = "abcd efgh";
// echo strtoupper($str_en),"\n";

// // 소문자 변환(strtolower)

// //맨 앞 글자만 대문자로 변환
// echo ucfirst($str_en),"\n";

// //각 단어의 맨앞글자만 대문자로 변환
// echo ucwords($str_en),"\n";

// URL관련 함수 
// $url = "url 주소";

// $arr_url = parse_url;

//역순의 문자열
$str_abcd = "abcd";
echo strrev($str_abcd),"\n";

//문자열 자르기(글자의 용량을 기준으로 잘라 준다  - 영어 외는 멀티바이트)
$str_1 = "A B C D E";
echo substr($str_1, 4),"\n";

//문자열 멀티바이트로 자르기(자리수 만큼만 자르는 기능) - 띄어 쓰기도 용량에 포함
$str_1 = "가나다라마";
echo mb_substr($str_1, 1),"\n";
echo mb_substr($str_1, 2),"\n";
echo mb_substr($str_1, 2, 1),"\n";
echo mb_substr($str_1, 3,2),"\n";
echo mb_substr($str_1, -2),"\n";

//문자열 자르기로 "PHP입니다." 만 출력
$str_tng = "안녕하세요. PHP입니다.";
echo mb_substr($str_tng,-6,6),"\n";
//문자열 자르기로 "세요. P" 만 출력
echo mb_substr($str_tng,-11,5),"\n";
echo mb_substr($str_tng,0,5),"\n";

//문자열 빈공간 지우기
$str_trim = "           abcvd       ";
echo trim($str_trim),"\n";
echo rtrim($str_trim),"\n"; //오른쪽 빈공간 삭제
echo ltrim($str_trim),"\n"; //왼쪽 빈공간 삭제

//문자열의 길이를 구하는 함수(글자 용량크기를 확인 / mb_strlen : 글자의 개수확인)
$str_len = "가나다라";
echo strlen($str_len),"\n";
echo mb_strlen($str_len),"\n";

// 문자열 포맷에 따라 출력하는 함수(%s : 문자열이 입력, %d : 정수 입력)
// printf("안녕하세요. %s입니다.", "PHP")."\n";

//사용 예
// define("WELCOME", "안녕하세요. %s님.\n"); //define(내용 정수 이름, 내용값안에 %s,%d로 변경값지정) printf(define 이름 %s에 들어갈 내용)
// printf(WELCOME, "박상준");

//기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
//에러 번호 : 에러종류
    // 1 : 시스템
    // 2 : 로그인
   //  3 : 접속

// define("ERR", "ERROR(%d) : %s ERROR가 발생했습니다.");
// printf(ERR,"1","시스템");
// echo "\n";
// printf(ERR,"2","로그인");
// echo "\n";
// printf(ERR,"3","접속");
// echo "\n";

// printf("ERRPR(%d) : %s ERROR가 발생했습니다.","1","시스템");
// echo "\n";
// printf("ERRPR(%d) : %s ERROR가 발생했습니다.","2","로그인");
// echo "\n";
// printf("ERRPR(%d) : %s ERROR가 발생했습니다.","3","접속");
// echo "\n";

// 문자열을 분리하는 함수 : 각 지정한 위치값에 들어갈 값들을 만들어 준다음에 별도로 지정해서 넣도록 하는 함수
// $str_sscanf = "가나다라 50 abcd";
// sscanf($str_sscanf,"%s %d %s", $str_ko, $int_d, $str_en);
// echo $str_ko, "\n", $int_d, "\n", $str_en,"\n";

// 문자열 반복해서 찍어주는 함수
echo str_repeat("*",2);

// 문자열을 특정문자열들을 빼주는 함수 : explode() - 지정한 문자를 기준으로 분리를 시켜준다.
$str_expl = "홍길동,27세,남자,의적,조선";
// $arr_expl = explode(",", $str_expl);
// print_r($arr_expl);
//배열을 특정 문자열로 합치는 함수 : implode() - 지정한 문자를 넣어서 각 글자들을 합쳐 준다.
$str_impl = implode("123", $arr_expl);
echo $str_impl;




?>