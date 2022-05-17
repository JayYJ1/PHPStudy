<?php
    session_start();
    if (isset($_SESSION["userid"]))
        $userid = $_SESSION["userid"];
    else
        $userid = "";
    
    if (isset($_SESSION["username"]))
        $username = $_SESSION["username"];
    else
        $username = "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>인덱스</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h3 class="logo">
            <a href="index.php">메인페이지</a>
        </h3>
        <div class="top">
        <?php
            if(!$userid){
                echo "<span><a href='form.php'>회원가입</a></span>
                      <span>|</span>
                      <span><a href='login_form.php'>로그인</span>";
            }else{
                $logged = $username."(".$userid.")";
                echo"<span>$logged</span>
                     <span>|</span>
                     <span><a href='logout.php'>로그아웃</a></span>
                     <span>|</span>
                     <span><a href='modify_form.php'>정보수정</a></span>";
                     
            }
        ?>
        </div><!--top-->
    </div><!--header-->
</body>
</html>