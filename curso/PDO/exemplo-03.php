<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASS where idusuario = :ID");

$login = "Fernandes";
$pass = "1235";
$id = 2;

$stmt->bindParam(":LOGIN", $login);

$stmt->bindParam(":PASS", $pass);

$stmt->bindParam(":ID", $id);

$stmt->execute();