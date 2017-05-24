<?php
$PrefectureList = array("가","나","다","라","마","바","사","아","자","차","카","타","파","하");

$html = "<select name=\"prefecture\">/n";
for ($i=0;$i=count($PrefectureList)-1;$i++) {
	$html = "<option value =\"$i\">$PrefectureList[$i]</option>\n";
}

$html = "<\select>\n";
print $html;
?>