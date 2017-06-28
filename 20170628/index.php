<?php
define('_ROOT_DIR',__DIR__.'/');
require_once _ROOT_DIR.'init.php';

// DB 접속
// $conn = new BaseModel();
$list = new ListModel();
$listarray[] = $list->get_list($_GET["no"]);
$totalcount = $list->get_tatal_count();
$totalpage = ceil($totalcount / _show_page);
?>

<html>
	<head>
		<title>게시판 페이징 연습 페이지</title>
		<meta charset="utf8">
	</head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		body {font-family: 'Josefin Sans', sans-serif; font-size: 11pt;}
		thead {background-color: #222;}
		th {color: #fff;}
		th, td {padding: 5 30px;}
	</style>
	<body>
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
					$testurl = "http://localhost/20170628/showupdate.php?id=$row[id]";
				?>
				<tr>
					<td><a href=<?=$testurl?>><?=$row["id"]?></a></td>
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
		<?php 
			for($i = 1; $i < $totalpage+1; $i++) {
				print "<a href=index.php?no=$i>$i | </a>";
			}
		?>
	</body>
</html>