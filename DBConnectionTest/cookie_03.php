<?php
//쿠키는 삭제한다기보단 덮어 쓰는 개념이다.
setcookie("userid", "");	//userid 쿠키 삭제
setcookie("username", "");	//username 쿠키 삭제

echo "생성된 'userid'쿠키: ".$_COOKIE["userid"]."<br>";
echo "생성된 'username'쿠키: ".$_COOKIE["username"]."<br>";
?>