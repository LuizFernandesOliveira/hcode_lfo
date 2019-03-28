<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$ol_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $ol_image, 0, 0, 0,0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($ol_image);
imagedestroy($new_image);