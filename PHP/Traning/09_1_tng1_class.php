<?php

Class Car
{
    /*
    $car_name : 차이름을 저장 하는 멤버변수
    $cal_color: 차 색깔을 저장한는 멤버변수

    
    method 명 : car_make
    parameter : 
                    string $param_name
                    string $param_color
    기능 : 멤버변수에 값을 셋팅    

    method 명 : car_out
    parameter : 없음
    기능 : 자동차 이름과 색깔을 출력
        (형식 : $car_color."색".$car_name)
    */

//     public $car_name;
//     public $car_color;
//     public function car_make($param_color,$param_name)
//     {
//         $this->car_color = $param_color;
//         $this->car_name = $param_name;
//     }

//     public function car_out()
//     {
//         return "형식 : ".$this->car_color."색 ".$this->car_name;
//     }

    
// }   
// $obj_car = new Car;
// $obj_car->car_make("RubyBlack","Mercedes-GT63AMG");
// echo $obj_car->car_out();


    public function car_make($p_color, $p_name)
    {
        $reuslt_name = $p_name;
        $result_color = $p_color;
        echo $result_color."색".$reuslt_name;
    }

}
$obj_car = new Car;
$obj_car->car_make("Black","K5");



?>