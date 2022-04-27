<?php
  
  $str = " 공백 지우기 ";
  echo '|' . trim($str) . '|';
  echo "<br>";

$str1 = " 공백 지우기 ";
  echo '|' . ltrim($str1) . '|';
  echo "<br>";

$str2 = " 공백 지우기 ";
  echo '|' . rtrim($str2) . '|';
  echo "<br>";
?>
// |공백 지우기|
// |공백 지우기 |
// | 공백 지우기|
