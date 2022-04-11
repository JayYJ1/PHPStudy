<?php
    echo"<h2>수학 관련 함수</h2>";
    echo abs(-4)."<br>"; //절대 값을 구하는 함수, 음수 사용
    echo abs(5)."<br>"; //절대 값을 구하는 함수, 양수 사용
    echo round(3.5)."<br>"; //반올림 값을 구하는 함수 .5이상 이면 올림
    echo round(3.4)."<br>"; //반올림 값을 구하는 함수 .4이하면 내림
    echo ceil(11.2)."<br>"; // 소수점 자리를 올려주는 함수
    echo ceil(11.5)."<br>"; // 소수점 자리를 올려주는 함수
    echo floor(7.8)."<br>"; // 소수점 자리를 내려주는 함수
    echo floor(7.3)."<br>"; // 소수점 자리를 내려주는 함수
    echo sqrt(81)."<br>"; //제곱근을 구해주는 함수
    echo sqrt(16)."<br>"; //제곱근을 구해주는 함수
    echo pow(2,4)."<br>"; //pow(a,b)일때 a의 b승 만큼 계산해준다. 2^4=16
    echo pow(3,4)."<br>"; //pow(a,b)일때 a의 b승 만큼 계산해준다. 3^4=81
    echo rand(5,100)."<br>"; //rand(5,100) 5에서 100사이의 수를 랜덤으로 하나 발생시킴
    echo dechex(111111)."<br>"; //10진수 수를 16진수로 변환 111111(10)->1b207(16)
    echo hexdec('ff3')."<br>";  //16진수 수를 10진수로 변환 ff3(16)->4083(10)
?>
<?php
    echo"<h2>문자열 관련 함수</h2>";
    $h1="<h1>특정 문자를 html특수 문자로 변환한다.</h1>";
    echo $h1; //html 태그가 적용된 상태로 출력
    $h2=htmlspecialchars($h1);//특정 문자를 html특수 문자로 변환
    echo $h2."<br>";
    $str = "010-1111-2222";//특정 문자를 기준으로 문자열을 쪼개 배열로 저장한다.
    $arr = explode("-",$str); //010, 1111, 2222로 나뉘어 배열로 저장된다.
    //var_dump($arr);//array(3) { [0]=> string(3) "010" [1]=> string(4) "1111" [2]=> string(4) "2222" }
    echo $arr[0].$arr[1].$arr[2]."<br>"; //01011112222로 -가 사라졌다.
    $arr1=array("010","1234","5678"); //arr1[0]=010,arr1[1]=1234,arr1[2]=5678저장
    $join=join("-",$arr1);//배열의 각 요소들을 "-"하나의 문자열로 연결
    echo $join."<br>";//010-1234-5678
    $name="김개발";
    $age=234;
    $height=140.12;
    $num=10;
    printf("내 이름은 %s 나이는 %d, 키는 %.2f, 좋아하는 알파벳은 %x",$name,$age,$height,$num);
    //c언어의 printf와 동일
    echo"<br>";
    $date1="2022-04-11";
    $date2=str_replace("-","/",$date1); //str_replace 특정한 문자열을 특정 문자열로 변환해준다.
    echo "변환 전 =>".$date1."<br>";
    echo "변환 후 =>".$date2."<br>";
    $str1="PHP Studying";
    echo strtoupper($str1)."<br>"; //영어 알파벳을 대문자로 만들어줌
    echo strtolower($str1)."<br>"; // 영어 알파벳을 소문자로 만들어줌

    $today="2022-04-11 11:11:11";
    $year=substr($today,0,4); //substr특정 문자열을 분리하는 함수, 인덱스 0부터 4개를 반환
    $month=substr($today,5,2);//인덱스 5부터 2개를 반환
    $day=substr($today,8,2);//인덱스 8부터 2개를 반환
    $time=substr($today,11);//인덱스 11부터 마지막까지 반환
    echo $year."년<br>";
    echo $month."월<br>";
    echo $day."일<br>";
    echo $time."<br>";

    $word1="Hello there~";
    $word2="안녕하세요~";
    echo strlen($word1)."<br>";//strlen() 문자열 길이를 int형으로 반환해준다. Hello=5 공백=1, there=5, ~=1 총 12개
    echo strlen($word2)."<br>";//한글은 utf-8문자셋에서 1글자당 3바이트로 구성된다. 그래서 안녕하세요=15,~=1 총 16개  
?>
<?php
    echo"<h2>배열 관련 함수</h2>";
    $animal=array("사자","기린","코끼리","하마","호랑이","낙타","닭","너구리");
    echo "요소의 개수 : ".count($animal)."<br>";//count()배열이나 객체의 개수를 구할때 사용한다.
    print_r($animal);
    echo "<br>";
    array_push($animal,"펭귄");
    print_r($animal);
    echo "<br>";
    array_push($animal,"코뿔소");
    print_r($animal);
    echo "<br>";
    array_push($animal,"사자");
    print_r($animal);
    echo "<br>";
    echo "배열의 펭귄, 코뿔소, 사자를 추가했다. 뒤부터 추가된다.<br>";
    array_pop($animal);
    print_r($animal);
    echo "<br>";
    array_pop($animal);
    print_r($animal);
    echo "<br>";
    array_pop($animal);
    print_r($animal);
    echo "<br>배열의 맨 뒤 요소인 사자, 코뿔소, 펭귄을 삭제했다.<br>";
    echo sort($animal); //sort() 배열을 오름차순으로 정렬
    print_r($animal);
    echo "<br>";
    echo "배열을 오름차순으로 정렬하였다.<br>";
    echo rsort($animal); //rsort() 배열을 내림차순으로 정렬
    print_r($animal);
    echo "<br>";
    echo "배열을 내림차순으로 정렬하였다.<br>";
    
    echo "<h3>배열 합계와 평균 구하기</h3>";
    $score= array(93,82,43,78,65,51);
    print_r($score);
    echo"<br>";
    $sum = array_sum($score); //array_sum 배열 요소의 합계를 구한다.
    $avg = $sum/count($score);
    echo "배열 요소의 합계 : ".$sum."<br>";
    echo "배열 요소의 평균 : ".number_format($avg,2)."<br>";
?>