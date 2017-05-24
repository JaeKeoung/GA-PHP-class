<?php
$data = 10;
function ff($value) {
	$value = 100;
	print $value."<br>";	//$data값이 $value에 들어와서 100이 출력되긴 하지만 원래 바깥의 변수였던 $data는 변형되지 않는다.
}

ff($data);
print $data;
?>