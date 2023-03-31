<?php
// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306); // 변수 = 변수명(호스트명,db이름, db접속비번,데이터베이스이름,포트넘버)

//var_dump($dbc);

// 쿼리 요청 함수

$result_query = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT 10;");

// var_dump($result_query);

// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// while ($temp_row = mysqli_fetch_row($result_query) ) //단 하나의 값만 조회 시킬때 사용한다.
// {
//     var_dump($temp_row);
// }


if($result_query > 0)
{
while ($temp_row = mysqli_fetch_assoc($result_query)) //데이터 베이스의 불러오는 값의 쿼리를 지정해서 불러와준다.
{
    var_dump($temp_row["first_name"]);
}
}
else {
    echo "0 result";
}
// 위 와일문 구동 설명 : mysqli에 있는 값들을 temp_row에 담아서 각 array마다 실행을 진행하다가 마지막에 데이터가 없는/
// 구문에서는 false값을 반환시켜서 while문을 종료 시킨다.

// while($carlist = fgets($f_car) !== false){
//     $trimed = trim($carlist);
//     echo $trimed,"\n";
// }

mysqli_close($dbc);








?>