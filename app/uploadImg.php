<?php

require_once 'base.php';

$diretorio = "PIT/RainbowShell_IMP/".$_POST["diretorio"];

if(isset($_POST["diretorio"]) && isset($_FILES["img-upload"]["name"]))
{
    if(Core::validarImagem($diretorio, $_FILES["img-upload"]["name"], $_FILES["img-upload"]["size"], $_FILES["img-upload"]["tmp_name"], $_POST["submit"]) == 0)
    {
        $estampaNome = $_POST['nome'];
        $estampaDesc = $_POST['desc'];
        $estampaTipo = $_POST['tipo'];
        $estampaComissao = $_POST['comissao'];
        $estampaImg = $_FILES["img-upload"]["name"];
        $estampaAutor = $_SESSION['usuario']->id_cliente;
        $estampas->enviarEstampa($estampaNome, $estampaDesc, $estampaImg, $estampaTipo, $estampaComissao, $estampaAutor);
    }
    
    $refer = $_POST['refer'];
    $_SESSION['msg'] = 'Estampa enviada para revisão!';
    $_SESSION['status'] = 'alert-success';    
    echo 
    "
        <script type='text/javascript'>
            window.location = '../".$refer.".php'
        </script>
    ";
}
else
{
    $_SESSION['msg'] = 'Por favor, insira uma imagem!';
    $_SESSION['status'] = 'alert-danger';    
    echo 
    "
        <script type='text/javascript'>
            window.location = '../".$refer.".php'
        </script>
    ";
}


?>