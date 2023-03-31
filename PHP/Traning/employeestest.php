<?php
$dbc = mysqli_connect("localhost","root","root506","employees",3306);
$result_query = mysqli_query($dbc, "SELECT emp_no, CONCAT(last_name, first_name) as fullname, gender,birth_date FROM employees WHERE emp_no = 10005 ;");

// if(mysqli_fetch_row($result_query) > 0)
// {
//     echo "\n";
//     while($row = mysqli_fetch_assoc($result_query))
//     {
//         echo "emo_no : ".$row["emp_no"].", "."fullname : ".$row["fullname"].", "."gender : ".$row["gender"].", "."birth_date".$row["birth_date"].", "."\n";
//     }
// }
// else{
//     echo "0 : 건입니다.";
// }

while ($temp_row = mysqli_fetch_assoc($result_query)) //데이터 베이스의 불러오는 값의 쿼리를 지정해서 불러와준다.
{
    var_dump($temp_row["emo_no"]);
}




    mysqli_close($dbc);


?>