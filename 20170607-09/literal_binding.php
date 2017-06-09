<?php
	$value = 0;
	
	$sql = "select * from table where id = ".$value;
	// literal sql 항상 새로운 쿼리로 인식한다. 그러다보니 갈수록 속도가 떨어짐.
	
	$sql2 = "select * from table where id = ?";
	// binding sql 대부분 이걸 쓰게 한다는듯.
?>