<?php
print $_POST['id']."<br>";
print $_POST['password']."<br>";
print $_POST['hdata01']."<br>";
print $_POST['hdata02']."<br>";

// 체크박스
if (isset($_POST["hobby"])) {
	for($a=0;$a<count($_POST["hobby"]);$a++) {
		print $_POST["hobby"][$a]."<br>";
		}
	} else {
		print "취미가 선택되지 않았습니다.<br>";
	}

/* for($a=0;$a<count($_POST["hobby"]);$a++) {
	$hobby_temp = $_POST["hobby"][$a];
	if($hobby_temp == "AOS") {
		echo ("<script>location.href='view/hobby/AOS.php';</script>");
		break;	//AOS와 나머지 모든 체크박스가 선택되어도 AOS밖에 안 간다는 이야기.
	} else if ($hobby_temp == "MMORPG") {
		echo ("<script>location.href='view/hobby/MMORPG.php';</script>");	//강제로 바로 이동이다. 싫으면 주석처리.
		break;
	} else if ($hobby_temp == "FPS") {
		echo ("<script>location.href='view/hobby/FPS.php';</script>");
		break;
	}
} */

//라디오 버튼
if(isset($_POST["permission"]) && ($_POST["permission"] == "yyyyyyyyyyyyes" || $_POST["permission"] == "nonononononon")) {
	print "Y or N ? <br>";
	print $_POST["permission"];
} else {
	print "Y or N ? try again"."<br><a href='form.php'>get out</a>";
}

/* $hobby = implode(' ', $_POST["hobby"]);
print $hobby; */
?>
<html>
	<body>
		<form action="view_02.php" method="post">
			<input type="hidden" name="hdata03" value="<?=$_POST['hdata01']?>"><br>
			<input type="submit" value="제출">
		</form>
	</body>
</html>