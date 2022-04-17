<?php
    echo "<h2>인적정보 클래스</h2>";
    class Person{ //클래스 선언

        public $name; //프로퍼티
        public $nation; //프로퍼티
        public $gender; //프로퍼티
        public $birth; //프로퍼티
        public function peronnel(){ // 메소드
            echo "이름 : " . $this->name." <br>" . "국적 : " . $this->nation . "<br>" . "성별 : " . $this->gender . "<br>" . "생년 : ". $this->birth ."<br>";
        }
    }//Line 1~12 클래스 정의

    //Object
    $p = new Person();//Person이라는 클래스로부터 p라는 객체 생성

    $p->name="James"; //객체 p의 name 프로퍼티
    $p->nation="South Korea"; //객체 p의 nation 프로퍼티
    $p->gender = "Male"; //객체 p의 gender 프로퍼티
    $p->birth = 2000; //객체 p의 birth 프로퍼티
    $p->peronnel(); //객체 p의 personnel 메소드 호출
?>
<?php
echo "<h2>구의 넓이와 부피를 구하는 클래스</h2>";
	class Sphere{ //Sphere클래스 정의
        public $r; //4*3.14*r^^2에서 r의 제곱을 받아줄 변수
        public $r1;//4/3*3.14*r^^3에서 r의 세제곱을 받아줄 변수
        public $p; //파이변수
        public function area(){ //구의 넓이를 구하는 메소드
            return (4*$this->r*$this->p);
        }
        public function volume(){ //구의 부피를 구하는 메소드
            return ((4/3)*$this->r1*$this->p);
        }
	}
$s1 = new Sphere();//s1이라는 객체 생성
$s1->p=pi(); //p의 속성 값 원주율 함수를 사용했다.
$s1->r=pow(6,2);//r의 속성 값으로 pow함수로 r을 제곱하였다
$s1->r1=pow(6,3);//r의 속성 값으로 pow함수로 r을 세제곱하였다
//$s1->p=pi();
    //var_dump($s1->sqaure()); //실수형
    echo "반지름 : ".sqrt($s1->r)."<br>";
    echo "지름 : ".sqrt($s1->r)*2,"<br>";
	echo "구의 겉넓이 : ".$s1->area()/pi()."&pi;"."또는 ".round($s1->area(),2)."cm&sup2"."<br>";
    echo "구의 부피 : ".$s1->volume()/pi()."&pi;"."또는 ".round($s1->volume(),2)."cm&sup3"."<br>";
?>

