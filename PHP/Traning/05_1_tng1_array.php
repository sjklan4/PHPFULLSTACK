<?php
//음식종류 5개 이상을 배열로 만들어주세요.

// $food = array("짜장면","짬뽕","탕수육","마라탕","깐풍기","자라탕");

// print $food[rand(0,5)]."\n";
// print $food[rand(0,5)]."\n";
// print $food[rand(0,5)]."\n";
// print $food[rand(0,5)]."\n";
// print $food[rand(0,5)]."\n";

// $rand_num = rand(0,5);
// echo $food[$rand_num];

// 키는 요리명, 값은 주재료 1개로 이루어진 배열을 만들어주세요.(배열 길이는 4)
// $arr_ass = array("zazang" =>"nuddle" , "zzambong" =>"seefood" , "tangssuc" =>"pork" , "maratang"=>"mara");
// echo $arr_ass["zzambong"];

//키 : zzambong원소 삭제
// $arr_ass = array("zazang" =>"nuddle" , "zzambong" =>"seefood" , "tangssuc" =>"pork" , "maratang"=>"mara");
// unset($arr_ass["zzambong"]);
// print_r($arr_ass);

// foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요.(if문 사용, unset금지)
$arr_ass = array("zazang" =>"nuddle" 
                , "zzambong" =>"seefood" 
                , "삭제" => "값값"
                , "tangssuc" =>"pork" 
                , "maratang"=>"mara");


    // foreach($arr_ass as $key => $val ){
        
    //     if($key!=="삭제"){
    //         echo "$key : ".$val."\n";
    //     }
    //     elseif($key === "삭제"){
    //         unset($arr_ass[$key]);
    //     }
        
        
    // }

    foreach($arr_ass as $key => $val ){
        
        if($key==="삭제"){
            unset($arr_ass[$key]);   
        }
        else{
            echo "$key : ".$val."\n";
        }
        
    }
var_dump($arr_ass);



?>