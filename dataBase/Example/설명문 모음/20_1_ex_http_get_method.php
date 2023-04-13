<?php



//1. GET Method
//  1-1. GET METHOD로 데이터를 넘겨주는 방법 1
//    - Query String에 키와 값을 셋팅 해준다.
//    http://localhost/private_PJ_miniboard/src/board_update.php?board_no=1
//    http://localhost/private_PJ_miniboard/src/board_update.php?board_no=1&key1=10(&로 여러 값을 추가로 보내 줄수 있다.)
//  
//  1-2. form Tag를 이용하는 방법
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1-2. form Tag를 이용하는 방법 : get방식으로 웹에 자료를 보내거나 버튼을 통해서 창을 이동 하도록 할 수 도 있다. -->
    <form method="get" action="20_1_ex2_httpget.php"> 
        <input type="text" name="test1" value="testValue">
        <input type="text" name="test2" value="testValue1">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    <a href="http://localhost/20_1_ex2_httpget.php?aaa=1">A태그</a>
</body>
</html>
<!-- 이동시 get방식으로 이동을 진행하게 해준다 : action구문 부분-->