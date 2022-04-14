<?php
 echo "<h2>로그인 처리 (쿠키)</h2>";
    
    if(!isset($_COOKIE["userid"])){//cookie 값이 설정 되지 않으면 참으로 로그인이 나온다 
        echo "<a href='login.php'>로그인</a>"; //로그인이 되면 쿠키 값에 userid로 지정한 값이 생긴다.
    }
    else{//거짓이면 쿠키 값이 설정 되었으므로 로그아웃이 나온다
        echo "<a href='logout.php'>로그아웃</a>"; //로그 아웃 시 쿠키 값이 사라짐
    }

?>