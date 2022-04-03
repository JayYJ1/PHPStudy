<?php
    echo" <h1>시험 점수 구하기</h1>";

    $score = 95;
    if ($score>100||$score<0)
        echo "입력 점수 오류!";
    elseif($score>=90){
        echo"시험점수 :  $score<br>";
        echo"등급 : 수<br>";
    }
    elseif($score>=80){
        echo"시험점수 :  $score<br>";
        echo"등급 : 우<br>";
    }
    elseif($score>=70){
        echo"시험점수 :  $score<br>";
        echo"등급 : 미<br>";
    }
    elseif($score>=60){
        echo"시험점수 :  $score<br>";
        echo"등급 : 양<br>";
    }
    elseif($score<60){
        echo"시험점수 :  $score<br>";
        echo"등급 : 가<br>";
    }
?>
<!--1-->

<?php 
 echo" <h1>100~200 while</h1>";
    $n=100;
    while($n<=200)
    {
        if($n%2==1)
        echo "$n ";
        $n++;
    }
?>
<!--2-->
<?php 
 echo" <h1>100~200 for</h1>";
     for($n=100; $n<=200; $n++)
     {
         if($n%2==1)
         echo "$n ";
        
     }
?>
<!--3-->
<?php 
     echo" <h1>1~100 3의 배수 10개씩 출력</h1>";
     $n=1; //정수
     $count=0; //10개 씩 세어줄 수
     while($n<=100) // n이 1~100까지 반복
     {
         if($n%3==0){ //n이 3으로 나눈 나머지가 0일때
         echo "$n "; //n을 출력
         $count++; //3의 배수 1개당 count 1씩 증가
         if($count%10==0) //count가 10으로 나눈 나머지가 0일때, 즉 10의 배수일때
         echo"<br>"; //줄바꿈
         }       
         $n++;//n은 1~100까지 세어야 하므로 계속 증가
     }
?>
<!--4-->
<?php 
      echo" <h1>300~350 5의 배수가 아닌 수를 10개씩 출력</h1>";
      $n=300; //정수
      $count=0; //10개 씩 세어줄 수
      while($n<=350) // n이 300~350까지 반복
      {
          if($n%5!=0){ //n이 5으로 나눈 나머지가 0이 아닐때
          echo "$n "; //n을 출력
          $count++; //5의 배수가 아닌수 1개당 count 1씩 증가
          if($count%10==0) //count가 10으로 나눈 나머지가 0일때, 즉 10의 배수일때
          echo"<br>"; //줄바꿈
          }       
          $n++;//n은 1~100까지 세어야 하므로 계속 증가
      }
?>
<!--5-->
<?php 
    echo" <h1>10~20의 길이를 인치, 센티미터 환산 while 출력</h1>";
        echo "-------------------------------<br>";
        echo "인치 센티미터<br>";
        echo "-------------------------------<br>";
    
        $inch = 10;
        while ($inch<=20) {
            $cm = $inch * 2.54;
            echo $inch." &nbsp; ".$cm."<br>";
    
            $inch += 2;
        }
        echo "--------------------------------";    
    
?>
<!--6-->
<?php 
echo" <h1>10~20의 길이를 인치, 센티미터 환산 for 출력</h1>";
        echo "-------------------------------<br>";
        echo "인치 센티미터<br>";
        echo "-------------------------------<br>";
    
        for ($inch=10; $inch<=20; $inch+=2) {
            $cm = $inch * 2.54;
            echo $inch." &nbsp; ".$cm."<br>";
        }
        echo "--------------------------------";    
    
?>
<!--7-->
<?php 
    echo" <h1>10~20달러 2증가씩 원화,유로 환산표 출력</h1>";
        echo "-------------------------------<br>";
        echo "달러  원화  유로<br>";
        echo "-------------------------------<br>";
    
        for($won=10; $won<=20; $won+= 2) {
            $dollar = $won * 1180.60;
            $euro = $won * 1350.30;
            echo $won." &nbsp; ".$dollar." &nbsp; ".$euro."<br>";
        }
        echo "--------------------------------";    
    
?>
<!--8-->
<?php 
  echo" <h1>10~20달러 2증가씩 원화,유로 환산표-테이블 출력</h1>";
        $string = "";
        $string .= "<table border='1'>";
        $string .= "<tr><th width='100'>달러</th><th width='100'>원화</th><th width='100'>유로</th></tr>";
    
        for($won=10; $won<=20; $won+= 2) {
            $dollar = $won * 1180.60;
            $euro = $won * 1350.30;
            $string .= "<tr><td>$won</td><td>$dollar</td><td>$euro</td>";
        }
        $string .= "</table>";
        
        echo $string;
    
?>
<!--9-->
<?php 
  echo" <h1>사각형 별 출력</h1>";
        for ($a=1; $a<=5; $a++) {
            for ($b=1; $b<=10; $b++) {
                echo "* ";
            }
            echo "<br>";
        }
    
?>
<!--10-->
<?php
echo" <h1>직각삼각형 별 출력</h1>";
    for ($a=1; $a<=10; $a++) {
        for ($b=1; $b<=$a; $b++) {
            echo "* ";
        }
        echo "<br>";
    }
?>
<!--11-->