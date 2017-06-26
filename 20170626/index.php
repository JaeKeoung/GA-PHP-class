<?php
define('_ROOT_DIR',__DIR__.'/');
require_once _ROOT_DIR.'init.php';

// DB 접속
// $conn = new BaseModel();
$list = new ListModel();
$listarray[] = $list->get_list($_GET["id"]);
?>

<html>
	<head>
		<title>게시판 연습 페이지</title>
	</head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		body {font-family: 'Josefin Sans', sans-serif; font-size: 11pt;}
		thead {background-color: #222;}
		th {color: #fff;}
		th, td {padding: 5 30px;}
	</style>
	<body>
	<?php for($i = 1; $i < (count($listarray)/10)+1; $i++) {?>
	<a href="<?=$listarray[] = $list->get_list($i)?>"><?=$listarray[] = $list->get_list($i)?>페이지</a>
	<?php 
		}
	?>
		<table>
			<thead>
				<tr>
					<th>아이디</th>
					<th>작성자</th>
					<th>제목</th>
					<th>조회수</th>
					<th>날짜</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($listarray[0] as $row) {
				?>
				<tr>
					<td><?=$row["id"]?></td>
					<td><?=$row["name"]?></td>
					<td><?=$row["title"]?></td>
					<td><?=$row["view"]?></td>
					<td><?=$row["wdate"]?></td>
				</tr>
				<?php 
					}
				?>
			</tbody>
		</table>
	</body>
</html>