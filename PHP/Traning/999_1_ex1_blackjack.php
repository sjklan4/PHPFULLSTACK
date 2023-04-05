<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임(총 52장)

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.(처음 2장 다음부터 1장씩)
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수(8장)
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산(검정A는 1점 , 빨강 A는 11점)
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 스페이드>크로버>다이아>하트 순
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 썻던 카드는 카드는 다시 쓸 수 없다..

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

class Deck
{
    
    public $suits = array('Spades', 'Hearts', 'Clover','Diamonds');
    public $number = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K");
    public $deck = array();
    //총 카드 조합수 52(4*13)
    public function __construct()
    {
        //각 조합 카드마다 점수를 구하는 구문(밑에)
        
        foreach ($this->suits as $suits) 
        {
            foreach ($this->number as $number) 
            {

                $value = $number; // number 배열에서 숫자 = 점수 가된다. 라는것을 위해서 초기화

                if(!is_numeric($number)) //숫자가 아닌 문자들은 10점으로 통일
                {
                    $value = 10;
                }
                else
                {
                    $value = $number;
                }
                if($number =='A' && $suits =='Spades')
                {
                    $value = 11;
                }
                else
                {
                    $value = 1;
                }


            }
        }




    }






}










?>