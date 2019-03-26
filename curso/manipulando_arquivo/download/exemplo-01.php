<?php

$link = "https://yt3.ggpht.com/a-/AAuE7mDaIPSwLi2eUtSdUZ0Knhmpfg6vTCe09VKiLw=s900-mo-c-c0xffffffff-rj-k-no";

$content = file_get_contents($link);

$parse = parse_url($link);

$base = basename($parse["path"]);

$file = fopen($base,"w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$base?>" alt="">
