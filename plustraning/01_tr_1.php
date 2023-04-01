<?php
// 콘솔에 출력 : 사용을 잘 안하는 목록 : 유저가 볼 수가 없다. 브라우져에서는 직관적으로 나오기 때문에 필수적인 요소는 아니다.
//print "프린트"; -> //echo보다 미세하게 느리다. 
//echo "에코";

//print_r(array(1,2,3,)); ->//목록을 보여 준다. 키값과 value만

//var_dump(array(1,2,3,));-> //배열안에 데이터 형부터 모든 값을 보여주기 때문에 보안상 문제가 될 수도 있다.

// 변수 : 정보들을 저장하는 장소 (앞자리에 숫자 공백, 내부에 특수문자 한글을 사용 하면안된다.)
$int_i = 1; 

echo $int_i;

$sum = $int_i + 5;

//스네이크 기법 : 영어 소문자, 단어사이의 연결은 '_' 로 작성하는 방법(예 : $arr_food)
//카멜 기법 : 영어만 사용, 단어 사이의 첫글자로 대문자로 작성(예 : $arrFood)

// 증가 연산자, 감소 연산자
$i_increase = 0;
$i_decrease = 0;

 ++$i_increase; //전위 증가 연산자 - +를 먼저하고 출력
   $i_increase++; //후위 증가 연산자 - 먼저 보여주고 증가를 처리한다.

 --$i_decrease ; //전위 감소 연산자
 $i_decrease--; // 후위 감소 연산자
 echo $i_increase,"\n";

 echo ++$i_increase,"\n";
 echo $i_increase++,"\n";

 echo $i_increase;

 // 산술대입 연산자
 $i = 0;

 $i = $i+2;
 $i += 2; // 둘다 같은 값들
 $i -= 1;
 $i *= 3;
 $i /= 4;
 $i = 6;
 $i %= 6;
 echo"\n";

// $str = "aa";
// $str .= $str."bb";
// $str .= "bb"; // .= 을 하면 두가지 전부를 나타내는 의미가 된다.
// echo $str;


// echo"\n";

//비교 연산자
// $a < $b : a가 b보다 작다, b가 a보다 크다
// $a > $b : a가 b보다 크다, b가 a보다 작다
// $a <= $b : a가 b보다 작거나 같다, b가 a보다 크거나 같다.
// $a >= $b : a가 b보다 크거나 같다, b가 a보다 작거나 같다.
// $a != $b : a와 b의 값이 다르다
// $a == $b : a와 b의 값과 데이터형식이 다르다
// $a === $b : a와 b의 값과 데이터형식 같다


$a = 1;
$b = 1;
// var_dump($a != $b);
// var_dump($a !== $b);

// *데이터를 비교할때는 데이터 형식까지 비교해야 한다. - 그렇게 해야 버그가 없다.*
//var_dump(false == 0);
//var_dump(true == 1);

// 논리 연산자
// &&(and 연산자) : 모든 조건이 만족해야할 때 사용 
$i = 1;
var_dump($i === 1 && $i < 1);


// ||(or 연산자) : 여러 조건중 하나만 만족할 때 사용
$i = 1;
var_dump($i === 1 || $i < 1 || $i >0);

// ! (not연산자)  : 결과를 반전시킬 때 사용
$i = 1;
var_dump(!($i === 2));
echo "\n";
echo "\n";
// 삼항연산자 : 조건? 참일 경우 : 거짓일 경우
$i = 1;
$str = " ";
$i > 0 ? $str =  "000" : $str =  "111";
echo $str;
echo "\n";
//삼항 연산자를 이용해서 짝수일때는 "짝수"를 출력 홀수 일때는 "홀수" 를 출력
$num = 4;
$str_num = "";
$num %2 === 0   ? $str = "짝수" : $str = "홀수";
echo $str;

echo "\n";


function str_num($num){
    if($num  === 0){
        return "0입니다.";
    }
    elseif ($num %2 === 0) {
        return "짝수";
    }
    else
    {
        return "홀수";
    }
}

echo "\n";
echo "\n";
$str_div = str_num(0);
echo $str_div;

// if문(조건문) : 
$i = 1;
if( $i % 2 === 0)
{
    echo "짝수";
}
else{
    echo "홀수";
}

echo "\n";
echo "\n";
$i = 1;
if( $i === "1")
{
    echo "문자열 1입니다.";
}
elseif($i === 1)
{
    echo "숫자 1입니다.";
}
else {
    echo "1이 아닙니다.";
}

echo "\n";
echo "\n";

// 과목의 종류는 국어, 영어, 수학, 과학 
// 평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상일때 "합격"
// 그 외는 "불합격"

$kor_lag = 100;
$eng_lag = 100;
$meth = 40;
$science = 20;
$sum=($kor_lag+$eng_lag+$eng_lag+$science)/4;

// if($kor_lag < 40 || $eng_lag < 40 || $meth <40 || $science <40)
// {
//     echo "과락";
// }
// elseif($sum/4 < 60){
//     echo "불합격";
// }
// else {
//     echo "합격";
// }

echo "\n";

if($sum >= 60 && ($kor_lag < 40 || $eng_lag < 40 || $meth <40 || $science <40))
{
    echo "합격";
}
else {
    echo "불합격";
}
echo "\n";

echo "\n";
echo "\n";
// function average_sc($scor){
//     $result_avg = average($kor_lag, $eng_lag, $meth, $science);

// }


//switch 문
// $str_loc 에 지역명을 저장하고, 
// 서울은 "서울사람", 대구는 "대구사람", 부산은 "부산사람", 그외는 "타지역 사람"을 출력

$str_loc = "충청도";

switch ($str_loc) {
    case '서울':
        echo '서울사람';
    break; //브레이크가 있어야 조건에 맞는 것만 출력하도록 한다 없으면 그 뒤부터 전부다 출력됨

    case '대구':
        echo '대구사람';
    break;

    case '부산':
        echo '부산사람';
    break;    

    default:
    echo '타지역사람';
    break;
}
echo "\n";

echo "\n";
// 반복문 : while, for, do_while, foreach
// while 은 조건에 맞으면 계속해서 실행한다.(조건을 체크하고 연산을 실행)
// $i = 1;
// while($i === 1)
// {
//     echo ++$i;
//     break;
// }
// echo "\n";


// do_while : (연산을 실행하고 조건을 체크하는 루프) 은 조건을 한번 확인한후에 실행을 진행한다.
// $i = 1;
// do
// {
//     echo $i;
// } while($i === 1);

//for문 : 시작과 끝을 우리가 지정해주는 루프(루프의 횟수를 지정가능)
// for($i = 0; $i < 2; $i++)
// {
//     echo "$i \n";
// }

// 1~ 50 까지, 반복문을 이용해서 더하는 프로그램을 만들어 주세요

$sum = 0;
for($n = 1; $n<=50; $n++)
{
    $reuslt = $sum +=$n;
}
echo $reuslt;

echo "\n";
echo "\n";


// function sumarry()
// {
//     $sum_ray = 0;
//     for($n = 1; $n<=50; $n++)
//     {
//         $sum_ray += $n;
//     }
//     return $sum_ray;
// }

// $resultsum = sumarry();
// echo $resultsum;

echo "\n";
echo "\n";


$res = 0;
while($i <= 50)
{
    $res += $i;
    ++$i;
}
echo $res;

echo "\n";
echo "\n";



//배열 
$arr_i = array(1,2,3);
echo $arr_i[1];

echo "\n";
echo "\n";
//연상배열 : 키값을 지정해서 그 지정한 키값을 가지고 가져온다.
// 키값 : std_no, std_name, std_age, std_gender
// $arr_acc = array("std_no" => 10
//                 , "std_name" => "park"
//                 , "std_age" => 34
//                 , "std_gender" => "남"
//             );

// echo $arr_acc["std_name"];

//다차원 배열
// $arr_acc = array("std_no" => 10
//                 , "std_name" => "park"
//                 , "std_age" => 34
//                 , "std_gender" => "남"
//                 // , "std_secret_info" => array("std_city_no" => 0606
//                 //                             ,"std_addr" =>"경산시 압량읍"
//                 //                             ,"std_finance" => array("std_income" => "Y3500"
//                 //                                                     , "std_result" => "30%"
//                 //                                                     , "std_report" => "양호"
//                 //                                                     , "std_balance" => 0.124923
//                 //                                                     )

//                 //                             )
//             );

echo "\n";
echo "\n";
// echo $arr_acc["std_age"],"\n";
// echo $arr_acc["std_secret_info"]["std_addr"],"\n";
// echo $arr_acc["std_secret_info"]["std_finance"]["std_income"];
echo "\n";
echo "\n";


// $arr_acc = array("std_no" => 10
//                 , "std_name" => "park"
//                 , "std_age" => 34
//                 , "std_gender" => "남"
//             );

// foreach문 : 배열을 루프해서 연산을 하고 싶을때
// foreach ($arr_acc as $key => $value) {
//     echo "$key : $val\n";
// }

//예제 : foreach루프를 돌려서 나이만 출력되게 프로그램을 만들어 주세요.
// 콘솔에 출력되는 양식(34)

echo "\n";
echo "\n";

$arr_acc = array("std_no" => 10
                , "std_name" => "park"
                , "std_age" => 34
                , "std_gender" => "남"
            );


foreach ($arr_acc as $key => $val)
{
    if($key === "std_age")
    {
        $arr_acc[$key]+=10;
    }
    
}

print_r($arr_acc);

//함수 : 사용하는 이유는 재사용성 증가, 가독성 증가
//-------------------------------------------------
//함수명 : clean_class_room
//기능  : 이름과 구역을 받아 청소지정 문자열을 반환
//파라미터 : $pran_name string
//          $param_loc string
//리턴     : $result_str string
//-------------------------------------------------

echo "\n";
echo "\n";


function clean_class_room($pram_name, $param_loc)
{
    $result_str = $pram_name."씨, ".$param_loc."을/를 청소해주세요.\n";
    echo $result_str; //return을 받아오면 결과값을 변수로 만들어서 따로 사용 할수도 있다.  ex> return $result_str; 별도 위치에 $result = clean_class_room  결과는  echo $result;
}
clean_class_room("봉정","책상");
clean_class_room("상준","유리창");
clean_class_room("아이유","책상");
clean_class_room("윤아","바닦");
echo "\n";
echo "\n";

//-------------------------------------------------
//함수명 : my_sum_all
//기능  : 1부터 지정숫자까지의 합을 구해서 리턴
//파라미터 : $param_int  int   
//리턴     : $result_int int
//-------------------------------------------------

// function my_sum_all($pram_int)
// {
//     $result_int = 0;
//     for($n = 1 ; $n <= $pram_int; $n++)
//     {
//         $result_int += $n;
//     }
//     return $result_int;

// }
//     $resultsum = my_sum_all(3);
//     echo $resultsum;

    echo "\n";
    echo "\n";
    
function my_sum_all2($pram_int2)
{
    $result_int2 = 0;
    $i = 1;
    while($i <= $pram_int2)
    {
        $result_int2 += $i;
        $i++;
    }
    return $result_int2;
}
$result1 = my_sum_all2(5);
echo $result1;







?>