<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("http://cafeland.vn/du-an/dat-chia-lo-tai-da-nang/");

$tins = $html->find("div.page-content div.box-content ul.list-type-14 li");

echo count($tins);
echo "<br />";
foreach ($tins as $t) {
	$img = $t->find("a.wrap-img img",0)->src;
	//"<img src='$img'/>";

	$title = $t->find("h3 a",0)->innertext;

	$price = $t->find("span b",0)->innertext;

	$location = $t->find("div.box-type-2 a",0)->href;

	$desc = $t->find("p",0)->innertext;

	$time = $t->find("span.news-date",0)->innertext;

	$link = $t->find("h3 a",0)->href;

	// echo "<hr />";
	$u = 'cafeland/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$price = htmlentities($price, ENT_QUOTES, "UTF-8");
	$location = htmlentities($location, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES,"UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link = htmlentities($link, ENT_QUOTES, "UTF-8");

	
	$qr ="INSERT INTO test(title, description, price, image, create_day, link, area, location) VALUES ('$title','$desc','$price','$tenFile','$time','$link',null,'$location')";

 	$result2 = mysqli_query($mysqli, $qr);
}

?>