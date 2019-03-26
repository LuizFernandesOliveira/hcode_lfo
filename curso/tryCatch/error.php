<?php

error_reporting(E_ALL & ~E_NOTICE);

function error_handler($code, $messege, $file, $line){

    echo json_encode(array(
       "code"=>$code,
       "messege"=>$messege,
       "line"=>$line,
       "file"=>$file
    ));

}

set_error_handler("error_handler");

echo 100/0;
