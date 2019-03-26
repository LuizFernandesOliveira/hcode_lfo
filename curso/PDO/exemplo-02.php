<?php


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (:LOGIN,:PASS );");

$login = "Fernandes";
$pass = "12345";

$stmt->bindParam(":LOGIN", $login);

$stmt->bindParam(":PASS", $pass);

$stmt->execute();



?>