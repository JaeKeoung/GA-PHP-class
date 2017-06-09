<?php
	try {
		$dsn = 'mysql:host=localhost;dbname=sampledb;charset=utf8';
		$pdo = new PDO($dsn, 'root', '');
		$pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
		$pdo->setAttribute(pdo::ATTR_EMULATE_PREPARES, false);
		print "접속 성공";
		$pdo = null;
	} catch (Exception $e) {
		die("접속 오류 <br>".$e->getMessage());
		// getTraceAsString()
	}
?>