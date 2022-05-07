<?php

    $servername = "";  //서버의 IP주소나 접속 서버명
    $username = ""; //MySQL 사용자 계정명
    $password = ""; //MySQL 사용자 비밀번호
    $dbname = ""; //사용할 데이터 베이스 명

    //My SQL연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
$sql = "select * from friend order by name;";
    
    //execute mutiple SQL
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    echo "----------------------------<br>";
    echo "이름 전화번호<br>";
    echo "----------------------------<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]. " " . $row["tel"]."<br>";
    }
    echo "----------------------------<br>";

    //return object db connection
    mysqli_close($conn);
?>