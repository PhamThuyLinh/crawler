<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://nhatphongland.com/tag/dat-nen");

$hinhs = $html->find("div.content_body div.container div.section div.col div.post_item div.pic a img");
$tins = $html ->find("div.content_body div.container div.section div.col div.post_item div.pic a");

foreach($tins as $t){
	// $img = $t->src;
	// echo "<img src='$img' />";

	$title = $t->attr["title"];
	echo $title;
	echo "<hr />";
}
?>