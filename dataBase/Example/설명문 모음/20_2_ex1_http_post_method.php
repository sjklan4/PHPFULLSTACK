<?php
//1. POST Method 
//  - body에서 보내기때문에 외부에서 확인을 할 수 가 없다.
//  - request할 때의 데이터를 외부에서 볼 수가 없다.(뒤에 쿼리 스트링 부분이 없다.)

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
    <!-- form Tag로 request -->
    <form method="post" action="20_2_ex2_httppost.php">
        <input type="text" name="p_test1">
        <br>
        <input type="text1" name="p_test2">
        <br>
        <span name ="p_span1">123</span> 
        <br>
        <input type="hidden" name="p_hidden1" value="aaa">
        <br>
        <button type="submit">Submit</button>
    </form>    
<!-- 무조건 배열로만 모든 데이터를 전송하는가???? 다른형식으로는 전달 안되는가??? input데이터만을 전송시키는 역활을 한다.  -->
<!-- 스판은 일반 출력만 가능한 기능을 하게 된다  전달을 위해서는 input을 사용해서 전달해야 된다. -->
</body>
</html>