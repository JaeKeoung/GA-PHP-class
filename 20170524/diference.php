<?php
// foreach와 for의 차이점.
$arr = array(1,2,3,4,5,6,7,8,9,10);
$index = 0;
foreach ($arr as $data) {	// foreach는 인덱스 번호를 찝어서 출력할 수 없다.
	print $data."<br>";
	$index++;	// 그래서 외부에서 인덱스 변수를 따로 만들어 준 후 이렇게 쓸 수는 있겠다.
	if ($index == 5) {
		$data = 100;
	}
}
print "<br>";

for ($a = 0; $a < count($arr); $a++) {
	if ($a == 5) {
		$arr[$a] = 100;
	}
	
	print $arr[$a]."<br>";	// for는 할 수 있다. 인덱스번호 찍어서 출력하기.
}
?>