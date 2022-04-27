<?php

$year = 2021;
$month = 4;
$day = 4;

//입력한 날짜의 타임스탬프
$targetTimeStamp = mktime(0, 0, 0, $month, $day, $year);

//요일 찾기
$dayOfWeek = date("w", $targetTimeStamp);

//하루의 초
$second = 60 * 60 * 24; //하루의 초는 86400초

switch($dayOfWeek){

	case 1: //월요일
		$monday = $targetTimeStamp;
		$friday = $targetTimeStamp + ($second * 4);
		break;
	case 2: //화요일
		$monday = $targetTimeStamp - ($second * 1);
		$friday = $targetTimeStamp + ($second * 3);
		break;
	case 3: //수요일
		$monday = $targetTimeStamp - ($second * 2);
		$friday = $targetTimeStamp + ($second * 2);
		break;
	case 4: //목요일
		$monday = $targetTimeStamp - ($second * 3);
		$friday = $targetTimeStamp + ($second * 1);
		break;
	case 5: //금요일
		$monday = $targetTimeStamp - ($second * 4);
		$friday = $targetTimeStamp;
		break;
	}
	//case 6: //토요일 
	//case 7: //일요일
	if(isset($monday) && isset($friday)){
		
		echo "{$year}년 {$month}월 {$day}일의 월~금 날짜";
		echo "<br>";
		echo "월요일".date('Y-m-d',$monday);
		echo "<br>";
		echo "금요일".date('Y-m-d',$friday);
	}else{
		echo "월~금 날짜를 입력하세요";
	}
	?>
