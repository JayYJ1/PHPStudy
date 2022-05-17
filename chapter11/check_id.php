<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .close {margin:20px 0 0 120px; cursor:pointer;}
    </style>
</head>
<body>
    <h3>아이디 중복체크</h3>
    <div>
        <?php 
            $id = $_GET['id'];

            if(!$id){
                echo("아이디를 입력하세요.");
            }else{
                $con = mysqli_connect(); //db연결
                $sql = "select * from members where id='$id'"; //질의문
                $result = mysqli_query($con, $sql); //db연결 및 질의 결과

                $num_record = mysqli_num_rows($result); //  mysqli_num_rows 함수는 리절트 셋(result set)의 총 레코드 수를 반환
                 //  echo $num_record."<br>"; 테이블 안에 중복된 레코드를 뽑아오는 것으로 예상됨.
                if($num_record) {
                    echo $id. "아이디는 중복됩니다.<br>";
                    echo "다른 아이디를 사용해 주세요!.<br>";
                }else{
                    echo $id."아이디는 사용 가능합니다.<br>";
                }
                mysqli_close($con); //db연결 종료
            }

        ?>
    </div>
    <div class="close">
            <button onclick="javascript:self.close()">창닫기</button>
    </div>
</body>
</html>