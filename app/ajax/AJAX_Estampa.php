<?php
require_once '../base.php';


if(isset($_POST["action"]) && $_POST["action"] == 'register_estampa'){
	
	$nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $img = $_POST["img"];
	
	$estampas->enviarEstampa($nome, $desc, $img, $tipo, $comissao, $autor);
}

if(isset($_POST["action"]) && $_POST["action"] == 'delete_estampa'){
	
    $idEstampa = $_POST['idEstampa'];
	
	$estampas->deletarEstampa($idEstampa);
}

?>