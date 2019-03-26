<?php

$imagens = scandir("imagens");

$data = array();

foreach ($imagens as $img){
    if(!in_array($img, array(".", ".."))){

        $filename = "imagens".DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);

        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:m:i", filemtime($filename));
        $info['url'] = "http://localhost/hcode_lfo/curso/manipulando_arquivo/dir/".str_replace("\\", "/", $filename);

        array_push($data, $info);

    }
}

echo json_encode($data);