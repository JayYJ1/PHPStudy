<h2>틀린 php 변수명 고르기</h2>
<?php
echo "가. \$myVar &nbsp;&nbsp; 나. \$_area &nbsp;&nbsp; <font size=6pt color='red'>&#10003</font>다. \$2value &nbsp;&nbsp; 라. \$my_name ";
?>
<h2>계산하기</h2>
<?php
 $a = 3;
 $b = 5;
 $a += 2;
 $b = $a * 3;
 $c = $a + $b;
 $c++;
 $c %= $a;
 echo"$a, $b, $c";
//82
?>

<h2>삼각형 넓이 구하기</h2>
<?php
$width = 5;
$height = 10;
$area = $width * $height / 2;
echo"너비" .$width."<br>";
echo"높이" .$height."<br>";
echo"넓이" .$area."<br>";
//83
?>

<h2>인치를 센티미터로</h2> 
<?php
$inch = 10;
$cm = $inch * 2.54;
echo"인치 : " . $inch . "inch<br>";
echo"센티미터 : " . $cm . "cm<br>";
//83
?>

<h2>원 넓이 구하기</h2> 
<?php
$r = 20;
$pi = 3.14;
$s = pow($r, 2) * $pi;
echo "원의 넓이 : " . $s . "cm^2<br>";
//84
?>


<h2>입장료 계산하기</h2>
<?php
$child = 5000;
$num1 = 3; // 어린이 수
$adult = 8000;
$num2 = 2; //어른 수
$total = $child * $num1 + $adult * $num2; //전체입장료
echo "소인 입장료 : " . $child."원</br>";
echo "소인 인원 : " . $num1."명</br>";
echo "대인 입장료 : " . $child."원</br>";
echo "대인 인원 : " . $num2."명</br>";
echo " - 전체 입장료 : " . $total."원</br>";
//85
?>


<h2>결제금액 계산하기</h2>  
<?php
$book_price = 10000;
$sale_per = 10;
$delivery_fee = 2500;
$total = $book_price - ($book_price * $sale_per / 100) + $delivery_fee;
echo "책값 : " . $book_price . "원</br>";
echo "할인율 : " . $sale_per . "%</br>";
echo "배송료 : " . $delivery_fee . "원</br>";
echo " - 결제금액 : " . $total . "원</br>";
// 85
?>