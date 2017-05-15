<?
$firstarray = array(1,2,3,4,5);
print "1차원 배열의 갯수는 = ".count($firstarray)."<br>";

$secondarray = array(
		array(1,2,3,4,5),
		array(6,7,8,9,10),
		array(11,12,13,14,15)
		
);
print "2차원 배열의 colume 갯수는 = ".count($secondarray)."<br>";
print "2차원 배열의 row 갯수는 = ".count($secondarray[0]);
?>