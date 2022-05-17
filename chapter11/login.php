<?php
 $id = $_POST["id"];
 $pass = $_POST["pass"]; //로그인 폼에서 받은 유저 정보를 받아옴

 $con = mysqli_connect("아이피","사용자","비밀번호","데이터베이스"); //db연결
 $sql = "select * from members where id='$id'"; //질의문, 테이블에서 아이디를 검색하여  result변수에 저장한다.
 $result = mysqli_query($con, $sql); //db연결 및 질의 결과

 $num_match = mysqli_num_rows($result);//result에 있는 레코드 수를 카운트

 if(!$num_match){ //아이디가 레코드에 없을때
     //아이디가 맞는지 체크, 레코드에 등록되어 있는 아이디인지 체크한다.
     echo"<script>
            window.alert('등록되지 않은 아이디입니다.')
            history.go(-1)
        </script>";
 }else{//아이디가 레코드에 있을때
     $row = mysqli_fetch_assoc($result);//mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수
     $db_pass = $row["pass"];//레코드에 pass에 해당하는 요소를 저장, 이때 유저의 아이디 비밀번호 모두를 알게 되는 듯함

     mysqli_close($con); //디비 연결 종료

     if($pass != $db_pass){//테이블에서 찾은 레코드의 매치된 아이디의 비밀번호를 맞는지 체크한다.
         echo "<script>
                window.alert('비밀번호가 틀립니다.')    
                history.go(-1)
         </script>";
        exit;
     }else{
         session_start();
         $_SESSION["userid"] = $row["id"];
         $_SESSION["username"] = $row["name"]; //db에서 가져온 아이디와 이름을 각각의 세션변수에 저장하였다.

         echo "<script>location.herf='index.php'</script>";
     }
 }
?>