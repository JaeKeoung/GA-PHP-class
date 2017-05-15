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

//결과 다 잘 나온다.
?>