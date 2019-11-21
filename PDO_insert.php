<?php
$conn = new PDO("mysql:dbname=db_pagamentos;host=localhost","root","");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES  (:LOGIN, :PASSWORD)");
$login = "Felipe Machado";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso";


?>