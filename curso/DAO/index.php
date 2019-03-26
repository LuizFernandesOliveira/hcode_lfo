<?php

require_once ("config.php");

$sql = new Sql();
$usuarios = $sql->select("select * from tb_usuarios");
echo json_encode($usuarios);
echo "<br/>--------------------------<br/>";
/***

$root = new Usuario();
$root->loadById(2);
echo $root;
echo "<br/>--------------------------<br/>";


$lista = Usuario::getList();
echo json_encode($lista);
echo "<br/>--------------------------<br/>";

$search = Usuario::search("Fernandes");
echo json_encode($search);
echo "<br/>--------------------------<br/>";

$logar = new Usuario();
$logar->login("Fernandes", "1235");
echo $logar;
echo "<br/>--------------------------<br/>";

$aluno = new Usuario("Luiz", "321");
$aluno->insert();
echo $aluno;
echo "<br/>--------------------------<br/>";


$user = new Usuario();
$user->loadById(8);
$user->update("professor", "432");
echo $user;
echo "<br/>--------------------------<br/>";

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
**/

?>