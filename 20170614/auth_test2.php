<?php
if(empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW'])){
	header("WWW-Authenticate: Basic realm=\"Member Only\"");
	header("HTTP/1.0 401 Unauthorized");
}else{
	print $_SERVER['PHP_AUTH_USER']."<BR>";
	print $_SERVER['PHP_AUTH_PW'];
}
// id sample password 1234
// 경로는 xampp apache bin
// 브라우저를 아예 새로 나갔다 들어와야지 비번입력창이 나온다.
?>
