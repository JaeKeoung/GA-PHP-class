<?php
//전역변수
$data = 5;
function scope_test() {
	//지역변수를 참조
// 	global $data;
	static $data;	//이렇게 하면 다시 지역변수.
	$data += 1;		//이 data랑 바깥에 저 data랑 다르다.
	print $data."<br>";
}

print $data."<br>";
scope_test();
print $data."<br>";
?>