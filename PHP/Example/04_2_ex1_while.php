<?php
    // 1. while 문
    // $a = 2;
    // $i = 0;
    // while($i < 10 )
    // {
    //     $sum = $a * ++$i;
    //     echo $a," * ",$i," = ",$sum,"\n";

    // }

    // $dan = 2;
    // $num = 1;
    // while($num < 10)
    // {
    //     $result = $dan." * ".$num." = ". $dan * $num."\n";
    //     echo $result;
    //     $num++;
    // }


    
    // $i = 2;
    // $max_dan = 19;
    // while($i < $max_dan )
    // {
    //     echo $i."단"."\n";
    //     $a = 1;
    //     while($a < $max_dan)
    //     {   
    //         $b=1;
    //         while($b < $max_dan)
    //             {echo  $i." * ".$a." * ".$b." = ". $i * $a * $b."\n";
    //             $b++;
    //             }
    //     $a++;
    //     }
        
    // $i++;
    // }


    
    
    // $i = 2;
    // $max_dan = 19;
    // while($i < $max_dan )
    // {
    //     echo $i."단"."\n";
    //     $a = 1;
    //     while($a < $max_dan)
    //     {   
    //         echo  $i." * ".$a." = ". $i * $a."\n";
    //         $a++;
    //     }
        
    // $i++;
    // }

    // 2. Do-while문
    // do{
    //     반복할 처리
    // }
    // while(조건);

    // $i = 0;
    // do{
    //     echo $i, "do while";
    // }
    // while($i === 1);

    // while($i === 1)
    // {
    //     echo $i, "while"; 
    // }

    //3. for문
    for ( $i=2; $i <= 9 ; $i++) 
    { 
        echo "\n",$i, "단\n";   
        for ($a=2; $a < 10; $a++) 
        { 
            echo $i," * ",$a," = ", $i*$a,"\n";
        }
        

    }
    //for 문은 시작을 설정 하고 조건에 맞는 값이 없으면 자동 종료 시킨다. while문은 시작값을 지정해서 초기화 하는 조건이 없으므로 별도로 초기
    //값을 설정해 주어야 한다. 

    
?>