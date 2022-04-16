<?php

    class Person{

        public $name;
        public $nation;
        public $gender;
        public $birth;
        public function peronnel(){
            echo "이름 : " . $this->name." <br>" . "국적 : " . $this->nation . "<br>" . "성별 : " . $this->gender . "<br>" . "생년 : ". $this->birth ."<br>";
        }
    }

    //Object
    $p = new Person();

    $p->name="James";
    $p->nation="South Korea";
    $p->gender = "Male";
    $p->birth = 2000;
    $p->peronnel();

?>