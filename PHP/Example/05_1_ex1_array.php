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

    // $arr_temp4 = $arr_temp[2][1];
    // echo $arr_temp4[1];
    // print_r($arr_temp4);
    // echo $arr_temp4[0];
    //[첫번째 범위 순서 : Y열][범위 안에서의 순서 : X열] : y,x축으로 리스트 표기법은 y는 음의방향, x는 양의 방향
    //3차원 값 출력 :Y열 순서 안에, X열 순서안에 ,Z열의 순서 - 배열의 순서 안에 순서 안에 순서

//배열의 원소 삭제 : unset() - 키값 자체를 삭제하기 때문에 키값이 다시 정렬되지는 않는다.<주의>
    // $arr_week = array("sun","mon","delete","tue","wed");
    // unset($arr_week[2]);
    // print_r($arr_week);

// array_diff() : 중복되지 않는 원소를 반환
    // $arr_diff_1 = array("a","b","c");
    // $arr_diff_2 = array("a","b","d");
    // $arr_diff = array_diff($arr_diff_1,$arr_diff_2); // 앞쪽 범위에 있는 원소중에 뒤에 있는 원소에 없는것을 찾아 주는것(기준점과 비교해서 없는것 찾을것)
    // print_r($arr_diff);

// 배열위 정렬 : asort(), arsort(), ksort(), krsort();
    // asort(); - 정상적인 순서대로 배치를 바꿔서 출력해준다.
    // $arr_asort = array("b","a","d","c","e"); 
    // $arr_asort_result = asort($arr_asort);
    // print_r($arr_asort);

    //arsory(); 내림차준으로 정렬을 해준다.
    // $arr_arsort = array("b","a","d","c","e"); 
    // arsort($arr_arsort);
    // print_r($arr_arsort);

    //ksort() : 연상 배열에서 정렬을 만들어준다.(키값을 기준으로 배열을 만들어 준다.)
    // $arr_ksort = array("key1" => "val1" 
    //                     , "key3"=>"val2"
    //                     , "key2"=>"val3"
    //                     , "key4"=>"val4");
    // ksort($arr_ksort);
    // print_r($arr_ksort);

    // $arr_krsort = array("key1" => "val1" 
    //                     , "key3"=>"val2"
    //                     , "key2"=>"val3"
    //                     , "key4"=>"val4");
    // ksort($arr_krsort);
    // print_r($arr_krsort);

    // array의 사이즈를 반환하는 함수 : count();
    // echo count($arr_krsort);

//foreach( $array as $key => $val){}
//foreach( $array as  => $val){}    

    // $arr1 = array("key1" => "val1" 
    //                 , "key3"=>"val2"
    //                 , "key2"=>"val3"
    //                 , "key4"=>"val4");

    // foreach($arr1 as $val){
    //     echo $val."\n";

    // }
// foreach(범위 변수 이름 as 값을 가져오는 방법 - $키이름 => $값 or as $값 만 사용시 출력 문구에 "표현하려는 키값 = ". $받아오려는 값)










?>