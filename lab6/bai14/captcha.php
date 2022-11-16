<?php
session_start();
header("Content-type: image/png");
$string = md5(time());
$string = substr($string,0,6);

$_SESSION['captcha'] = $string;

$img = imagecreate(150,50);
$background = imagecolorallocate($img,0,0,0);
$text_color = imagecolorallocate($img,255,255,255);
imagestring($img,4,40,15,$string,$text_color);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body><img src="captcha.php" title="" alt="" /></body>
</html>
