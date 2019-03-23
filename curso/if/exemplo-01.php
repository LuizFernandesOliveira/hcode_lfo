<?php

$qualASuaIdade = 21;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCriança){

	echo "Criança";

} elseif ($qualASuaIdade < $idadeMaior) {
	
	echo "Adolecente";

}elseif ($qualASuaIdade < $idadeMaior) {
	
	echo "Adulto";

}else{

	echo "Idoso";

}

echo ($qualASuaIdade < $idadeMaior)?"menor idade" : "Maior idade";

?>