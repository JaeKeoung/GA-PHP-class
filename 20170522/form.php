<!DOCTYPE>
<html>
	<head>
		<meta content="text/html; charset=utf-8">
		<title>테스트 송수신</title>
	</head>
	
	<body>
		<form action="view_01.php" method="post">
			<input type="text" name="id"><br>
			<input type="password" name="password"><br>
			<input type="hidden" name="hdata01" value="100"><br>
			<input type="hidden" name="hdata02" value="200"><br>
			
			<input type="checkbox" name="hobby[]" value="AOS">게임<br>
			<input type="checkbox" name="hobby[]" value="MMORPG">게임ㅋ<br>
			<input type="checkbox" name="hobby[]" value="FPS">게임ㅋㅋㅋㅋㅋㅋㅋㅋ<br><br>
			
			
			<input type="radio" name="permission" value="yyyyyyyyyyyyes">Yes<br>
			<input type="radio" name="permission" value="nonononononon">NO<br>
			<!-- 
			<input type="radio" name="gender" value="male">male<br>
			<input type="radio" name="gender" value="female">female<br>
			<input type="radio" name="gender" value="transe">transe<br> -->
			<input type="submit" value="송신"><br>
		</form>
	</body>
</html>
<?php

?>