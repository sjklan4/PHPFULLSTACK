<?php
//*전역변수//////////////////////////////*
// function fnc_add()
// {
//     //global $int_a; ->>>>>> // 'global' 전역변수 선언시 사용 : 모든 곳에 같은 값을 적용 시키도록 한다(파일 위치 등 상관 없이)
//     $int_a = $int_a + 10;
//     return $int_a;

// }

//function 내부와 외부는 저장되는 영역이 다름으로 서로 다른 변수가 된다.

// $int_a = 10;

// echo fnc_add();
//-----------------------------------------------------------------------------------------------------//

//////*정적 변수*////////////////////
// function fnc_add_1()
// {
//     static $i = 1;
//     echo $i."\n";
//     $i++; // 큰의미 없는  형태 (현재는)
// }

// for($i = 0; $i < 3; $i++)
// {
//     fnc_add_1();
// }

//-----------------------------------------------------------------------------------------------------//

// //call by value
// function fnc_val($int_a, $int_b)
// {
//     $int_a = 3;
//     $int_b = 4;
//     echo $int_a, " ",$int_b,"\n";
// }

// $int_a = 1;
// $int_b = 2;
// fnc_val(5,6);

// echo $int_a, " ", $int_b;

//----------------------------------------------------------------------------------------------//
//call by reference///
function fnc_val(&$a, &$b)
{
    $a = 3;
    $b = 4;
}

$int_a = 1;    
$int_b = 2;
fnc_val($int_a, $int_b);

echo $int_a, " ", $int_b;


