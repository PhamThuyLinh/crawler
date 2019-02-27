<?php
require "simple_html_dom.php";
require "dbCon.php";

$html = file_get_html("http://www.muabannhadat.vn/dat-ban-3515/tp-da-nang-s31?sf=dpo&so=d&p=0");

$tins = $html->find("div.body-content div.container div.row div.container div.row div.col-xs-12 div.pull-left div.list-group div.list-group-item ");

echo count($tins);
echo "<hr />";
foreach ($tins as $t) {
	// echo $title = $t->find("div.row div.resultItem div.col-xs-12 div.row div.col-md-9 a.title-filter-link",0)->innertext;

	// echo $dientich = $t->find("div.row div.resultItem div.col-xs-12 div.row",2)->find("div.col-xs-12",0)->plaintext;

	// echo $price = $t->find("div.row div.resultItem div.col-xs-12 div.row div.col-md-3",0)->innertext;

	// echo $area = $t->find("div.row div.resultItem div.col-xs-12 div.row",1)->find("div.col-md-3",0)->innertext;

	// echo $desc =$t->find("div.row div.resultItem div.col-xs-12 div.row",3)->find("div.col-xs-12",0)->innertext;

	// echo $time = $t->find("div.row div.resultItem div.col-xs-12 div.row",4)->find("div.col-lg-4",0)->innertext;

	// echo $link = $t->find("div.row div.resultItem div.col-xs-12 div.row div.col-md-9 a.title-filter-link",0)->href;
	// echo "<hr />";
	// echo $link1 = "<span>http://www.muabannhadat.vn</span>".$link;
	
	echo "<hr />";


}
?>