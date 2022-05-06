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
    
    //create friend table
    $sql = "create table friend(num int not null auto_increment,
            name char(10) not null,
            tel char(15) not null,
            address char(80),
            primary key(num)  )";
    
    //SQL success return True or False if SQl select, return obejct
    $result = mysqli_query($conn, $sql);
    
    if($result)
        echo "friend table 생성 완료<br>";
    else
        echo "create table 실패". mysqli_error($conn)."<br>";
    //return object db connection
    mysqli_close($conn);
?>