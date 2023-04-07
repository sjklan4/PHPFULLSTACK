<?php

// $suits = array('Spades', 'Hearts', 'Clover','Diamonds');
// $number = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K");

$user_card_arr = array();
$user_card_score = array();


$dl_card_arr = array();
$dl_card_score = array();

function card()
{
    $suits = array('Spades', 'Clover', 'Diamonds', 'Hearts');
    $number = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K");
    $deck = array();
    foreach ($suits as $s_value) 
    {
        foreach ($number as $n_value) 
        {
            $deck[] = array("number"=>$n_value,"suit" => $s_value);
        }
    }
    shuffle($deck);
    return $deck;
}
//print_r(card()); //--댁을 확인 하는 함수
// score_card 함수는 deck배영을 받아온다음 그 배열의 값이 숫자이면 그 값은 숫자 그대로 이고 
// 숫자가 아니면 그 값은 10이 된다. 그 중 문자 A에서 그림이 spades가 나오면 11점
// 나머지는 1점을 부여한다. 
// function score_card()
// {
//         $value = $n_value;
//         if(!is_numeric($n_value))
//         {
//             $value = 10;
//         }
//         if($n_value =='A' && $s_value == 'Spades') 
//         {
//             $value = 11;
//         }
//         elseif($n_value =='A' && $s_value != 'Spades')
//         {
//             $value = 1;
//         }
// }
function score_card( $param_arr )
{
    switch ( $param_arr["number"]) {
        case "J":
        case "Q":
        case "K":
            $value = 10;
            break;
        case "A":
            if( $param_arr["suit"] === "Spades" )
            {
                $value = 11;
            }
            else
            {
                $value = 1;
            }
            break;
        default:
            $value = $param_arr["number"];
    }
    return $value;
}


function randomCard(&$deck) //댁의 카드를 섞고 하나씩 뽑게 하는 기능을 하는 함수 구문
{
    return array_shift($deck);
}

function card_lever()
{
    switch($card_lever_num["suit"]){
        case 'Spades':
            $value = 4;
            break;
        case 'Clover':
            $value = 3;
            break;
        case 'Diamonds':
            $value = 2;
            break;
        case 'Hearts':
            $value = 1;
            break;
    }
}

//$deck = card();
//var_dump (randomCard($deck)); // 위의 card함수를 불러오기 위해 deck이라는 함수명을 주고 불러 온다음 randdomCard를 구동시킨결과 값을 deck_test라는 이름으로 찍어서 불러오고 vardupm로 찍었다.
//카드가 1장 뽑혀 있는 상황. - 누구줘야되!!!!!!! 누구 ???? 

// function dlcard($deck,$dlcard) //딜러에게 카드를 한장 한다.
// {
//     $dlcard[] = drawcard($deck);
//     echo "딜러 카드는 : ";
//     foreach ($dlcard as $indeck_dlcard) 
//     {
//         echo $indeck_dlcard['number'].$indeck_dlcard['suit'];
//     }
//     echo "\n";
// }




//카드를 2장씩 뽑아서 배열에 넣어서 가지고 있는 것을 보여주는 구문
$deck = card();
$usercard = randomCard($deck);
$user_card_arr[] = $usercard; // 유저 카드를 받아오는 것 - 유저 카드배열을 저장 시킨다.
$user_score = score_card($usercard); //유저 카드의 점수를 가져 온다. - 카드 점수 배열로 저장
$user_card_score[]=$user_score;

$usercard = randomCard($deck);
$user_card_arr[] = $usercard;
$user_score = score_card($usercard); //유저 카드의 점수를 가져 온다. - 카드 점수 배열로 저장
$user_card_score[]=$user_score;

$sum_user_score =array_sum($user_card_score) ; //1번 2번 카드 점수합(유저)
// echo $sum_user_score;


$dlcard = randomCard($deck);
$dl_card_arr[] = $dlcard; // 딜러 카드를 받아서 배열을 저장시킨다. 
$dl_score = score_card($dlcard);
$dl_card_score[] = $dl_score;//딜러 카드 점수를 배열로 저장 시킨다.

$dlcard = randomCard($deck);
$dl_card_arr[] = $dlcard;
$dl_score = score_card($dlcard);
$dl_card_score[] = $dl_score;//딜러 카드 점수를 배열로 저장 시킨다.
$sum_dl_score = array_sum($dl_card_score) ;
//$sum_dl_score = score_card( $dl_card_arr[0] ) + score_card($dl_card_arr[1]);//1번 2번 카드 점수합(딜러)

// print_r($user_card_arr);
// print_r($dl_card_arr);

$base_num = 21; //기준 비교값
$diff1 = abs($base_num - $sum_user_score);
$diff2 = abs($base_num - $sum_dl_score);

// echo $sum_user_score, "\n" ;
// echo$sum_dl_score ,"\n" ;

// if($diff1 < $diff2)
// {
//     echo $sum_user_score."내가 이겼다.";
// }
// else
// {   
//     echo $sum_dl_score."딜러가 이겼다.";
// }

while(true) 
{
        foreach($user_card_arr as $card)
        {
            echo "내카드 : ".$card["number"]." ".$card["suit"]."\n";
            echo "\n";
        }
        echo "내 점수 : ".$sum_user_score."\n";
	// print "\n";
    
    echo "카드를 한 장 더 받으시려면 1을, 카드를 확인하려면 2번을, 그만 받으시려면 0을 입력하세요. : ";
    fscanf(STDIN, "%d\n", $input);	      
if($input === 0 ) 
    {
		break;
	}
    elseif ( $sum_user_score === 21) 
    {
        echo "내가 이겼다!\n";
        echo "***********************************************************************************\n";
    }
    else if ($input === 1) {
        echo "***********************************************************************************\n";
        echo "1번 : 카드를 뽑습니다.\n";
        $usercard = randomCard($deck);
        $user_card_arr[] = $usercard;
        $user_score = score_card($usercard);
        $user_card_score[] = $user_score; //유저 카드 점수를 비교하기위해 배열에서 불러오기
        echo "내가 뽑은 카드 :".$usercard["number"].$usercard["suit"]."\n";
        echo "내가 뽑은 카드 점수 : ".$user_score."\n";
        $sum_user_score += $user_score; //$sum_user_score카드 범위는 score_card 함수로 인해 숫자로 인지되서 가져왔다. user_card_score도 숫자로 가져오도록 한다.
        
            if ($sum_user_score > 21) 
            {
                echo "************************************************************************************\n";
                foreach($dl_card_arr as $card)
                {
                    echo "딜러 카드 : ".$card["number"]." ".$card["suit"]."\n";
                    
                }
                echo" | "."현재 딜러 카드점수 : ".$sum_dl_score." | "."\n";
                echo "************************************************************************************\n";
                echo "\n";
                echo "\n";
                echo "내 점수 : ".$sum_user_score."점으로 졌습니다.";
                break;
            }
            elseif ($sum_user_score === 21) 
            {
                echo "************************************************************************************\n";
                foreach($dl_card_arr as $card)
                {
                    echo "딜러 카드 : ".$card["number"]." ".$card["suit"]."\n";
                    
                }
                echo" | "."현재 딜러 카드점수 : ".$sum_dl_score." | "."\n";
                echo "************************************************************************************\n";
                echo "\n";
                echo "\n";
                echo "딜러 카드점수 : ".$sum_dl_score."\n";
                echo "내 점수 : ".$sum_user_score."점으로 승.";
            }
            elseif($sum_user_score === $sum_dl_score)
            {
                if (count($user_card_arr) < count($dl_card_arr)) 
                {
                    echo "딜러 카드수 : ".count($dl_card_arr)."장 이다. 패! \n";
                    echo "내 카드수 : ".count($user_card_arr)."장 이다. 승!";
                }
                elseif (count($user_card_arr) === count($dl_card_arr)) 
                {
                    $user_clist_rank = card_lever($usercard);
                    $user_rank_score = array_sum($user_clist_rank);
                    $dl_clist_rank = card_lever($dlcard);
                    $dl_rank_score = array_sum($dl_clist_rank);
                    if ($user_rank_score > $dl_rank_score) 
                    {
                        echo "딜러의 카드랭크 점수가".$dl_clist_rank."점 으로 딜러 패!\n";
                        echo "유저의 카드랭크 점수가".$user_clist_rank."점 으로  유저 승!";
                    }
                    elseif($user_rank_score === $dl_rank_score)
                    {
                        echo "무승부";
                    }
                    else
                    {
                        echo "딜러의 카드랭크 점수가".$dl_clist_rank."점 으로 딜러 승!\n";
                        echo "유저의 카드랭크 점수가".$user_clist_rank."점 으로  유저 패!";
                    }  
                }
                else 
                {
                    echo "딜러 카드수 : ".count($dl_card_arr)."장 이다. 딜러 승! \n";
                    echo "내 카드수 : ".count($user_card_arr)."장 이다. 패!";
                }
            }

            else{ $sum_user_score ;
                echo "내 점수 : ".$sum_user_score."점 \n";
                echo "***********************************************************************************\n";}
    }
    else if($input === 2) {
        echo "***********************************************************************************\n";
        echo "2번 : 카드 open.\n";
        

            if($diff1 < $diff2)
            {
                echo "************************************************************************************\n";
                foreach($dl_card_arr as $card)
                {
                    echo "딜러 카드 : ".$card["number"]." ".$card["suit"]."\n";
                    
                }
                echo" | "."현재 딜러 카드점수 : ".$sum_dl_score." | "."\n";
                echo "************************************************************************************\n";
                echo "\n";
                echo "\n";
                echo "내 점수 : ".$sum_user_score."점 내가 이겼다.";

            }

            elseif($diff1 === $diff2)
            {   
                echo "************************************************************************************\n";
                foreach($dl_card_arr as $card)
                {
                    echo "딜러 카드 : ".$card["number"]." ".$card["suit"]."\n";
                    
                }
                echo" | "."현재 딜러 카드점수 : ".$sum_dl_score." | "."\n";
                echo "************************************************************************************\n";

                if (count($user_card_arr) < count($dl_card_arr)) 
                {
                    echo "딜러 카드수 : ".count($dl_card_arr)."장 이다. 패! \n";
                    echo "내 카드수 : ".count($user_card_arr)."장 이다. 승!";
                }
                elseif (count($user_card_arr) === count($dl_card_arr)) 
                {
                    $user_clist_rank = card_lever($usercard);
                    $user_rank_score = array_sum($user_clist_rank);
                    $dl_clist_rank = card_lever($dlcard);
                    $dl_rank_score = array_sum($dl_clist_rank);
                    if ($user_rank_score > $dl_rank_score) 
                    {
                        echo "딜러의 카드랭크 점수가".$dl_clist_rank."점 으로 딜러 패!\n";
                        echo "유저의 카드랭크 점수가".$user_clist_rank."점 으로  유저 승!";
                    }
                    elseif($user_rank_score === $dl_rank_score)
                    {
                        echo "무승부";
                    }
                    else
                    {
                        echo "딜러의 카드랭크 점수가".$dl_clist_rank."점 으로 딜러 승!\n";
                        echo "유저의 카드랭크 점수가".$user_clist_rank."점 으로  유저 패!";
                    }  
                }
                else {
                    echo "딜러 카드수 : ".count($dl_card_arr)."장 이다. 딜러 승! \n";
                    echo "내 카드수 : ".count($user_card_arr)."장 이다. 패!";
                }
            }
            else
            {   echo "************************************************************************************\n";
                foreach($dl_card_arr as $card)
                {
                    echo "딜러 카드 : ".$card["number"]." ".$card["suit"]."\n";
                    
                }
                echo" | "."현재 딜러 카드점수 : ".$sum_dl_score." | "."\n";
                echo "************************************************************************************\n";
                echo "\n";
                echo "\n";
                echo "내 점수 : ".$sum_user_score."점 내가 졌다.";
            
            }
        break;
    }

    else {
        echo "다시 입력해주세요.";
    }

	// echo $input;
	print "\n";
}
echo "끝!\n";

// $suits = array(1,2,3,4,5,6);
// $number = array("A","B","C");

// foreach ($suits as $val) {
//     foreach ($number as $value) {  
//         echo $val.$value."\n";
//     }
// }