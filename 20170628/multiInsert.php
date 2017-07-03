<?php
define('_ROOT_DIR', __DIR__.'/');
require_once _ROOT_DIR.'init.php';
header("Content-Type: text/html; character=utf-8;");

$list = new ListModel();
$listdata = array(
		0 => array("title01"=>"title", "name"=>"홍길동", "email"=>"email@eamil.com", 
		"pass"=>"pass01", "content"=>"coooooontent", "ip"=>"ip", "view"=>"view"),
		
		1 => array("title02"=>"title", "name"=>"홍길동", "email"=>"email@eamil.com",
				"pass"=>"pass01", "content"=>"coooooontent", "ip"=>"ip", "view"=>"view"),
		
		2 => array("title03"=>"title", "name"=>"홍길동", "email"=>"email@eamil.com",
				"pass"=>"pass01", "content"=>"coooooontent", "ip"=>"ip", "view"=>"view"),
		
		3 => array("title04"=>"title", "name"=>"홍길동", "email"=>"email@eamil.com",
				"pass"=>"pass01", "content"=>"coooooontent", "ip"=>"ip", "view"=>"view")
);
$list->multiInsert($listdata);
?>