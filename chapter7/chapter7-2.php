<?php
    echo "<h2>원기둥의 부피 구하기</h2>";

    class Cylinder{ //클래스 선언
        public $radius; //프로퍼티 
        public $height; 

         public function __construct($radius, $height) //생성자 함수
         {
            $this->radius=$radius;
            $this->height=$height;
         }
         public function volume(){ //메소드
             $volume=$this->radius*$this->radius*$this->height;// 원기둥의 넓이를 구한 값을 반환한다
             return $volume;
         }
    }
    
    $cyl = new Cylinder(4,8);//new 연산자를 이용해 인스턴스를 초기화할때 사용될 인자를 함께 명시함
    //4 8은 각각 r,h
    echo "원기둥의 부피 : " . $cyl->volume()."&pi;cm&sup3;";
?>
