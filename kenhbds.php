<?php 
require "simple_html_dom.php";
require "dbConRE.php";
$html = file_get_html("https://kenhbds.vn/can-ban/dat-nen-dat-tho-cu-l7/da-nang-t15");

$tins = $html->find("div.contai div.container div.left_cont div.center div.box1 div.tt_dong1");

echo count($tins);
echo "<hr />";
foreach ($tins as $t) {
	// echo $title = $t->find("div a.tooltip",0)->plaintext;

	// echo $time = $t->find("span.span_ngay",0)->innertext;

	// echo $khuvuc = $t->find("span.span_tinh_thanh",0)->innertext;

	// echo $dientich =$t->find("span.span_dien_tich",0)->innertext;

	// echo $price = $t->find("span.span_gia",0)->innertext;

	echo $link = $t->find("div a.tooltip",0)->href;
	echo "<hr />";
}

?>