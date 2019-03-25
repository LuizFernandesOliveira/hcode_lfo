<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Luiz Fernandes de Oliveira");
$cad->setEmail("luiz.fernandes@academico.ifrn.edu.br");
$cad->setSenha("#######");

$cad->registrarVenda();

echo $cad;
?>