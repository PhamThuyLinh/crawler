<?php 
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://batdongsanvenbiendanang.com/bat-dong-san-ven-bien-da-nang-ptd/danh-sach-cac-lo-dat-bien-ven-bien-da-nang/?gclid=Cj0KCQiAm5viBRD4ARIsADGUT25mwBfgFZOI2nk2XgsM-CLfUf0FDcsUQa0VozsspumrYBQF6gaX6_AaAkdrEALw_wcB");
echo $html;

// foreach ($tins as $t) {
// 	echo $title = $t->innertext;
// 	echo "<hr />";
// 	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
// 	$qr ="INSERT INTO district(name) VALUES('$title')";
// 	$ketqua = $mysqli->query($qr);
// 	if($ketqua){
// 		$sel_qr = 'SELECT * from district';
// 		$sel_res = $mysqli->query($sel_qr);
// 		while($ar = $sel_res->fetch_assoc()){
// 			$id = $ar['id'];
// 			$title = $ar['name'];
// 			echo $title;
// 		}
// 	}
// 	if($mysqli->query($qr) == TRUE){
// 		echo "<br /> Thêm data thành công";
// 	}else{
// 		echo "Lỗi: ".$qr."<br />".$mysqli->error;
// 	}
// }
?>