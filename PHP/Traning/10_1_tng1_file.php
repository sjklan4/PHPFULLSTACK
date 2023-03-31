<?php
//파일명 : gugudan.txt
//파일 위치 : gugudan
//내용은 아래와 같습니다.
//2단 
//2 * 1 = 2 ........

// $f_gugudan = fopen("./gugudan/gugudan.txt","w");


// print fgets($f_gugudan);
// $result = "";
// for ($i=2; $i <=9 ; $i++)
// {
//     $result .= $i."단". "\n";
//     for($s = 1; $s <=9; $s++ )
//     {
//         $result .= $i." * ".$s." = ". $i * $s."\n";
//     }
//     $result.="\n";
// }

// fputs($f_gugudan, $result);

// $f_gugudan2 = fopen("./gugudan/gugudan2.txt","w");


// for ($i=2; $i <=9 ; $i++)
// {
//     fputs($f_gugudan2,$i." 단 "."\n");
//     for($s = 1; $s <=9; $s++ )
//     {
//         $result = $i." * ".$s." = ". $i * $s."\n";
//         fputs($f_gugudan2,$result);
//     }
//     fputs($f_gugudan2,"\n");
// }


//구구단을 함수로 구현

// fclose($f_gugudan2);
/*
김밥
샌드위치
백반
국밥
크림우동
연어초밥
탕수육
돈까스
"국밥"과 "크림우동" 사이에 "스테이크"를 추가해주세요.

*/

$f_food = file("./gugudan/food.txt","r");
$print_food = "";
foreach ($f_food as $val)
{
    if(trim($val) === "국밥")
    {
        $print_food .= $val."스테이크\n";
    }
    else{
        $print_food .= $val;
    }
}
print $print_food;

fclose($foodlist);
?>