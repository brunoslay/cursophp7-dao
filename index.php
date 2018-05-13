<?php 

require_once("config.php");

/*****

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

// $usuarios = $sql->select("SELECT idusuario, deslogin, dessenha, dtcadastro FROM dbphp7.tb_usuarios");


echo json_encode($usuarios);

echo "<pre>" , var_dump($usuarios) , "</pre>"


*******/

/////////////////// Carrega um usuário
// $root= new Usuario();

// $root->loadById(6);

// echo $root;

// echo "<pre>" , print_r($root) , "</pre>";
// echo "______________________________________________<p>";

/////////////// Carrega uma lista de usuário 
/*******************************
$lista = Usuario::getList();

echo json_encode($lista);
echo "<pre>" , print_r($lista) , "</pre>";
echo "______________________________________________<p>";
*/

/////////////////// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("st");

// echo json_encode($search);

// echo "<pre>" , print_r($search) , "</pre>";
// echo "______________________________________________<p>";

////////////////////// Carrega um usuario usando login e senha
// $usuario = new Usuario();
// $usuario->login("Slay", "123");

// echo $usuario;
// echo "<br>______________________________________________<p>";


////////////////// Criando um novo usuario
// $aluno = new Usuario("Steikson", "my123");

// // $aluno->setDeslogin('qwe');
// // $aluno->setDessenha('111');

// $aluno->insert();

// echo $aluno;

///////////// Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(67);

// $usuario->update("alterado", "678");

// echo $usuario;

/////////// Deletar um usuario
$usuario = new Usuario();
$usuario->loadById(69);

$usuario->delete();

echo $usuario;


?>