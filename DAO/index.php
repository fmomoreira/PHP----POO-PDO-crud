<?php
require_once("config.php");

?>

<h1> Todos Usuarios </h1>
  <?php
  
  $sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
                        
echo json_encode($usuarios);
    
  ?>
