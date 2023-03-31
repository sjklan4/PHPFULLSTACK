<?php
// 사번이 10005 이하 사원의 사번, 이름(성 이름), 성별, 생일
$dbc = mysqli_connect("localhost","root","root506","employees",3306);
$result_query = mysqli_query($dbc, "SELECT emp_no, CONCAT(last_name, first_name) as fullname, gender,birth_date FROM employees WHERE emp_no <=10005 ;");

// $sql = "SELECT emp_no, CONCAT(last_name, first_name) as fullname, gender,birth_date FROM employees WHERE emp_no <=10005;" ;
// $result_query2 = mysqli_query($dbc,$sql);


if(mysqli_num_rows($result_query) > 0)
{
    echo "\n";
    while($row = mysqli_fetch_assoc($result_query))
    {
        echo "emo_no : ".$row["emp_no"].", "."fullname : ".$row["fullname"].", "."gender : ".$row["gender"].", "."birth_date".$row["birth_date"].", "."\n";
    }
}
else{
    echo "0 : 건입니다.";
}


    

    // $dbc = mysqli_connect("localhost","root","root506","employees",3306);
    // if(!$dbc) {
    //     die("데이터베이스 연결에 실패하였습니다.".mysqli_connect_error());
    // }
    
    // $result_query = mysqli_query($dbc, "SELECT emp_no, CONCAT(last_name, first_name) as fullname, gender,birth_date FROM employees WHERE emp_no <=10005 ;");
    
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
    
    // mysqli_close($dbc);

// $result_query2 = mysqli_query($dbc,$sql);
// mysqli_num_rows() 를 이용해서 레코드 수를 체크 하는 방법
// if(mysqli_num_rows($result_query2)==0)
// {
//     echo "데이터가 0건이다.";
// }
// else
// {
//     while($tmp_row = mysqli_fetch_assoc($result_query2))
//     {
//         echo implode(" ", $tmp_row), "\n";
//     }
// }



    // $flg_cnt = false;
    // while($tmp_row = mysqli_fetch_assoc($result_query2))
    // {
    //     echo implode(" ", $tmp_row), "\n";
    //     $flg_cnt = true;
    // }
    // if(!$flg_cnt)
    // {
    //     echo "데이터가 0건이다.";
    // }

    // $cnt = false;
    // while($row = mysqli_fetch_assoc($result_query))
    // {
    //     echo "emo_no : ".$row["emp_no"].", "."fullname : ".$row["fullname"].", "."gender : ".$row["gender"].", "."birth_date".$row["birth_date"].", "."\n";
    //     $cnt = true;
    // }
    // if(!$cnt) //while문이 구동되지 않는 상황은 false인 상황이고 다시 cnt에서 시작하면 false가 아닌 if의 상황을 구동시킨다? 
    // {
    //     echo "데이터가 0건이다.";
    // }


















    
    mysqli_close($dbc);















?>