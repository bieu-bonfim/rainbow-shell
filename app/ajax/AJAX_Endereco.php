<?php
require_once '../base.php';

$idEndereco = $_POST["idEndereco"];
$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$cidade = $_POST["cidade"];
$bairro = $_POST['bairro'];
$estado = $_POST["estado"];
$idUsuario = $_POST["idUsuario"];

if(isset($_POST["action"]) && $_POST["action"] == 'insert_endereco'){
    
    $enderecos->inserirEndereco($cep, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $idUsuario);
    Core::erro("aaa");

}
else if(isset($_POST["action"]) && $_POST["action"] == 'update_endereco')
{
    $enderecos->alterarEndereco($idEndereco, $cep, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $idUsuario);
    Core::erro("sss");
}

?>