<?php

    $servername = "";  //서버의 IP주소나 접속 서버명
    $username = ""; //MySQL 사용자 계정명
    $password = ""; //MySQL 사용자 비밀번호
    $dbname = ""; //사용할 데이터 베이스 명

    //My SQL연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    //연결 체크하기
    if(!$conn){
        die("연결 오류 : " . mysqli_connect_error());//MySQL 접속 오류 메시지를 출력한다.
    }

    echo "MySQL에 성공적으로 연결되었습니다.!";

?>