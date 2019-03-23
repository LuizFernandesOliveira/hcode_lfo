<?php

$nome = "Luiz";

function teste($nome){
	echo $nome;
}

teste($nome);

//usando variavel global
$nome2 = "Luiz2";

function teste2(){
	global $nome2;
	echo $nome2;
}

teste2();
?>