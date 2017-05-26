<?php
	/* $filename = "text.txt";
	if (is_file($filename) && unlink($filename)) {
		print $filename."를 삭제하였습니다.";
	} else {
		print $filename."는 삭제할 수 없습니다.";
	} */

	$count = 0;
	if ($count > 0 && ++$count > 10) {	
		// 중요. &&은 논리곱은 두 값 모두 ture여야 할 텐데 앞에 값이 이미 false면 더이상 계산하지 않고 값을 출력한다.
		// 고로 &&으로 계산할 땐 $count는 0이 출력된다.
		// 그에 반해 ||은 논리합이니 앞이 false여도 뒤에 값까지 계산하는데 그러면 ||로 바꿔서 실행시키면 $count는 1이 출력된다.
	}
	print $count;
?>