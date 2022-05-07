<?php

    $servername = "";  //서버의 IP주소나 접속 서버명
    $username = ""; //MySQL 사용자 계정명
    $password = ""; //MySQL 사용자 비밀번호
    $dbname = ""; //사용할 데이터 베이스 명

    //My SQL연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
$sql = "select name, tel from friend where name='윤채린';";
    
    //execute mutiple SQL
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    echo $row["name"]."의 전화번호 : ".$row["tel"]."<br>";

    //return object db connection
    mysqli_close($conn);
?>