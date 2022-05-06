<?php

    $servername = "";  //서버의 IP주소나 접속 서버명
    $username = ""; //MySQL 사용자 계정명
    $password = ""; //MySQL 사용자 비밀번호
    $dbname = ""; //사용할 데이터 베이스 명

    //My SQL연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "insert into friend (name, tel, address) values
           ('홍길동','01012345678','서울특별시 중구 청계천로 123');";
    
    $sql .= "insert into friend (name, tel, address) values
           ('윤채린','01030904785','서울특별시 종로구 자하문로30길 123');";
    
    $sql .= "insert into friend (name, tel, address) values
           ('강선호','01038978950','경기도 용인시 수지구 정평로 123');";

    $sql .= "insert into friend (name, tel, address) values
           ('김수진','01043889485','서울특별시 동대문구 보문로 123');";

    $sql .= "insert into friend (name, tel, address) values
           ('장서연','01043889485','경기도 용인시 처인구 원천로 123');";

    $sql .= "insert into friend (name, tel, address) values
           ('박성찬','01059856767','대전광역시 동구 중교로 123')";
    
    
    //execute mutiple SQL
    $result = mysqli_multi_query($conn, $sql);
    
    if($result)
        echo "데이터 삽입 완료<br>";
    else
        echo "데이터 삽입 오류". mysqli_error($conn)."<br>";
    //return object db connection
    mysqli_close($conn);
?>