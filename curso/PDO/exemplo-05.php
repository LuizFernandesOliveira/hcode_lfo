<?php



$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

$id = 2;

$stmt->execute(array($id));

$conn->rollBack();//cancela
$conn->commit();//confirma

?>