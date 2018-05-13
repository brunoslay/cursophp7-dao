<?php 

require_once("config.php");

/*****

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

// $usuarios = $sql->select("SELECT idusuario, deslogin, dessenha, dtcadastro FROM dbphp7.tb_usuarios");


echo json_encode($usuarios);

echo "<pre>" , var_dump($usuarios) , "</pre>"


*******/


$root= new Usuario();

$root->loadById(6);

echo $root;

echo "<pre>" , print_r($root) , "</pre>"


?>