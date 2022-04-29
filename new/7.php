<?php
    //패턴 대입
    $patten = '/^i$/';// 패턴입력

    $str = 'i';//검사할 텍스트

    if(preg_match($patten, $str, $matches)){ //패턴, 검사할 텍스트, 반환할 패턴 일치 결과를 받을 함수
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다."; 
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
    }
?>