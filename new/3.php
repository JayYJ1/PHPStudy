<?php
  
  $a = "welcome home";
echo "글자 개수 : " . strlen($a);
//글자 개수 : 12
//공백도 개수에 포함한다.
echo "<br>";

$b = "welcome home!";
$change = str_replace("home","school",$b);
echo $change;
// 글자 개수 : 12
// welcome school!
?>
