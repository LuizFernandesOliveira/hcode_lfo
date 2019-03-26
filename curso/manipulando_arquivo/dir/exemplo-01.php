<?php

//criar se existe
$name = "imagens";

if(!is_dir($name)){
    mkdir($name);
    echo "diretório $name criado com sucesso";
}else{
    //se existir apaga
    rmdir($name);
    echo " o diretório já existe: $name foi removido";
}