<?php
$str = "안녕하세요.";
$length = strlen($str);		// 안타깝게도 한글은 한글자당 3비트로 계산해벌임.
$mb_length = mb_strlen($str);

//결과 확인
print $length."<br>";
print $mb_length;
?>