<?php   
//숫자 10을 변수 $i_ten, 숫자 5를 변수 $i_five, 숫자, 8을 $i_eight, 숫자3을 $i_three에 저장하고
//아래 연산을 해주세요.
//10 -5 +8 하고, 3으로 나눈 나머지

// $i_ten = 10;
// $i_five = 5;
// $i_eight = 8;
// $i_three = 3;

// $result = fmod($i_ten - $i_five + $i_eight, $i_three); 
// echo $result;


function result_modd($i_ten,$i_five,$i_eight,$i_three){
    $result1 = ($i_ten - $i_five + $i_eight) % $i_three;
    return $result1;
}
$result_mood = result_modd(10,5,8,3);
echo $result_mood;

echo "\n";


















?>