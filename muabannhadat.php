<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://www.muabannhadat.vn/dat-ban-3515/tp-da-nang-s31?sf=dpo&so=d&p=0");

$tins = $html->find("div.body-content div.container div.row div.container div.row div.col-xs-12 div.pull-left div.list-group div.mbnd-item ");

echo count($tins);
// echo "<hr />";
foreach ($tins as $t) {
	$title = $t->find("div.mbnd-item-body div.row div.col-lg-12 a h2.mbnd-item-title",0)->innertext;

	$area = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-3 p.mbnd-item-text",0)->plaintext;

	$price = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-5 p.mbnd-item-price",0)->innertext;

	$street = $t->find("div.mbnd-item-body div.row",1)->find("div.col-lg-8 p.mbnd-item-text",0)->innertext;

	$district = $t->find("div.mbnd-item-body div.row",1)->find("div.col-lg-4 p.mbnd-item-text",0)->innertext;
	
	$location = $street." ".$district;
	
	$desc =$t->find("div.mbnd-item-body div.row",2)->find("div.col-lg-12 p.mbnd-item-text",0)->innertext;

	$time = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-5 p.mbnd-item-text",0)->innertext;

	$link = $t->find("div.mbnd-item-body div.row div.col-lg-12 a",0)->href;
	//echo "<hr />";
	$link1 = "<span>http://www.muabannhadat.vn</span>".$link;
	
	// echo "<hr />";
	// //$u = 'cafeland/'.basename($img);
	// //file_put_contents($u, file_get_contents($img));
	// //$tenFile = basename($img);
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$area = htmlentities($area, ENT_QUOTES,"UTF-8");
	$price = htmlentities($price, ENT_QUOTES, "UTF-8");
	$location = htmlentities($location, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES,"UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link1 = htmlentities($link1, ENT_QUOTES, "UTF-8");

	echo "<br />";

	$qr1 ="INSERT INTO test(title, description, price, image, create_day, link, area, location) VALUES ('$title','$desc','$price',null,'$time','$link1','$area','$location')";

 	$result2 = mysqli_query($mysqli, $qr1);

}
?>