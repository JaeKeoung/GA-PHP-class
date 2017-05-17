<?php
/* $host $user $password $database $port $socket */
	$conn = mysqli_connect('localhost','testdb','4321','test',3306,null);
	mysqli_select_db($conn, "testdb");
	
	$query = "select * from friend";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)) {
		print $row["name"]." ".$row["address"];
		print "<br>";	//while문이 데이터의 개수만큼 돈다.
	}
	
	mysqli_close($conn);
?>