<?php

// Class : 비슷한 특성을 가지고 있는 함수들이 모여있는 집합.(비슷한 구조, 기능 들의 모임)

class student
{
    // 클레스 멤버 변수
    public $std_name; // 어디서든 접근가능(사용될) 수 있음
    private $std_id;  // Student Class 내에서만 접근 가능 - 완전히 한 클레스 안에서만 사용 가능
    protected $std_age; // 상속 Class 내에서만 접근 가능  
    // 접근제어 지시자 : public, private, protected


    //Class 안에 있는 function을 method 라고 부른다.
    public function print_student($param_std_name, $param_std_age)
    {
        $result_name = "이름 : ". $param_std_name;
        $result_age = "나이 : ".$param_std_age."세";
        echo $result_name;
        echo "\n";
        echo $result_age;

    }
    //private 객체를 사용할 수 있는 방법 : set,get을 나눈 이유 - 함수로 되어 있기 때문에 각 함수마다 한가지 일만 하도록 해야 되기 때문에
    public function set_std_id($param_id)
    {
        //this 포인터 : class 자기 자신을 가르키고 있음
        $this->std_id = $param_id;
    }

    public function get_std_id()
    {
        return $this->std_id;
    }


}

//class를 선언
$obj_student = new Student; //클래스를 불러온다.
// class의 method를 호출
$obj_student->print_student("홍길동",27);

// class의 멤버변수 사용방법
$obj_student->std_name = "갑돌이";
echo $obj_student->std_name,"\n";

//지시자가 private이기 때문에 접근 권한이 없다.
// $obj_student->$std_id = "갑돌이 id";

// getter, setter로 private 객체에 접근
$obj_student->set_std_id("갑순이id");
echo $obj_student->get_std_id();





?>