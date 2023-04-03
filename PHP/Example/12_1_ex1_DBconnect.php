<?php
// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees",3306); // 변수 = 변수명(호스트명,db이름, db접속비번,데이터베이스이름,포트넘버)

//var_dump($dbc);

// 쿼리 요청 함수

// $result_query = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT 10;");

// var_dump($result_query);

// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// while ($temp_row = mysqli_fetch_row($result_query) ) //단 하나의 값만 조회 시킬때 사용한다.
// {
//     var_dump($temp_row);
// }


// if($result_query > 0)
// {
// while ($temp_row = mysqli_fetch_assoc($result_query)) //데이터 베이스의 불러오는 값의 쿼리를 지정해서 불러와준다.
// {
//     var_dump($temp_row["first_name"]);
// }
// }
// else {
//     echo "0 result";
// }
// 위 와일문 구동 설명 : mysqli에 있는 값들을 temp_row에 담아서 각 array마다 실행을 진행하다가 마지막에 데이터가 없는/
// 구문에서는 false값을 반환시켜서 while문을 종료 시킨다.

// while($carlist = fgets($f_car) !== false){
//     $trimed = trim($carlist);
//     echo $trimed,"\n";
// }


$i = "F";
$i2 = 10010;
$i3 = 5;
$result = null;
//Prepared Statement : 사용자가 원하는 데이터 만큼만을 불러오도록 하는 구문
$stmt = $dbc->stmt_init(); //statement를 셋팅 - $dbc 변수의 값을 불러온다. 
$stmt->prepare("SELECT emp_no, first_name FROM employees where gender = ? and emp_no <= ? LIMIT ?"); //DB 질의할 쿼리를 작성
$stmt->bind_param("sii",$i,$i2,$i3); //Prepare 셋팅 -"i"는 int라는 의미(정수) 변수가 여러개 일시 앞부터 타입을 하나씩 적으면 된다.
$stmt->execute();//DB에 쿼리 질의 실행

//---------질의 결과를 우리가 지정한 변수에 담아 사용하는 방법 ---------------------
// $stmt->bind_result($col1, $col2);//질의 결과를 각 아규먼트에 저장하기 위한 셋팅{$col1은 select 첫번째 값(emp_no), col2는 두번째 값(firest_name)}
// $stmt->fetch(); //bind_resutl에서 셋팅한 아규먼트에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
// var_dump($result);
//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while($stmt->fetch())
// {
//     echo "$col1 $col2\n";
// }

//-----------이하 연상배열로 가져오는 방법------
$result = $stmt->get_result(); // 질의 결과를 저장

while($row = $result->fetch_assoc())
{
    echo $row["first_name"],"\n";
}






// $stmt = $dbc->stmt_init(); //statement를 셋팅
// $stmt->$result_query = mysqli_query("SELECT emp_no, first_name FROM employees LIMIT ?"); //DB 질의할 쿼리를 작성
// $stmt->bind_param("s",5); //Prepare 셋팅
// $stmt->execute();//DB에 쿼리 질의 실행
// $stmt->store_result();
// print($stmt->num_rows());

















mysqli_close($dbc);

?>