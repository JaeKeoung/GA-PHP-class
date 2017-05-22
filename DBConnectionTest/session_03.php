<?php
session_start();

unset($_SESSION['color']);
unset($_SESSION['animal']);
unset($_SESSION['time']);
/* 형식
 * void unset(mixed $var, ...)
 * -인자: 삭제할 변수
 * 
 * 기능
 * -인자로 사용된 변수들의 값을 삭제한다.
 * 
 * 반환값
 * -없음
 *  */
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	</head>
	
	<body>
		<h3>▶ 세션의 삭제</h3>
		<table width="400" border="1">
			<tr><td>아이디</td><td>이름</td><td>현재시간</td></tr>
			<tr>
				<td><?=$_SESSION['color'] ?></td>
				<td><?=$_SESSION['animal'] ?></td>
				<td><?=$_SESSION['time'] ?></td>
		</table>
	</body>
</html>