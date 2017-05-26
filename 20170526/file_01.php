<?php
$filename = "text.txt";		// 경로 설정을 하고 싶을 때 상위 디렉토리에 만들 땐 ../을 쓴다.
$contents = "abcdefg";		// C드라이브 안 어디에 만들고 싶다면 경로 전체를 삽입.

// write a file
file_put_contents($filename, $contents);

// read the file
$readfile = file_get_contents($filename);
print $readfile."<br>";

$readfile2 = file($filename);
foreach ($readfile2 as $data) {
	print $data."<br>";
}
?>