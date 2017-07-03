<?php
define('_ROOT_DIR', __DIR__.'/');
require_once _ROOT_DIR.'init.php';
header("Content-Type: text/html; character=utf-8;");

$id = null;
$title = $_POST["title"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$content = $_POST["content"];
$listdata = array("id"=>$id, "title"=>$title, 
		"name"=>$name, "email"=>$email, 
		"password"=>$password, "content"=>$content
);

$list = new ListModel();
$list->insertUpdateBoard($listdata);
?>