<?php
$im = imagecreatefrompng('button.png');
$stamp = imagecreatefrompng('text.png');

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesx($stamp);

imagecop($im, $stamp, imagesx($im)-$sx- $marge_bottom, 0,0,imagesx($stamp), imagesy($stamp));



header("Content-type: image/png");
$string = $_GET['text'];

imagepng($im);
imagedestroy($im);
 ?>
