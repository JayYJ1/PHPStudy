<?php
$time1=mktime(0,0,0,4,1,2022);//기준 시간
$time2=mktime(0,0,0,4,27,2022);//끝 시간
$now=time(); //현재 시간
if($now >= $time1 && $now <= $time2){// 기준 시간과 끝시간을 각각 현재 시간과 비교하여 시작과 끝을 출력한다
	echo "시작<br>";
}else{
	echo "종료<br>";
}//종료 상황

$time1=mktime(0,0,0,4,1,2022);//기준 시간
$time2=mktime(0,0,0,5,25,2022);//끝 시간
$now=time(); //현재 시간
if($now >= $time1 && $now <= $time2){// 기준 시간과 끝시간을 각각 현재 시간과 비교하여 시작과 끝을 출력한다
	echo "시작<br>";
}else{
	echo "종료<br>";
}//시작 상황
?>
