<?php
$week = array("월","화","수","목","금","토","일");
foreach ($week as $key) {	// 순차적으로 배열같은 것을 출력할 때나 사용함.
	print $key;		// 다른 언어에선 $week와 $key의 위치가 다르다.
	print "<br>";	//php는 ($배열 as $키) 다른 언어는 ($키 as $배열)
}
?>