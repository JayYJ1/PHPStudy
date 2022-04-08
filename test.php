
<?php
   echo"<html>
   <body>";
   echo"<form method='post' action='test.php'> "; //form data를 post 방식으로 test.php에 전달
   echo"<select name='taskOption'>"; //select box 이름을 taskOption으로
   echo"             <option value='first'>First</option>
                <option value='second'>Second</option>
                 <option value='third'>Third</option>
             </select>";//selcet box의 값을 first, second, third로, 선택지는 First, Second, Third로
   echo"           <input type='submit' value='Submit'/>"; //form data 전송 버튼
   echo"        </form>
        </body>
    </html>";
    $taskOption = $_POST['taskOption']; //
    //$option = isset($taskOption) ? $taskOption : false;
   if ($taskOption) {
      //echo htmlentities($taskOption, ENT_QUOTES, 'UTF-8');
      echo $taskOption;
   } else {
     echo 'task option is required';
     exit; 
   }
   //
?>
