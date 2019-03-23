<?php


$frase = "A repetição é a mae da retenção";

$palavra = "mae";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q)

var_dump($q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);
?>