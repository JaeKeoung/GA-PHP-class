<?php
  define('_ROOT_DIR',__DIR__.'/');
  require_once _ROOT_DIR.'php_libs/init.php';
  $controller = new MemberController();
  $controller->run();
  exit;
  
  //SQLSTATE[HY000] [1045] 가 나오면 init.php에서 root인지 확인해라.
  //회원 관리 페이지는 system.php
?>