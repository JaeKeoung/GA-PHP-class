<?
function a($a,$b,$c,$d,$e,$f) {
	echo $a + $b + $c + $d + $e + $f;
}

a(1,null,null,null,null,null);
print "<br>";
a(1,2,null,null,null,null);
print "<br>";
a(1,2,3,null,null,null);
print "<br>";
a(1,2,3,4,null,null);
print "<br>";
a(1,2,3,4,5,null);
print "<br>";
a(1,2,3,4,5,6);
print "<br>";

// 결과 다 잘 나온다.

// 재귀함수(무한 루프)
function test($n) {
	$c = $n;
	if ($n == 1) {
		return 1;
	}
	$c += test($n - 1);
	
	return $c;
	// 이러케 하면 메모리 터져서 뒤져버림. 아마도 뒤졌어야했는데...
}
function test_test($param) {
	if (true) {
		return $param;
	}
}
print test(10);

?>