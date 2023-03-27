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
$arr_ass = array("zazang" =>"nuddle" , "zzambong" =>"seefood" , "tangssuc" =>"pork" , "maratang"=>"mara");
unset($arr_ass["zzambong"]);
print_r($arr_ass);

?>