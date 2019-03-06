<?php 
require "simple_html_dom.php";
require "dbConRE.php";
$html = file_get_html("https://kenhbds.vn/thong-tin/tin-tuc-su-kien");

$tins = $html->find("div.contai div.container div.left_cont div.center div.box1 div.tt_dong1");

echo count($tins);
echo "<hr />";
foreach ($tins as $t) {
	$title = $t->find("div a.tooltip",0)->plaintext;

	$time = $t->find("span.span_ngay",0)->innertext;

	$khuvuc = $t->find("span.span_tinh_thanh",0)->innertext;

	$dientich =$t->find("span.span_dien_tich",0)->innertext;

	$price = $t->find("span.span_gia",0)->innertext;

	$link = $t->find("div a.tooltip",0)->href;
	echo "<hr />";

	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$area = htmlentities($area, ENT_QUOTES, "UTF-8");
	$price = htmlentities($price, ENT_QUOTES, "UTF-8");
	$location = htmlentities($location, ENT_QUOTES, "UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link = htmlentities($link, ENT_QUOTES, "UTF-8");

	
	$qr ="INSERT INTO tintuc(title, description, image, time, link) VALUES ('$title','$desc','$tenFile','$time','$link')";

 	$result2 = mysqli_query($mysqli, $qr);
}

?>