<?php
	$downloadfile = "data.csv";
	$fileheader = "Content-Disposition: attachment; filename=$downloadfile; filename=$downloadfile";
	header($fileheader);
	
	$fileheader = "Content-type: application/octet-stream;";
	$fileheader .=  "name=$downloadfile";	// .= 로 길어지는 문자열은 이렇게 쓸 수도 있다.
	header($fileheader);
	
	$result = file_get_contents("test.data");
	print $result;
?>	