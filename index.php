<?php 

require_once("config.php");

$user = new Usuario();
$user->loadById(37);
echo $user;

/*

Buscar todos os dados da tabela tb_usuarios

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

*/
?>