<?php 
require "simple_html_dom.php";
require "dbConRE.php";
$html = file_get_html("http://kenhbds.vn/can-ban/da-nang-t15");

$tins = $html->find("div.contai div.container div.left_cont div.center div.search div.s_d2 div.s_box2 #se_quan_huyen");

foreach ($tins as $t) {
	echo $title = $t->innertext;
	echo "<hr />";
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$qr ="INSERT INTO district(name) VALUES('$title')";
	$ketqua = $mysqli->query($qr);
	if($ketqua){
		$sel_qr = 'SELECT * from district';
		$sel_res = $mysqli->query($sel_qr);
		while($ar = $sel_res->fetch_assoc()){
			$id = $ar['id'];
			$title = $ar['name'];
			echo $title;
		}
	}
	if($mysqli->query($qr) == TRUE){
		echo "<br /> Thêm data thành công";
	}else{
		echo "Lỗi: ".$qr."<br />".$mysqli->error;
	}
}
?>