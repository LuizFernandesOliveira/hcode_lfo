<?php 

require_once("exemplo-03.php");

//limpa a variavel
session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];
 ?>