<?php 




require_once 'Database.php';

class Core extends Database{
	
	public function hash($senha){
		return md5($senha);
	}

	public function erro($erro){
		return '<div class="alert alert-danger">'.$erro.'</div>';;
	}

	public function sucesso($sucesso){
		return '<div class="alert alert-success">'.$sucesso.'</div>';;
	}

	public function validarImagem($diretorio, $imgNome, $imgTamanho, $imgTmp, $submit)
	{
		// $target_dir = "imagens/itens/stamps/".$_SESSION['usuario']->id_cliente."/";
		$target_dir = $diretorio;
		$target_file = $target_dir . basename($imgNome);
		$uploadError = 0;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

		if (!file_exists("../../../".$diretorio)) {
			mkdir("../../../".$diretorio, 0777, true);
		}

		// Check if image file is a actual image or fake image
		if (isset($submit)) {

			if ($target_file == $diretorio) {
				$msg = "Você deve enviar uma imagem!";
				$uploadError = 1;
			} // Check if file already exists
			else if (file_exists($target_file)) {
				$msg = "A imagem já existe!";
				$uploadError = 2;
			} // Check file size
			else if ($imgTamanho > 5000000) {
				$msg = "O arquivo é muito grande!";
				$uploadError = 3;
			} // Check if $uploadOk is set to 0 by an error
			else if ($uploadError != 0) {
				$msg = "Seu arquivo não pode ser enviado!";
				
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($imgTmp, $_SERVER['DOCUMENT_ROOT'] . "/" . $target_file)) {
					$msg = "O arquivo " . basename($imgNome) . " foi enviado para revisão!";
				}
			}
		}

		echo $msg;
		return $uploadError;

	}

}



?>