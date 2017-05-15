<?php
//0512숙제
	echo "<html>
			<body>";
	
	$a = 0;
	for ($firts = 2; $firts < 10; $firts++) {
		for ($second = 1; $second < 10; $second++) {
			$answer = $firts * $second;
			if ($a % 2 == 0) {
				echo "<p>$firts x $second = $answer<p>";
			} else if ($a % 2 == 1) {
				echo "<span>$firts x $second = $answer | <span>";
			}
		}
		$a++;
		echo "<br>";
	}
	
	echo "</body>
		</html>"
?>