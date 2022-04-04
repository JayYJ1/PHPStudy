<?php
    echo"<html>
    <head>
        <h2>점수 입력받아 등급 판별</h2>
    </head>
        <body>
            <form method='GET' action='chapter3.php'>
            점수: <input type='text' name='score'/>
                <input type='submit' name='submit'/>
                <input type='reset'/>
            </form>
        </body>
    </html>";
   $score=$_GET["score"];
    if ($score>100||$score<0)
        echo '입력 점수 오류!';
    elseif($score>=90){
        echo'시험점수 :  $score<br>';
        echo'등급 : 수<br>';
    }
    elseif($score>=80){
        echo'시험점수 :  $score<br>';
        echo'등급 : 우<br>';
    }
    elseif($score>=70){
        echo'시험점수 :  $score<br>';
        echo'등급 : 미<br>';
    }
    elseif($score>=60){
        echo'시험점수 :  $score<br>';
        echo'등급 : 양<br>';
    }
    else{
        echo'시험점수 :  $score<br>';
        echo'등급 : 가<br>';
    }
?>
<!--1번-->

<?php 
    echo"<h2>100~200 while문 이용하여 홀수 출력</h2>";
    $num=100;
    $count=0;
    while($num<=200){ //num을 200까지 반복
        if($num%2==1){ //num을 2로 나눈 나머지가 1일때 실행
            echo"$num ";
            $count++; //count는 조건문이 참일때 수를 증가
        }
        if($count%10==0){//count를 10으로 나눈 나머지가 0일때 실행
             echo"<br>";  
        }
        $num++; //num의 범위는 100~200이므로 if문 바깥에서 증가
    }
?>
<!--2번-->

<?php
    echo"<h2>100~200 for문 이용하여 홀수 출력</h2>";
    $count=0;
    for($num=100; $num<=200; $num++){ //num을 200까지 반복
        if($num%2==1){ //num을 2로 나눈 나머지가 1일때 실행
            echo"$num ";
            $count++; //count는 조건문이 참일때 수를 증가
        }
        if($count%10==0){//count를 10으로 나눈 나머지가 0일때 실행
             echo"<br>";  
        }
    }//for문을 쓸 경우 loop문안에 변수 선언 및 증감식 가능
?>
<!--3번-->

<?php
    echo"<h2>1~100 for문 이용하여 3의배수 출력</h2>";
    $num=1;
    $count=0;
    while($num<=100){ //num을 100까지 반복
        if($num%3==0){ //num을 3로 나눈 나머지가 0일때 실행
            echo"$num ";
            $count++; //count는 조건문이 참일때 수를 증가
        if($count%10==0)//count를 10으로 나눈 나머지가 0일때 실행
             echo"<br>";  
        }
        $num++; //num의 범위는 100~200이므로 if문 바깥에서 증가
    }
?>
<!--4번-->

<?php
    echo"<h2>300~350 5의 배수 아닌 수 1줄에 10개씩 출력</h2>";
    $num=300;
    $count=0;
    while($num<=350){ //num을 100까지 반복
        if($num%5!=0){ //num을 3로 나눈 나머지가 0일때 실행
            echo"$num ";
            $count++; //count는 조건문이 참일때 수를 증가
        if($count%10==0)//count를 10으로 나눈 나머지가 0일때 실행
             echo"<br>";  
        }
        $num++; //num의 범위는 100~200이므로 if문 바깥에서 증가
    }
?>
<!--5번-->

<?php
echo"<h2>10~20, 2씩 증가하는 inch, centimeter표 while문 </h2>";
    $inch=10;
echo"----------------<br>";
echo"&nbsp;인치&nbsp;센티미터<br>";
echo"----------------<br>";
    while($inch<=20){
        echo"&nbsp;&nbsp;$inch | ";
        $centi=$inch * 2.54;
        echo"&nbsp;$centi<br>";
        $inch+=2;
    }
    echo"----------------<br>";
?>
<!--6번-->

<?php
echo"<h2>10~20, 2씩 증가하는 inch, centimeter표 for문 </h2>";
echo"----------------<br>";
echo"&nbsp;인치&nbsp;센티미터<br>";
echo"----------------<br>";
    for($inch=10;$inch<=20;$inch+=2){
        echo"&nbsp;&nbsp;$inch | ";
        $centi=$inch * 2.54;
        echo"&nbsp;$centi<br>";
    }
    echo"----------------<br>";
?>
<!--7번-->

<?php
    echo"<h2>10~20달라, 2씩 증가하는 달러, 원화 유로 환율표 for문 </h2>";
    echo"----------------------------<br>";
    echo"달라&nbsp;원화&nbsp;유로<br>";
    echo"----------------------------<br>";
        for($d=10;$d<=20;$d+=2){
            echo"&nbsp;&nbsp;$d ";
            $w=$d * 1180.60;
            echo"&nbsp;$w ";
            $u=$d * 1350.30;
            echo"&nbsp;$u<br>";
        }
        echo"----------------------------<br>";
?>
<!--8번-->

<?php
    echo"<h2>10~20달라, 2씩 증가하는 달러, 원화 유로 환율표 for문, table태그 </h2>";   
    echo"<table border='1' >
        <tr>
            <td width='100' align='center'>달러</td>
            <td width='100' align='center'>원화</td>
            <td width='100' align='center'>유로</td>
        </tr>";
    for($d=10;$d<=20;$d+=2){
        $w=$d * 1180.60;
        $u=$d * 1350.30;
        echo"<tr>
        <td align='center'>$d</td>
        <td align='center'>$w</td>
        <td align='center'>$u</td>
        </tr>";
    }  
    echo"</table>";
?>
<!--9번-->

<?php
    echo"<h1>사각형 별찍기</h1>";
    for($i=0; $i<5; $i++){
           for($j=0;$j<10; $j++){
            echo"★";
        }
        echo"<br>";
       }
?>
<!--10번-->

<?php
    echo"<h1>삼각형 별찍기</h1>";
    for($i=0; $i<10; $i++){
        for($j=0;$j<=$i; $j++){
         echo"★";
     }
     echo"<br>";
    }
    //i=0이고 j=0일때 별, j=1일때 개행
    //i=1이고 j=0,1일때 별 j =2일때 개행
    // ...
    //i=5이고 j=0,1,2,3,4,5 일때 별, j= 6일때 개행
?>
<!--11번-->
