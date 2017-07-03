<?php
define('_ROOT_DIR',__DIR__.'/');
require_once _ROOT_DIR.'init.php';

$list = new ListModel();
$data = $list->getDataFromId($_GET["id"]);
// print "name = ".$data["name"]; // 확인용 코드
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>게시판 업데이트 연습 페이지</title>
		<meta charset="utf8">
	</head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		body {font-family: 'Josefin Sans', sans-serif; font-size: 11pt;}
	</style>
	<body>
		<form action="update.php" method="post" name="board_update_form">
			<label for="title">제목</label><input type="text" name="title" value="<?=$data['title']?>" /><br>
			<label for="name">작성자</label><input type="text" name="name" value="<?=$data['name']?>" /><br>
			<label for="email">이메일</label><input type="text" name="email" value="<?=$data['email']?>" /><br>
			<label for="password">비밀번호</label><input type="password" name="password" value="<?=$data['pass']?>" /><br>
			<label for="content">내용</label><textarea rows="10" name="content" ><?=$data['content']?></textarea><br>
			<input type="hidden" name="id" value="<?=$id?>" />
			<input type="submit" value="등록">
		</form>
	</body>
</html>