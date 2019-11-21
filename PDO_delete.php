<?php
$conn = new PDO("mysql:dbname=db_pagamentos;host=localhost","root","");
$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE id_user = :ID ");
$id= 7;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo " Deletado com sucesso OK";
?>