<?php
//array vazio
$pessoas = array();

//adicionar no array
array_push($pessoas, array(

	"nome" => "Luiz",
	"idade" => 21

));

echo json_encode($pessoas);



?>