<?php
 echo "<h2>로그인 처리 (쿠키)</h2>";
    
    if(!isset($_COOKIE["userid"])){
        echo "<a href='login.php'>로그인</a>";
    }
    else{
        echo "<a href='logout.php'>로그아웃</a>";
    }

?>