<?php
//버블 정렬
// $arr = array(5,10,7,3,1);

// for($i = 0; $i < count($arr); $i++)
// {   
//     for($j = 0; $j < count($arr)-1; $j++)
//     {
//         if($arr[$j] > $arr[$j+1])
//         {
//             $temp = $arr[$j];
//             $arr[$j]=$arr[$j+1];
//             $arr[$j+1]=$temp;
//         }
//     }
// }
// print_r($arr);



// $arr = array(5,10,7,3,1);
// for($i = 0; $i < count($arr); $i++)
// {   
//     for($j = 0; $j < count($arr); $j++)
//     {
//         if($arr[$i] < $arr[$j])
//         {
//             $temp = $arr[$i];
//             $arr[$i]=$arr[$j];
//             $arr[$j]=$temp;
//         }
//     }
// }
// print_r($arr);

//---------------------------------------------------------------------------------------------

//배열 안에 최대 값, 최소 값을 출력해주는 함수를 각각 구현
// 함수명은 "my_max","my_min"
$arr = array(5, 10, 7, 3, 1);
$arr2 = array(7, 11, 5, 3, 4);
function my_max($array)
{
    $mx = $array[0];
    for($n=1; $n < count($array); $n++)
    {
        if($array[$n] > $mx )
        {
            $mx = $array[$n];
        }
    }
    echo $mx,"\n";
}
my_max($arr);    
    

//=---------------------------------------------------------------------------------------.//


function my_min($array)
{
    $mn = $array[0];
    for($n=1; $n < count($array); $n++)
    {
        if($array[$n] < $mn )
        {
            $mn = $array[$n];
        }
    }
    echo $mn,"\n";
}
my_min($arr);    



echo min($arr);

?>