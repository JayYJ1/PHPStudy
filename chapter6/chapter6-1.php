<?php
    echo "<h2>쿠키 설정</h2>";
    //24*24*60 = 1일
    setcookie("username","가나다",time()+24*24*60*30);
    //setcookie(string name, string value, int expire) 
    //쿠기 설정이 성공하면 true, 실패 시 false
    //name은 쿠키명, value는 쿠키명에 설정되는 쿠키 값, expire은 만료 일시 현재는 30일로 설정해놓음
    echo "쿠키 설정 완료";
?>