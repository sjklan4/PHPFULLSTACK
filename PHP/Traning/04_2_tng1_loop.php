<?php
//1. 반복문을 이용해서 아래와 같이 출력해 주세요 .

//갯수는 내가 입력한 갯수만큼

// *
// **
// ***
// ****
// *****
// $num = 5;
// for ($str=0; $str <= $num ; $str++) 
// { 
//     for($str1 = $num - $str; $str1>0;$str1--)
//     {
//         echo " ";
//     }
//     for($str2 = 0; $str2 < 2*$str-1; $str2++)
//     {
//         echo "*";
//     }
// echo"\n";
// }


// $s=5;
// for ($i=0; $i <=$s ; $i++) 
// { 
//     for ($j=0; $j<=$i ; $j++) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }


// $count = 5;
// for ($j=0; $j <= $count ; $j++) 
// {    
//     for ($i=$count; $i >= $j ; $i--) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }

// $count = 10;
// for($j =1; $j <= $count; $j++)
// {
//     for ($i=$count-$j; $i >0 ; $i--) 
//     { 
//         echo " ";
//     }
//     for ($p=0; $p < 2*$j-1 ; $p++) 
//     { 
//         echo "*";
//     }
//     echo"\n";
// }

$count = 5;
for($j =1; $j <= $count; $j++)
{
    for ($i=$count-$j; $i >0 ; $i--) 
    { 
        echo "?";
    }
    for ($p=0; $p < 2*$j-1 ; $p++) 
    { 
        echo "*";
    }
    echo"\n";
}


// $count = 7;
// for($j =1; $j <= $count; $j++)
// {
//     for ($i=$count-$j; $i >0 ; $i--) 
//     { 
//         echo "?";
//     }

//     for ($p=0; $p < $j ; $p++) 
//     { 
//         echo "*";
//     }

//     for($w=1; $w <$j; $w++)
//     {
//         echo"*";
//     }
//     echo"\n";
// }
// $count1 = 5;
// for($z =1; $z <= $count1; $z++)
// {
//     for ($m = $count1-$z; $m>0; $m--){
//         echo "*";
//     }
//     for($n = $count1-$m; $n>0; $n--){
//         echo"?";
//     }
//     echo"\n";
// }

  // for ($q=$count-$j; $q >0 ; $q--) 
    // { 
    //     echo "?";
    // }

?>