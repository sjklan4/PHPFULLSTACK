
<!-- 
성적
범위 : 100 : A+
        90 ~ 99 : A
        80 ~ 89 : B
        70 ~ 79 : C
        60 ~ 69 : D
        60미만 : F -->


<?php
$sco = 40;
$you = "너의 점수는";
$you_1 = "입니다. 잘했습니다.";
$you1 = "이다 공부좀 하자.";
$result1 = "잘못된 값을 입력 했습니다.";
// $class = "<A>";

// if($sco == 100){ echo $you ,$sco,'점 입니다.<A+>' ; }
// elseif($sco >= 90 ){ echo $you ,$sco,'점 입니다.<A>';}
// elseif($sco >= 80 ){ echo $you ,$sco, '점 입니다.<B>';}
// elseif($sco >= 70 ){ echo $you ,$sco, '점 입니다.<C>';}
// elseif($sco >= 60 ){ echo $you,$sco, '점 입니다.<D>';}
// else{ echo $you ,$sco, '입니다.<F>';}

//0~100 까지만 입력 받았을때 결과물이 출력 되도록, 그외 숫자는 값일 경우 "잘못된 값을 입력 햇습니다."라고 출력해주세요
// if($sco > 100 || $sco <0)
// { 
//     echo $result1;
// }
// else{
//     if($sco == 100){$result = "<A+>";
//         echo $you,$sco,$you_1,$result;}
//     elseif($sco >= 90 ){$result = "<A>";
//         echo $you,$sco,$you_1,$result;}
//     elseif($sco >= 80 ){$result = "<B>";
//         echo $you,$sco,$you_1,$result;}

//     elseif($sco >= 70 ){$result = "<C>";
//         echo $you,$sco,$you1,$result;}
//     elseif($sco >= 60 ){$result = "<D>";
//         echo $you,$sco,$you1,$result;}
//     else{$result =  "<F>";
//         echo $you,$sco,$you1,$result;}


// }

if($sco > 100 || $sco <0)
{ 
    echo $result1;
}
else{
    if($sco >=80)
    {
        if($sco == 100)
        {
            $result = "<A+>";
        }
        elseif($sco >= 90 )
        {
            $result = "<A>";
        }
        elseif($sco >= 80 )
        {
            $result = "<B>";  
        }
        echo $you,$sco,$you_1,$result;
    }
    else{
            if($sco >= 70 )
            {
                $result = "<C>";
            }
            elseif($sco >= 60 )
            {
                $result = "<D>";
            }
            else
            {
                $result =  "<F>";
            }
            echo $you,$sco,$you1,$result;
        }
        
    }






?>