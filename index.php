<?php 

require_once("config.php");

//Carrega um usuario
// $root = new Usuario();

// $root->loadById(6);

// echo $root;

//Carrega uma lista de usuários 
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login

// $search = Usuario::search("roo");
// echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","123456");

echo $usuario;

 ?>