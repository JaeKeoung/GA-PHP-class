<?php
$a = setcookie("userid", "kdhong");
$b = setcookie("username", "홍길동", time()+60);

if($a and $b) {
	echo "쿠키 'userid'와 'username' 생성 완료! <br>";
	echo "쿠키 'username'은 60초(1분)간 지속됩니다. <br>";
	
	echo "생성된 'userid'쿠키: ".$_COOKIE["userid"]."<br>";
	echo "생성된 'username'쿠키: ".$_COOKIE["username"]."<br>";		
	//$_COOKIE[]는 컴퓨터 자체에서 알아서 만들어져있는 배열이라고 생각하면 되고
	//우리는 [""]에 들어갈 키 값을 셋팅하는 거다.
}
?>