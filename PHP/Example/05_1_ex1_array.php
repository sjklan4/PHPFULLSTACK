<?php
    $num = 10;
    $num = 11;
//배열
    // $week = array("sun","mon","tue","wed");
    // print $week[2];

    // $mon = "mon";
    // $sun = "sun";
    // $tue = "tue";
    // $wed = "wed";
    // $week = array($sun,$mon,$tue,$wed);
    // echo $week[1],"\n";

    // $week2 = array($week[1],$week[3],$week[0],$week[2]);
    // echo $week2[0]," ", $week2[1]," ", $week2[2]," ",$week2[3];
    
//멀티타입 배열
    // $arr_mult_type = array("aaa",1 ,3.14, "나는");
    // echo $arr_mult_type[0];

//연상 배열 - 배열안에서 그 값을 다시 변수화 시켜서 각각의 데이터들을 변수를 기준으로 가져오도록 하는 기능
    //(기본키 0~n사이 숫자가 아닌 기본키에 별도 이름을 주는것)
    // $arr_ass = array("key1" => "val1" , "1.5"=>"val2", 2=>"val3", "key4"=>"val4");
    // echo $arr_ass["1.5"];

//다차원 배열
    $arr_temp = array(
                    array(1,2,3,4)
                    ,array(5,6,7,8)
                    ,array(
                        array(9,10,11), array(12,13,14)
                    )
    );

    // echo $arr_temp[1][3],"\n";
    // echo $arr_temp[1][2],"\n";
    // echo $arr_temp[2][0][1],"\n";
    // echo $arr_temp[2][1][1],"\n";
    // echo $arr_temp[0][0][2],"\n";
    // echo $arr_temp[0][1][2],"\n";


    // $arr_temp3 = $arr_temp[2];
    // $arr_temp3_c = array(array(9,10,11));

    // $arr_temp3 = $arr_temp[2][0];
    // $arr_temp3_c = array(9,10,11), "\n";

    $arr_temp4 = $arr_temp[2][1];
    echo $arr_temp4[1];
    print_r($arr_temp4);
    echo $arr_temp4[0];
    //[첫번째 범위 순서 : Y열][범위 안에서의 순서 : X열] : y,x축으로 리스트 표기법은 y는 음의방향, x는 양의 방향
    //3차원 값 출력 :Y열 순서 안에, X열 순서안에 ,Z열의 순서 - 배열의 순서 안에 순서 안에 순서

//배열의 원소 삭제 : unset() - 키값 자체를 삭제하기 때문에 키값이 다시 정렬되지는 않는다.<주의>
    // $arr_week = array("sun","mon","delete","tue","wed");
    // unset($arr_week[2]);
    // print_r($arr_week);




?>