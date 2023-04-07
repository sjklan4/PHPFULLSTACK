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
// $arr = array(5, 10, 7, 3, 1);
// $arr2 = array(7, 11, 5, 3, 4);
// function my_max($array)
// {
//     $mx = $array[0];
//     for($n=1; $n < count($array); $n++)
//     {
//         if($array[$n] > $mx )
//         {
//             $mx = $array[$n];
//         }
//     }
//     echo $mx,"\n";
// }
// my_max($arr);    
    

//=---------------------------------------------------------------------------------------.//


// function my_min($array)
// {
//     $mn = $array[0];
//     for($n=1; $n < count($array); $n++)
//     {
//         if($array[$n] < $mn )
//         {
//             $mn = $array[$n];
//         }
//     }
//     echo $mn,"\n";
// }
// my_min($arr);    



// echo min($arr);

// for ($i=0; $i < 6; $i++) 
// {
//     $array[$i]= rand(1,45);
//         if($i>0 && $array[$i] !== $array[$i-1]) 
//         {
//             echo $array[$i],"\n"; 
//         }

// }
// $array = array(); // 빈 배열을 생성합니다.

// for ($i=0; $i < 6; $i++) {
//     $num = rand(1, 45); // 1부터 45까지의 랜덤한 숫자를 생성합니다.
    
//     // 중복된 값이 없을 때까지 숫자를 다시 생성합니다.
//     while (in_array($num, $array)) {
//         $num = rand(1, 45);
//     }
    
//     $array[$i] = $num; // 배열에 숫자를 추가합니다.
//     echo $array[$i], "\n"; // 숫자를 출력합니다.
// }

//앞의 숫자와 비교 해야 되기 때문에 순번이 앞에 있는것과 비교를 위해서 -1을 주어서 앞번대 숫자를 지칭해준다.


// $num1 = 10; // 첫 번째 숫자
// $num2 = 8; // 두 번째 숫자
// $base_num = 15; // 기준 숫자

// $diff1 = abs($base_num - $num1); // 첫 번째 숫자와의 차이
// $diff2 = abs($base_num - $num2); // 두 번째 숫자와의 차이

// if ($diff1 < $diff2) {
//   echo $num1 . "이(가) 기준 숫자에 더 가깝습니다.";
// } else {
//   echo $num2 . "이(가) 기준 숫자에 더 가깝습니다.";
// }

$arr = array(1,2,3,4,5,6);
echo array_sum($arr);

?>
