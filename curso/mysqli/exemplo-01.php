<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {
    echo "Error".$conn->connect_error;
}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?, ?);");
$stmt->bind_param("ss", $login, $pass);
$login = "luiz";
$pass = "123";
$stmt->execute();