<?php
$string = "<a href='http://www.naver.com/'>네이버</a>";
print $string."<br>";
$result = htmlspecialchars($string,ENT_QUOTES);		//코드를 그대로 출력함.
print $result;
?>