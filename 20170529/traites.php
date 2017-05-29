<html>
<head>
	<title>Trait 테스트</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">>
</head>
<body bgcolor="#ffffff" text="#000000">
	<font size="4">Trait 테스트</font>
	<br><br>
	<?php
		trait SayMorning {
			public function print_morning() {
				print $this->name;
				print "님, 좋은 아침입니다!<br>";
			}
		}
		
		class User {
			private $name = null;
			public function print_hello() {
				print $this->name;
				print " 님, 안녕하세요!<br>";
			}
		}
		
		class Guest extends User {
			use SayMorning;
			private $name = "게스트";
			public function print_hello() {
				print $this->name;
				print " 님, 반갑습니다!<br><br>";
			}
		}
		
		$newuser = new Guest();
		$newuser->print_hello();
		$newuser->print_morning();
	?>
</body>
</html>
