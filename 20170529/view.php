<html>
<head>
	<title>클래스 테스트</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">>
</head>
<body bgcolor="#ffffff" text="#000000">
	<font size="4">클래스 테스트</font>
	<br><br>
	<?php 
		class User {
			private $name = null;
			public function print_hello() {
				print $this->name;
				print " 님, 안녕하세요!<br>";
			}
		}
		
		class Guest extends User {
			private $name = "게스트";
			public function print_hello() {
				print $this->name;
				print " 님, 반갑습니다!<br><br>";
			}
		}
		
		$user_instance = new User();
		$newuser = new Guest();
		$newuser->print_hello();
		
		$user_instance->print_hello();
		$user_instance = $newuser;
		$user_instance->print_hello();
	?>
</body>
</html>