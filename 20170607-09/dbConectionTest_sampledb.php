<html>
	<head>
		<title>sampledb Conection Test</title>
	</head>
	<body>
		<?php
			$con = mysqli_connect('localhost', 'root', '') or die('접속할 수 없습니다.'); // 호스트, 사용자, 비밀번호
			print 'mysql 함수로 접속이 성공하였습니다.';
			mysql_select_db('sampledb');
			// 여기에서 데이터베이스 관련 처리를 합니다.
			mysqli_close($con);
		?>
	</body>
</html>
