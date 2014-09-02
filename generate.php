<?PHP
header("Content-type:image/jpeg");
$lottery = $_GET['lottery'];
function mark_text($background, $text, $x, $y, $size) {
	$back = imagecreatefromjpeg($background);
	$color = imagecolorallocate($back, 255, 255, 255);
	imagettftext($back, $size, 0, $x, $y, $color, "./font/fangzheng.ttf", $text);
	imagejpeg($back, NULL, 100);
	imagedestroy($back);
}

function bjtu_pic($background){
	$back = imagecreatefromjpeg($background);
	imagejpeg($back, NULL, 100);
	imagedestroy($back);
}

	if($lottery==1)
		mark_text("./images/zhongjiangxiaoguotu.jpg", "BJTU", 20, 30, 30);
	else{
		$i = rand(1, 22);
		bjtu_pic("./images/bjtu_" . $i . ".jpg");
	}
?>