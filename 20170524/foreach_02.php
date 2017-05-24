<?php
$num = array(1,2,3,4,5,6,7,8,9,10);
$even_sum = 0;	// 짝수의 합계
$odd_sum = 0;	// 홀수의 합계
// 짝수는 정수%2 == 0
foreach ($num as $data) {
	if ($data%2 == 0) {
// 		$even_sum += $data;
		continue;	//continue는 이 if의 조건이 들어맞았으면 break처럼 반복문 바깥으로 나가버리는 게 아니라 반복문의 처음으로 돌아가게 해준다.
	} else {
		$odd_sum += $data;
	}
}
// print "짝수의 합은 = ".$even_sum."입니다.<br>";
print "홀수의 합은 = ".$odd_sum."입니다.";
?>