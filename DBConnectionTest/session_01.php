<?php
session_start();
/*형식
* bool session_start()
* -인자: void(인자 없음)
*
*기능: 세션을 생성하고, 현재의 세션 ID를 활성화 시킨다.
*
*반환값
*-항상 TURE
*/

echo "세션이 시작되었습니다. <br><br>";
$_SESSION['color'] = 'blue';
$_SESSION['animal'] = 'cat';
$_SESSION['time'] = time();

echo "<a href='session_02.php'>session_02.php로 이동.</a>";
?>