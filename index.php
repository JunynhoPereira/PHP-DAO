<?php 

require_once("config.php");

/*

Apagar Usuario

$user = new Usuario();
$user->loadById(23);
$user->delete();
echo $user;

*/

/*

Atualizando um usuario

$user = new Usuario();
$user->loadById(5);
$user->update("Professor","Senha123");
echo $user;

*/

/*
Inserir usuario usando a class __construct

$user = new Usuario("Teste2", "abcd");
$user->insert();
echo $user;

*/

/*

Inserir usuario de forma manual usando class insert

$user = new Usuario();

$user->setDeslogin("Teste");
$user->setDessenha("!@#$%");
$user->insert();
echo $user;

*/

/*

Buscar usuario usando o login e senha corretos

$usuario = new Usuario();
$usuario->login("Junynho","@12345");
echo $usuario;

*/


/*

Busca todos os usuarios que tenha informações do deslogin parecido, usado comando LIKE na classe search

$search = Usuario::search("o");
echo json_encode($search);

*/

/*

Buscar todos os usuario em ordem alfabetica por conta da classe getList

$lista = Usuario::getList();
echo json_encode($lista);

*/

/* 

Buscar o usuario que tenha o idcadastro igual ao loadById(??)

$user = new Usuario();
$user->loadById(37);
echo $user;


*/

/*

Buscar todos os dados da tabela tb_usuarios

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

*/
?>