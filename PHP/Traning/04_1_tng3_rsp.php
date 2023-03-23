<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p><h1>RSP Game START!</h1></p>
        <label for="hand">"내가지금 내려고 하는거"
            <select name="hand" id="hand">
                <option value="가위">가위</option>
                <option value="바위">바위</option>
                <option value="보자기">보자기</option>
            </select>
            <input type="submit" value="SHOT!">
        </label>
</body>

</html>

<?php
    // $rsp = array("가위", "바위", "보자기");
    // $selected = array_rand($rsp);
    // echo "내손은 지금", $hand = $rsp[$selected],"입니다.","\n";


    $hand = $_POST["hand"];
    echo "내손은 지금",$hand,"입니다.","\n";
    $rsp1 = array("가위", "바위", "보자기");
    $selected1 = array_rand($rsp1);
    echo "PC손은 지금", $hand1 = $rsp1[$selected1],"입니다.","\n";


    //     $RSP = array("가위","바위","보자기");
    //     $select = array_rand($RSP);
    //    echo "내손 ",$myhand = $selectrand($RSP),  "\n";

    //    echo "니손 ",$pc_hand = rand($RSP);
        // switch($myhand){
        //     case 0:
        //         $H = "가위";
        //     break;

        //     case 1:
        //         $H = "바위";
        //     break;

        //     case 2:
        //         $H = "보자기";
        //     break;
        // }
        // echo $H;

        if($hand == $hand1){
            echo "비겼다.";
        }
        elseif($hand == "가위" && $hand1 =="보자기"){
            echo "이겼다.";
        }
        elseif($hand == "바위" && $hand1 =="가위"){
            echo "이겼다.";
        }
        elseif($hand == "보자기" && $hand1 =="바위"){
            echo "이겼다.";
        }
        elseif($hand == "가위" && $hand1 =="바위"){
            echo "GG.";
        }
        elseif($hand == "바위" && $hand1 =="보자기"){
            echo "GG.";
        }
        elseif($hand == "보자기" && $hand1 =="가위"){
            echo "GG.";
        }

?>


