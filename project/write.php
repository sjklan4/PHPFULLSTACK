<?php
define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("URL_DB", DOC_ROOT . "project/DB/db_conn.php");
include_once(URL_DB);

// 입력한 데이터들을 받아와서 최종적으로 index페이지로 전송해 주도록 하는 구문 
// - 현 구문은 SERVER라는 슈퍼글로벌 변수에 post, get등 어떤것으로 받을지를 선택하는 구문
$http_method = $_SERVER["REQUEST_METHOD"];
if ($http_method === "POST") {
    $arr_post = $_POST;

    $result_write = write_info($arr_post);
    header("location:index.php");
    exit();
}
// 'header' 내장 함수를 가지고 최종적으로 index 페이지로 보내는 역활을 한다.

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>작성페이지</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./SOURCE/sun2.png">
    <!-- css -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/detail.css">


</head>

<body>
    <div class="sidebox">
        <div class="top">
        <h1>미라클 모닝 <span>추천 루틴</span><h1>
        </div>
        <div class="bottom">
            <div class="update">
                6:30 아침 기상 <br>
                6:30~7:30 모닝 루틴 (1시간)<br><br>
                - 요가 또는 스트레칭 15분<br>
                - 명상 10분<br>
                - 확신과 다짐의 말<br>
                (목표 외치기) 5분<br>
                - 시각화하기<br>
                (머리 속에 비전과 일치된<br>
                삶의 모습 그리기) 5분<br>
                - 일기쓰기 15분<br>
                - 독서 10분<br><br>
                7:30~8:00 출근준비/샤워 등 (30분)<br>
                8:00~8:30 걸어서 회사로 출근 (30분)<br>
                8:30~9:00 아침 업무 준비 (30분)<br>
            </div>
        </div>
    </div>
    <div class="contianer">
        <div class="title top">
            <form method="post" action="">
                <label for="date_title"><img src="./source/sun.png">&nbsp;&nbsp;
                <input type="date" name="task_date" data-placeholder=" 날짜를 선택해주세요." reqired>
                </label>&nbsp;&nbsp;<img src="./source/sun.png">
        </div>
        <div class="bottom">
            <div class="listTable">
                <ul>
                    <li>
                        <label for="start_time">시작시간 </label>
                        <input type="time" name="start_time" required>
                    </li>
                    <li>
                        <label for="end_time">종료시간 </label>
                        <input type="time" name="end_time" required>
                    </li>
                    <li>
                        <label for="category">카테고리
                            <select name="category_no" required>
                                <option value=1>독서</option>
                                <option value=2>운동</option>
                                <option value=3>공부</option>
                                <option value=4>기상</option>
                                <option value=5>취미</option>
                                <option value=6>회의</option>
                                <option value=7>쇼핑</option>
                                <option value=8>요리</option>
                                <option value=9>청소</option>
                                <option value=10>친구</option>
                                <option value=11>가족</option>
                                <option value=12>여행</option>
                                <option value=13>영화</option>
                                <option value=14>휴식</option>
                                <option value=15>기타</option>
                                <option value=16>병원</option>
                                <option value=17>식사</option>
                            </select>
                        </label>
                    </li>
                    <li>
                        <label for="task_title">제목 </label>
                        <input type="text" name="task_title" id="title" required>
                    </li>
                    <li>
                        <label for="task_memo" id="memo">메모 </label>
                        <textarea name="task_memo" id="task_memo" cols="30" rows="10"></textarea>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="btn-wrap">
        <button type="button" onclick="location.href='index.php'" class="btn index2">리스트</button>
        <button type="submit" class="btn index1">작성</button>
    </div>
    </form>

</body>

</html>