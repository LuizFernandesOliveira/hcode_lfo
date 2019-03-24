<?php 

require_once("exemplo-03.php");

$_SESSION["nome"] = "Luiz Fernandes de Oliveira";

echo session_id();


session_regenerate_id();

echo session_id();

 ?>
