<?php
//파일을 여는 방법 : fopen(파일위치, 파일여는방식)
// $f_car = fopen("./carmake/carmaker.txt", "r"); //r : 읽기 전용 방식(reeding)
// $f_car = fopen("./carmake/carmaker.txt", "w"); //w : 쓰기 전용 방식(포인터가 파일 시작부분에서 열기가됨) -읽기시 기존 파일이 전부 삭제 될수도 있다.




var_dump($f_car);


//파일을 한줄씩 읽어오는 방법 : fgets(open한 파일)
// print fgets($f_car);


// for ($i=0; $i < 8; $i++) 
// { 
//     print fgets($f_car);
// }

// while (!feof($f_car)) {
//     $carlist = fgets($f_car);
//     echo $carlist;
// }

// while($line = fgets($f_food))
// {
//     print $line;
// }


// while($carlist = fgets($f_car) !== false){
//     $trimed = trim($carlist);
//     echo $trimed,"\n";
// }

$f_car = fopne("./carmake/carmaker.txt","a"); //a : 쓰기전용(포인터 파일의 끝부분시작) - 기존 파일의 내용에서 추가로 더 쓸수 있도록 열어준다.

//파일에 내용 추가 : fputs(open한 파일, 추가할 내용)
fputs($f_car,"브라부스");





//파일을 닫는 방법 : fclose(open한 파일)
fclose($f_car);

?>