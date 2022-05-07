<?php

    $servername = "";  //서버의 IP주소나 접속 서버명
    $username = ""; //MySQL 사용자 계정명
    $password = ""; //MySQL 사용자 비밀번호
    $dbname = ""; //사용할 데이터 베이스 명

    //My SQL연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "delete from friend where name='박성찬';";
    $result = mysqli_query($conn, $sql);

    if($result)
        echo "수정 완료";
    else
        echo "수정 오류" . mysqli_error($conn);

    //return object db connection
    mysqli_close($conn);
?>