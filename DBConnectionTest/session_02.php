<?php 
	session_start();	//어쨌든 start를 시켜야지 서버에서 보내들 말든 하지...
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	</head>
	
	<body>
		<h3>▶ 등록된 세션의 사용</h3>
		<table width="400" border="1">
			<tr><td>아이디</td><td>이름</td><td>현재시간</td></tr>
			<tr>
				<td><?=$_SESSION['color'] ?></td>
				<td><?=$_SESSION['animal'] ?></td>
				<td><?=$_SESSION['time'] ?></td>
		</table>
		
		<a href="session_03.php">세션 삭제하러 가는 길b</a>
	</body>
</html>