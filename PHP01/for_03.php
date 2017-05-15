<?php
//별찍기
	/* for ($a = 1; $a <= 10; $a++) {
		for ($b = 1; $b <= $a; $b++) {
			echo "* ";
		}
		echo "<br>";
	}
	echo "<br>"; */
	
//별찍기2 0512숙제
	for ($a = 1; $a < 6; $a++) {
		for ($b = 1; $b < (6-$a)+1; $b++) {
			echo "&nbsp;";
		}
		for ($b = 1; $b < 2*$a-1; $b++) {
			echo "*";
		}
		echo "<br>";
	}
		
	for ($c = 0; $c < 6; $c++) {
		for ($d = 0; $d < $c; $d++) {
			echo "&nbsp;";
		}
		for ($d = 0; $d < 2*(5-$c); $d++) {
			echo "*";
		}
		echo "<br>";
	}
?>