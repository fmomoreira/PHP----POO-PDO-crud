<?php
$conn = new PDO("mysql:dbname=db_pagamentos;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE id_user = ? ");
$id= 8;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo " Deletado com sucesso OK";
?>