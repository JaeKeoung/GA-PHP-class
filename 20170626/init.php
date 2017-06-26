<?php
// 데이터베이스 접속 사용자명
define("_DB_USER","root");
// 데이터베이스 접속 패스워드
define("_DB_PASS","");
// 데이터베이스 호스트명
define("_DB_HOST","localhost");
// 데이터베이스명
define("_DB_NAME","sampledb");
// 데이터베이스 종류
define("_DB_TYPE","mysql");
// 데이터소스 홈
define("_DSN",_DB_TYPE.":host="._DB_HOST.";dbname="._DB_NAME.";charset=utf8");

function autoLoader($className) {
	require_once _ROOT_DIR.$className.'.php';
}

spl_autoLoad_register("autoloader");
?>