<?PHP
header("Content-type:image/jpeg");
function mark_text($background, $text, $x, $y, $size) {
	$back = imagecreatefromjpeg($background);
	$color = imagecolorallocate($back, 255, 255, 255);
	imagettftext($back, $size, 0, $x, $y, $color, "./font/fangzheng.ttf", $text);
	imagejpeg($back, NULL, 100);
	imagedestroy($back);
}

	mark_text("./images/test.jpg", "BJTU", 20, 30, 30);

?>