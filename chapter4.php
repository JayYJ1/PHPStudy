<?php
error_reporting(0); //한시적으로 error메시지 모두 무시 
echo"<html>
<head>
    <h2>함수를 사용하여 삼각형 넓이 구하기</h2>
</head>
    <body>
        <form method='POST' action='chapter4.php'>
        길이: <input type='number' name='length' value='0'/>
        높이: <input type='number' name='height' value='0'/>
            <input type='submit' name='submit'/>
            <input type='reset'/>
        </form>
    </body>
</html>";
//var_dump($length);
//if(empty($length) || empty($height)){
//var_dump($_POST['length']);
$leng=(int)$_POST['length'];
$hgt=(int)$_POST['height'];
    function Triangle($length, $height){
        $size = $length * $height / 2;
        return $size;
    }
    $size = Triangle($leng, $hgt);
    number_format($size);
    echo"삼각형의 너비 : " . $leng . "cm<br>";
    echo"삼각형의 높이 : " . $hgt . "cm<br>";
    echo "삼각형의 넓이는 " . number_format($size) . "cm<sup>2</sup> 입니다.<br>";
//}
?>
<!-- 1번 -->

<?php
   echo"<html>
<head>
    <h2>N1~N2정수 합계</h2>
</head>
    <body>
        <form method='POST' action='chapter4.php'>
        시작수: <input type='text' name='number1' value='0'/>
        끝수: <input type='text' name='number2' value='0'/>
            <input type='submit' name='submit'/>
            <input type='reset'/>
        </form>
    </body>
</html>";
//var_dump($_POST['number1']);
//echo"<br>";
$number1=$_POST['number1'];
//var_dump($number1);
//echo"<br>";
$number2=(int)$_POST['number2'];
//var_dump($number2);
//echo"<br>";
    function Sum($num1, $num2){
        $rs=0;
        for($i=$num1; $i<=$num2; $i++){
            $rs+=$i;
        }
        return $rs;
    }
    $result=Sum($number1,$number2);
    echo $number1 . "부터" . $number2 . "까지의 합 : " . number_format($result);
?>
<!-- 2번 -->
<?php
echo"<html>
 <head>
     <h2>N1~N2 정수 중 N의 배수 합계</h2>
 </head>
     <body>
         <form method='POST' action='chapter4.php'>
         첫수: <input type='number' name='number3' />
         끝수: <input type='number' name='number4' />
         배수: <input type='number' name='number5' />
         <input type='submit' name='submit'/>
         </form>
     </body>
 </html>";
 
 $num3=(int)$_POST['number3']; 
 $num4=(int)$_POST['number4'];
 $num5=(int)$_POST['number5'];
 
     function Baesu($num3, $num4, $num5){
         $rs1=0;
         if($num3>0 || $num4>0 || $num5>0){ //Division by zero error while using modulus
         for($num3; $num3<=$num4; $num3++){
             if($num3 % $num5==0){
                $rs1+=$num3;
             }
         }
         return $rs1;
     }
    }
     $result1=Baesu($num3,$num4,$num5);
   //  var_dump($result1);
echo $num3."~".$num4."정수 중".$num5."의 배수 합계 : ".$result1;
?>
<?php
        echo"<html>
        <head>
            <h2>수목원 입장료 구하기</h2>
        </head>
            <body>
                <form method='POST' action='chapter4.php'>
                 구분:  <select name='time'>
                <option value='일반'>일반</option>
                <option value='할인대상'>할인대상</option>
              </select>
              개인/단체 :  <select name='pg'>
              <option value='개인'>개인</option>
              <option value='단체'>단체</option>
            </select>
              나이: <input type='number' name='age' value='0' />
                <input type='submit' name='submit'/>
                </form>
            </body>
        </html>";

     $time=$_POST['time'];
     $pg=$_POST['pg'];
     $age=$_POST['age'];
    function paytable1($time, $age, $pg){
        $fee=0;
        if($time=="일반"){//일반 손님
            if($pg=="개인")//일반손님-개인
            {
                if($age<8){
                    $fee=6000;
                }
                elseif($age>7 and $age<=18){
                    $fee=7000;
                }
                else{
                    $fee=9500;
                }
            }
            else{ //일반손님-단체
                if($age<8){
                    $fee=5000;
                }
                elseif($age>7 and $age<=18){
                    $fee=6000;
                }
                else{
                    $fee=8500;
                }
            }
        }
        else{ //할인대상
            if($pg=="개인")//할인대상-개인
            {
                if($age<8){
                    $fee=5000;
                }
                elseif($age>7 and $age<=18){
                    $fee=6000;
                }
                else{
                    $fee=8500;
                }
            }
            else{//할인대상-단체
                if($age<8){
                    $fee=4000;
                }
                elseif($age>7 and $age<=18){
                    $fee=5000;
                }
                else{
                    $fee=7500;
                }
            }
        }
        return $fee;
    }
    $result=paytable1($time,$age,$pg);
    echo "구분 : " . $time ."<br>"."개인/단체: ".$pg. "<br>" ."나이 : " . $age ."세"."<br>" ."요금 : ". number_format($result) ."원<br>";
?>
<?php
    echo"<h2>1차원 배열 출력</h2>";
    $bae = array(1,1,2,3,5,8,13,21,34,55,89);
    $c=count($bae);
    for($i=0; $i<$c; $i++){
        echo $i+1,"번 = ".$bae[$i]."<br>";
    }
?>