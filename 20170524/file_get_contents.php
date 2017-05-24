<?php
$filename = "test.txt";
if(is_readable($filename)) {
	$contents = file_get_contents($filename);
	$contents_array = file($filename);
	print $contents;
} else {
	print $filename."은 읽어 들일 수 없습니다.";
}
print "<br><br>";
foreach ($contents_array as $key) {
	print $key."<br>";
}
?>