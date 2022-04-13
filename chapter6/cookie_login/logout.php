<?php
    setcookie("userid","",time()-3600); //value가 공백일 시, 시간이 만료되면 쿠키가 삭제됨

    echo"<script>
            location.href='chapter6-4.php';
        </script>";
?>