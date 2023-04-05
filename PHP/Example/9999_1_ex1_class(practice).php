<?php
class People
{
    private $setname;
    private $peopleprint;

    protected $setid;
    protected $studentprint;

    public function __construct($param_setname, $param_peopleprint)
    {
        $this->setname = $param_setname;
        $this->peopleprint = $param_peopleprint;
    }
    public function fnc_print_people()
    {
        $str = $this->setname." : ".$this->peopleprint."\n";
        echo $str;
    }
    public function fnc_print_people1()
    {
        $str = $this->setid." : ".$this->studentprint."\n";
        echo $str;
    }

}
    $obj_people = new People("herry","백인");
    $obj_people->fnc_print_people();



class Student extends People
{
    protected $studennom;
    public function __construct($param_setid, $param_studentprint, $param_studennom)
    {
        $this->setid = $param_setid;
        $this->studentprint = $param_studentprint;
        $this->studennom = $param_studennom;
    }

    public function fnc_print_people()
    {
        parent::fnc_print_people1();
        $str = "학번 :".$this->studennom."\n";
        echo $str;
        
    }
}
    $obj_Student = new Student("Herryporter","학생","N00001");
    $obj_Student->fnc_print_people();


// class People
// {
//     protected $name;

//     public function set_name( $param_name)
//     {
//         $this->name = $param_name;
//     }

//     public function people_print()
//     {
//         echo "이름 : $this->name \n";
//     }
// }

// class Student extends People
// {
//     protected $id;

//     function set_id($param_id)
//     {
//         $this->id = $param_id;
//     }

//     function student_print()
//     {
//         parent::people_print();
//         echo "아이디 : $this->id \n";
//     }
// }

// $obj_std = new Student();
// $obj_std->set_name("herry");
// $obj_std->set_id(123456);
// $obj_std->student_print();