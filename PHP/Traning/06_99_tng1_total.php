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

function empt_print($emp)
{
    for($em1 = 0; $em1 < $emp; $em1++)
        {
            echo "?";
        }
        echo"\n";
}

$star = 6;
$emp = $star;
for($tr = 1; $tr<=$star ; $tr++)
{
    for($e = $star-$tr; $e > 0; $e--)
    {
        empt_print($e);
    }
    for($tr1 = 0; $tr1 <= 2*$e-1; $tr1++)
    {
        star_print($tr1);
        
    }
    
}
echo  star_print($star),"\n";
///----------------------------------------------
// for($i = 1; $i <= $star; $i++)
// {
//     star_print($star);
// }
// echo"\n";

// for($t = 1; $t <= $star; $t++)
// {
//     star_print($t);
// }
// echo"\n";

// for($s = $star ; $s > 0; $s--)
// {
//     star_print($s);
// }
// echo star_print($s),"\n";

// for($tr = 1; $tr<=$star ; $tr++)
// {
//     for($e = $emp; $e > 0; $e--)
//     {
//         empty($e);
//     }
//     for($tr1 = 1; $tr1 <=$star; $tr1++)
//     {
//         star_print($tr1);
//     }
//     echo  star_print($tr1),"\n";
// }




// for($tr = 1; $tr<=$star ; $tr++)
// {
//     for($e = $star-$tr; $e > 0; $e--)
//     {
//         empt_print($e);
//     }
//     for($tr1 = 0; $tr1 <= 2*$e-1; $tr1++)
//     {
//         star_print($tr1);
        
//     }
    
// }
// echo  star_print($star),"\n";


//------------------------------------------------위에는 function전용=------------------



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

