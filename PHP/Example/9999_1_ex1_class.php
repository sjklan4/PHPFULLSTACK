<?php

//------------------------- class -----------------------------
class Food
{
    // 접근 제어 지시자
    // public     : 어디서든(class밖에서도) 접근이 가능
    // private    : 해당 class내에서만 접근 가능
    // protected  : class 자기 자신과 상속 class 내에서만 접근 가능

    //맴버 변수
    // private $str_name;
    // private $int_price;

    protected $str_name;
    protected $int_price;


    //메소드
    public function __construct( $param_name, $param_price )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    } 

    public function fnc_print_food_price($param_nprice)
    {
        $this->int_price = $param_nprice;
    }

    public function fnc_print_food_neo($param_newname)
    {
        $this->str_name = $param_newname;
    }

    public function fnc_print_food()
    {
        $str = $this->str_name." : ".$this->int_price."원\n";
        echo $str;
    }
}

// $obj_food = new Food("탕수육", 10000);
// $obj_food->fnc_print_food_price(12000);
// $obj_food->fnc_print_food_neo("고구마");
// $obj_food->fnc_print_food();


// $obj_food2 = new Food("김밥", 1000);
// Food class 맴버 변수 $int_price의 값을 12000바꾸어 주세요.

//상속 : 부모 클래스의 객체들을 자식 클레스가 상속받아 사용할 수 있다.
class KoreanFood extends Food
{
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish)
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }

    //오버라이딩 : 부모클래스에서 정의도니 매소드를 자식클래스에서 재정의
    public function fnc_print_food()
    {
        parent::fnc_print_food(); //부모객체의 함수를 호출시키는 문법
        $str ="반찬 :".$this->side_dish."\n";
        echo $str;
    }
}

$obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무" );
$obj_korean_food->fnc_print_food();
