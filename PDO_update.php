<?php


$conn = new PDO("mysql:dbname=db_pagamentos;host=localhost","root","");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE id_user = :ID ");
$login = "Borba";
$password = "Cynarraiz";
$id= 7;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo " Dados alterados com sucesso";

?>