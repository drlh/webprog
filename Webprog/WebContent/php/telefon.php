<?php
$email = "Telefon: +49 1234/56789";
$textnr = 4;
$textbreite = imagefontwidth($textnr) * strlen($email);
$texthoehe  = imagefontheight($textnr);
 
header ("Content-type: image/png");
$bild = imagecreate ($textbreite , $texthoehe);
 
$hintergund_farbe  = imagecolorallocate ($bild, 35, 35, 35);
$text_farbe        = imagecolorallocate ($bild, 255, 255, 255);
 
imagestring ($bild, $textnr, 0, 0, $email, $text_farbe);
imagepng ($bild);
?>