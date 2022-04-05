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