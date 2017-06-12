<?php
	$db_user = "root";
	$db_pass = "";
	$db_host = "localhost";
	$db_name = "sampledb";
	$db_type = "mysql";
	$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
	try {
		$pdo = new PDO($dsn, $db_user, $db_pass);
		$pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
		$pdo->setAttribute(pdo::ATTR_EMULATE_PREPARES, false);
		print "접속 성공.<br>";
	} catch (Exception $e) {
		print "접속 실패 : ".$e->getMessage()."<br>".$e->getTraceAsString();
	}
	
	// 트랜젝션 및 디어터비하인딩
	try {
		$pdo->beginTransaction();
		$sql = "insert into member(last_name, first_name, age)";
		$sql .= "values(:last_name,:first_name,:age)";	// 이거 붙여도 별 상관 없어.
		// :last_name대신 $last_name으로도 쓸 순 있지만 이렇게 쓰면 데이터 손실이 커서 많은 곳에서 지양한다.
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':first_name', $_POST['first_name'], pdo::PARAM_STR);
		$stmt->bindValue(':last_name',  $_POST['last_name'], pdo::PARAM_STR);
		$stmt->bindValue(':age', $_POST['age'], pdo::PARAM_STR);
		$stmt->execute();
		$pdo->commit();
		print "데이터를 ".$stmt->rowCount()."건 입력하였습니다.<br>";
		
	} catch (Exception $e) {
		$pdo->rollBack();	// insert한 걸 무효화
		print "오류: ".$e->getMessage();
	} finally {
		$pdo= null;
	}