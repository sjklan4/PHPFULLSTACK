<?php
//switch로 만들어 주세요.
// 성적
// 범위 : 100 : A+
//         90 : A
//         80 : B
//         70 : C
//         60 : D
//         그외 : F

$sco = 100;
$you = "당신의 점수는";
$you_1 = "점 입니다.";
$erro = "잘못된 값을 입력 했습니다.";
// switch ($sco) {
//     case $sco>100 || $sco <0:
//         echo '잘못된 값을 입력 했습니다.';
//         break;
//     case $sco == 100:
//         echo '당신의 점수는',$sco,'점 A+입니다.';
//         break;
//     case $sco == 90:
//         echo '당신의 점수는',$sco,'점 A입니다.';
//         break;    
//     case $sco == 80:
//         echo '당신의 점수는 ',$sco,'점 B입니다.';
//         break;
//     case $sco == 70:
//         echo '당신의 점수는 ',$sco,'점 C입니다.';
//         break;
//     case $sco == 60:
//         echo '당신의 점수는 ',$sco,'점 D입니다.';
//         break;  
//     default:
//         echo '당신의 점수는',$sco,'점 F입니다.';
//         break;
// }

if($sco < 0 || $sco >100)
{
    echo $erro;
}
else
{
    switch ($sco)
    {
        case $sco == 100:
            $result = 'A+';
            break;
        case $sco == 90:
            $result = 'A';
            break;    
        case $sco == 80:
            $result = 'B';
            break;
        case $sco == 70:
            $result = 'C';
            break;
        case $sco == 60:
            $result = 'D';
            break;  
        case $sco = 
            $result = 'F';
            break;
    }
    echo $you, $sco,$you_1,$result;
}

?>