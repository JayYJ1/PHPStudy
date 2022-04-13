<?php
    if(isset($_COOKIE["username"])){  //isset()은 변수의 값이 존재하는지 확인하는 함수 참일 시 true, 거짓일 시 false를 반환
        //$_COOKIE["username"]은 쿠키의 값을 의미한다. // $_COOKIE는 쿠키에 사용되는 전역변수
        //6-1에서처럼 username 쿠키를 설정하면 $_COOKIE["username"]은 '가나다' 값을 갖게 된다.
        echo $_COOKIE["username"]. "님 반갑습니다.";
    }
    else{
        echo "username 쿠키가 존재 하지 않습니다.";
    }
?>