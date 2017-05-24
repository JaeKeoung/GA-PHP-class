<?php
//stack의 개념
// push 먼저
print "push";
$data = array("고양이","개","햄스터");
array_push($data,"개","타코야키");
print "<pre>";
print_r($data);
print "</pre>";

// 이번엔 pop
print "pop";
$letsPop = array_pop($data);
print "<pre>";
print_r($letsPop);
print "</pre>";
// 타코야키 안녀엉
print "<pre>";
print_r($data);
print "</pre>";

//unshift다 그지 깽깽이들아
print "unshift";
array_unshift($data, "니드호그", "흐레스벨그");
print "<pre>";
print_r($data);
print "</pre>";

//shift
print "shift";
$shift_value = array_shift($data);
print "<pre>";
print_r($data);
print "</pre>";
print $shift_value."<br>";

//merge
print "merge";
$scd_data = array("웅앵" => "웅", "초키" => "포키", "옴뇸뇸" => "웅냥냥");
$merge_value = array_merge($data, $scd_data);
print "<pre>";
print_r($merge_value);
print "</pre>";
?>