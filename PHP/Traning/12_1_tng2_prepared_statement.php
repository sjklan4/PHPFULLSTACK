<?php

//아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.
// SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT?


//-------prepare 샛팅값 -----
// to_date : "9999-01-01"
// salary : 50000
// LIMIT : 5
$to_date = "9999-01-01";
$salary = 50000;
$l = 5;
// $result = null;
$dbc = mysqli_connect("localhost","root","root506","employees",3306); // DB연결
$stmt = $dbc->stmt_init(); //mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해 줍니다.
$stmt->prepare("SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT?");
$stmt->bind_param("sii",$to_date, $salary, $l);
$stmt->execute(); //DB질의에 대한 다양한 정보들을 받아서 오게 된다.

$result = $stmt->bind_result($col1,$col2);
// $result = $stmt->get_result(); //DB의 쿼리 결과를 저장
// $stmt->fetch(); //fetch호출시 커서를 해당 row를 읽고 커서가 다음 row로 이동. 
// echo $stmt->fetch();


while($stmt->fetch())
{
    echo "emp_no : $col1, salary : $col2\n";
}

// while($row = $result->fetch_assoc())
// {
//     echo "emp_no :".$row["emp_no"],"salaray :".$row["salary"]."\n";
// }




















mysqli_close($dbc);
?>