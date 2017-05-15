<?php
//php는 배열의 크기를 미리 정해두지 않아도 되지만 대부분의 다른 언어들은 배열을 만들 때 부터 그 크기를 지정해둔다.
	$week[] = "월";
	$week[] = "화";
	$week[] = "수";
	$week[] = "목";
	$week[] = "금";
	$week[] = "토";
	$week[] = "일";
	
	print $week[1];
	echo "<br><br>";
//배열 변수 선언
	 $arrweek = array("월", "화", "수", "목", "금", "토", "일");
	 
	 for ($a = 0; $a <= count($arrweek)-1; $a++) {
	 	echo $arrweek[$a]."<br>";
	 }
	 echo "<br>";
	 
//explode는 첫번째 " "에 들어간 문자를 사용하여 두번째 " "에 들어간 문장을 잘라서 배열로 만드는 함수인듯.
	$arrweek4 = explode(",", "월, 화, 수, 목, 금, 토, 일");
	echo $arrweek4[0];
	
//둘은 같다.
	$arrweek2 = array();
	$arrweek3 = [];
	
	/* 
	 * 배열이란 연속된 데이터의 집합이다.
	 * 1. index = 0부터
	 * 2. arr[] = 1, $arr[] = 2; o
	 * 3. arr[0] = 1, $arr[1] = 2; o
	 * 4. arr[1] = 1, $arr[2] = 2; x -> 0인덱스부터 순서대로 넣어라.
	 * 5. $arr3 = array(1,2,3);
	 * 6. $arr4 = explode(",", "1,2,3");
	 * 7. 순환문과 짝을 이뤄 데이터를 control.
	 * for($a=?; $a<a.lenth; $a++) {
	 * 		print $a[i];
	 * }
	 *  */
?>