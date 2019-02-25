<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("http://cafeland.vn/du-an/");

$tins = $html->find("div.page-content div.box-content ul li");

//echo count($tins);
foreach ($tins as $t) {
	/*$img = $t->find("a.wrap-img img",0)->src;
	echo "<img src='$img'/>";*/

	//echo $title = $t->find("h3 a",0)->innertext;

	// echo $time = $t->find("span.news-date",0)->innertext;

	echo $price = $t->find("span b",0)->innertext;
	echo "<hr />";
}

?>