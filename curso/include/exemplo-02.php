<?php
//só inclui o arquivo
include "exemplo-01.php";

//obriga que o arquivo exista e sem erro e se ja existe ou nao
require_once "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;
?>