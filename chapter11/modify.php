<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $con = mysqli_connect("아이피","사용자","비번","데이터베이스");

    $sql = "update members set pass='$pass',name='$name', email='$email'";
    $sql .= "where id='$id'";

    mysqli_query($con,$sql);
    mysqli_close($con);

    echo"<script>location.href='index.php';</script>";

    ?>