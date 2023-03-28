<?php

//1. 배열의 길이를 바환하는 my_len() 함수를 작성하시오.



// echo my_len($arr_base);

// $arr_bass = array(1,2,3,4,5);

// function fnc_my_len($arr)
// {
//     $arr_base_nom = 0;
//         foreach ($arr as $val) 
//         {
//             echo $val;

//         }
//         // echo $arr_base_nom;
        
//     }
//     fnc_my_len($arr_bass);


// 별찍기를 함수로 만들어 봅시다..
function star_print($star)
{
    for($str2 = 0; $str2 < $star; $str2++)
            {
                echo"*";
            }
            echo"\n";
}

$star = 6;
for($i = 1; $i <= $star; $i++)
{
    star_print($star);
}
echo"\n";

for($t = 1; $t <= $star; $t++)
{
    star_print($t);
}
echo"\n";



// function fnc_star($star)
// {
//     for($str = 1 ; $str <=$star; $str++)
//     {
//         for($str2 = 0; $str2 < $star; $str2++)
//         {
//             echo"*";
//         }
//         echo"\n";
//     }
// }

// fnc_star(5);


// function fnc_star($star)
// {
//     for($str =1; $str <= $star; $str++)
//     {
//         for($str2 = 0; $str2< $str; $str2 ++)
//         {
//             echo "*";
//         }
//         echo"\n";
//     }

// }
// fnc_star(7);



// function fnc_star($star)
// {
//     for ($str=1 ; $str <= $star ; $str++) 
//     { 
//         for($str1 = $star - $str; $str1 > 0 ; $str1--)
//         {
//             echo "?";
//         }
//         for($str2 = 0; $str2 < 2*$str-1; $str2++)
//         {
//             echo "*";
//         }
//     echo"\n";
//     }
// }
// fnc_star(7);







?>

