<?php
// //두 매개변수의 차를 구하는 함수를 구현해 주세요.
// function fnc_min($int_a, $int_b)
// {   
//     $mina = $int_a - $int_b;
//     return $mina;
// }

// $result = fnc_min(6,2);
// echo "a - b는 :" , $result,"\n";


// //두 매개변수를 나눈 함수를 구현해 주세요.

// function fnc_div($int_c, $int_d)
// {
//     $div = $int_c / $int_d;
//     return $div;
// }

// $resutl1 = fnc_div(4,2);
// echo "c나누기 d는 :", $resutl1,"\n";


// //두 매개 변수를 곱하는 함수를 구현
// function fnc_tim($inta, $intb)
// {
//     $tim = $inta * $intb;
//     return $tim;
// }

// $result2 = fnc_tim(5,2);
// echo "inta 곱하기 intb는 :",$result2,"\n";

//각각의 결과를 출력

//빼기 , 곱하기, 나누기를 가변 파라미터 함수로 구현
function fnc_args_add()
{
    $args = func_get_args(); //가변 파라미터 습득
    $mina = 0;
    foreach ($args as$key => $val) {
        if($args[0] === $val)
        {
            $mina = $val;
        }
        else
        {
            // $mina -= $val;
            $mina -=  $val;
        }    
    }
    return $mina;
}
echo fnc_args_add(10,2,5),"\n";


function fnc_args_add1()
{
    $args1 = func_get_args();
    $times = 0;
    foreach ($args1 as $key => $val)
    {
        if($args1[0] === $val)
        {
            $times = $val;
        }
        else
            {
                $times *= $val;
            }
    }
    return $times;        
}
echo fnc_args_add1(10,2,5),"\n";


// function fnc_args_add2()
// {
//     $args2 = func_get_args();
//     $divs = 2;
//         foreach ($args2 as $val) {
//             $divs /= $val;
//         }
//         return $divs;
// }
// echo fnc_args_add2(4,2);

?>