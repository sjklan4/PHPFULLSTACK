<?php

//------------------------- class -----------------------------
class Food
{
    // 접근 제어 지시자
    // public     : 어디서든(class밖에서도) 접근이 가능
    // private    : 해당 class내에서만 접근 가능
    // protected  : class 자기 자신과 상속 class 내에서만 접근 가능

    //맴버 변수
    private $str_name;
    private $int_price;


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

    public function fnc_print_food()
    {
        $str = $this->str_name." : ".$this->int_price."원\n";
        echo $str;
    }
}

$obj_food = new Food("탕수육", 10000);
$obj_food->fnc_print_food_price(12000);
$obj_food->fnc_print_food();


$obj_food2 = new Food("김밥", 1000);
// Food class 맴버 변수 $int_price의 값을 12000바꾸어 주세요.

