<?php
define('_ROOT_DIR', __DIR__.'/');
require_once _ROOT_DIR.'init.php';

$title = $_POST["title"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$content = $_POST["content"];
$list = array("title"=>$title, "name"=>$name, "email"=>$email, "password"=>$password, "content"=>$content);

$board = new ListModel();
$board->insertBoard($list);
?>