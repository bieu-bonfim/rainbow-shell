<?php

require_once '../base.php';

if(isset($_POST["action"]) && $_POST["action"] == 'register_user')
{
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
    $usuarios->registrar($nome, $sobrenome, $telefone, $email, $senha);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'auth_login')
{
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$usuarios->logar($email, $senha);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'logout')
{
    unset($_SESSION['usuario']);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'update_usuario')
{
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	
    $usuarios->alterarDados($id, $email, $nome, $sobrenome, $cpf, $telefone);
}
?>