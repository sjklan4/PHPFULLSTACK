<?php
//1. while + if가 조합된거
// $i = 0;
// while( $i <=4 ) 
// {
//     if ( $i === 1)
//     {
//         echo "1입니다.";
//     }
//     else if( $i === 4 )
//     {
//         echo "4입니다.";
//     }
//     ++$i;
// }

// foreach + if 조합
// $arr_ass = ["a" => 1, "b"=>2, "c"=>3];
// var_dump($arr_ass);

// $arr_ass = array("a" => 1, "b" => 2, "c" =>3); 
// foreach( $arr_ass as $key => $val) //싸이즈 만큼 반복구문
// {
//     if( $key ==="c" || $val ===2)
//     {
//         echo "if";
//     }
// }

// for ($i=2; $i <=9 ; $i++) 
// { 
//     echo $i ."단\n";
//     for ($n=1; $n <=9 ; $n++) 
//     { 
//         echo $i ." * ". $n. " = ". $i*$n."\n";
//     }
// }

for($i = 1 ; $i <=9; $i++)
{
    // for($q = 1; $q <= $i; $q++)
    // {
    //     echo " ";
    // }
    // for($n = 9; $n >= $i ; $n--)
    // {
    //     echo "*";
    // }
    // for($n = 9; $n >= $i ; $n--)
    // {
    //     echo "*";
    // }
//     echo "\n";
    // for($t = 1; $n <= 9 ; $n++)
    // {
    //     echo "*";
    // }
//     for($g = 1; $n <= 9 ; $n++)
//     {
//         echo "*";
//     }
    echo"\n";
}
// $result = 0;
// for($n = 1; $n<=100; $n++)
// { 
    
//     if($n%2 == 0)
//         {
//             $result += $n;
            
//         }
    
// }
// echo $result."\n";

// $arr_test=
// array(
//     1
//     ,2
//     ,array(
//             "info_a" => 3
//             ,"info_b" => 4
//             ,"info_arr" =>
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                         )
//         )
// );

// echo $arr_test[2]["info_a"]."\n";
// echo $arr_test[2]["info_arr"]["f_2"]."\n";
// echo $arr_test[2]["info_arr"]["f_1"];

// 함수
// function fnc_sum($param_a , $param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// echo fnc_sum(2154,6812);



//가변 파라미터
// function fnc_sum2(...$param_numbers)
// {
//     // $sum = 0;
//     // foreach($param_numbers as $val)
//     // {
//     //     $sum += $val;
//     // }
//     return array_sum($param_numbers);
// }
// echo fnc_sum2(1,5,3,1);

// function fnc_global()
// {
//     global $blobal_i;
//     $global_i = 0;
// }

// $global_i = 5;
// fnc_global();
// echo $global_i;

// function fnc_static()
// {
//    static $static_i = 0;  //static은 함수 안에서만 사용 가능 한데 선언시 메모리상에 있는 값이 남아서 메모리에 저장된 값을 다시 받아서 사용
//     echo $static_i;         //static은 PDO선언문과 같은 기능을 시작한다.
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();



// & 파라미터에 들어가면 레퍼런스 값으로 지정 
// function fnc_reference(&$param_str)
// {
//     $param_str ="fnc_reference";

// }
// $str = "aaa";
// fnc_reference($str);
// echo $str;


// function str($str_num)
// {
//     for($i = 1; $i <= $str_num; $i++)
//     {
//         for ($s=1; $s <= $str_num; $s++) { 
//             echo "*";
//         }
//         echo"\n";
//     }

// }


// for($s = 1; $s<=5;$s++)
// {
//     for($i = 1; $i <=$s ; $i++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// function fun_print_str($str_num)
// {
//     for($i = 1; $i <= $str_num; $i++)
//     {
//         echo "*";
        
//     }
//     echo"\n";
// }
// fun_print_str(1);
// fun_print_str(2);
// fun_print_str(3);

// 위 함수를 내가 원하는 문자로 찍고 싶다는 요청이 왔습니다.
// 수정 관련 예시.
//----------------------------
//  파일명 : 
//  시스템명 : 
//  이력
//  v001 : new d1111
//  v002 : fnc_print_str 수정 - d1111
//------------------------------

//function fun_print_str($str_num) // v002 del
// function fun_print_str($str_num,$fun_word) // v002 add
// {
//     for($i = 1; $i <= $str_num; $i++)
//     {
//         //echo " * "; // v002 del
//         echo $fun_word;
//     }
//     echo"\n";
// }

// fun_print_str(1,"GAGA");
// fun_print_str(2,"GAGA");
// fun_print_str(3,"GAGA");

//파라미터 조정 방법
// function fun_print_str($str_num,$fun_word = " * ") // 2번째 파라미터를 기본 설정을 해놓을수 있다. 옆의 코드는 두번째 파라미터에 "*"을 주고 있다.
// {
//     for($i = 1; $i <= $str_num; $i++)
//     {
//         //echo " * "; // v002 del
//         echo $fun_word;
//     }
//     echo"\n";
// }

// fun_print_str(1);
// fun_print_str(2);
// fun_print_str(3);


function fnc_reference2(&$param_str)
{
    echo "2번 : $param_str \n";
    $param_str ="fnc_refernce2에서 값 변경";
    echo "3번 : $param_str \n";
}
$str = "aaa";
echo "1번 : $str \n";
fnc_reference2($str);
echo "4번 : $str \n";

//1번 : aaa , 2번 : aaa , 3번 :fnc_refernce2 , 4번 : fnc_refernce2
//1번 : aaa , 2번 : aaa , 3번 :fnc_refernce2 , 4번 : aaa

// 설명  : 우선str을 저장한후 1번을 호출시킨다 그다음 참조 함수로 가면 param_str은 참조 함수로 str부분의 위치를 가지고 있다. 
//그다음 