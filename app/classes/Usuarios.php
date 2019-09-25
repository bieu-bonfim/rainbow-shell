<?php

require_once 'Core.php';

class Usuarios extends Core{

    public function checarEmail($email){
        $sql = "SELECT * FROM tbl_usuario WHERE email = :email";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() != 0) return true;
        else return false;
    }

    public function registrar($nome, $sobrenome, $telefone, $email, $senha)
    {
        if(Usuarios::checarEmail($email)){
            echo Core::erro("Este e-mail já foi registrado!");
        } else{
            $tipo = 1;
            $sql = "INSERT INTO tbl_usuario(`id_usuario`, `nome`, `sobrenome`, `cpf`, `telefone`, `email`, `senha`, `tipo`) VALUES (null, :nome, :sobrenome, :cpf, :telefone, :email, :senha, :tipo)";
            $stmt = Database::prepare($sql);
            $senha = Core::hash($senha);
            $stmt->bindParam(":nome", $nome, \PDO::PARAM_STR);
            $stmt->bindParam(":sobrenome", $sobrenome, \PDO::PARAM_STR);
            $stmt->bindParam(":cpf", $cpf, \PDO::PARAM_INT);
            $stmt->bindParam(":telefone", $telefone, \PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, \PDO::PARAM_STR);
            $stmt->bindParam(":senha", $senha, \PDO::PARAM_STR);
            $stmt->bindParam(":tipo", $tipo , \PDO::PARAM_INT);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                //criar sessão
                echo Core::sucesso("Sucesso!");
            } else{
                echo Core::erro("Erro no sistema, contate o administrador!");
            }
        }
        
    }

    public function logar($email, $senha)
    {
        
        $sql = "SELECT * FROM tbl_usuario WHERE email = :email AND senha = :senha";
        $stmt = Database::prepare($sql);
        $senha = Core::hash($senha);
        $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, \PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchObject();

        // if ($stmt->rowCount() != 0) return true;
        if ($row) 
        {
            $_SESSION['usuario'] = $row;
            echo '<script type="text/javascript">
			window.location = ""
			</script>';
        }
        else{
            echo Core::erro("Os dados inseridos não estão corretos!");
        }

    }

    public function listarDadosCliente($id){
        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();
        return $row;
    }

    public function alterarImgCliente($id, $img){

        $imgUpdate = "imagens/avatars/users/".$id."/".$img;

        $sql = "UPDATE tbl_usuario SET imagem = :img WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->bindValue(":img", $imgUpdate, \PDO::PARAM_STR);
        $stmt->execute();
    }

    public function alterarDados($id, $email, $nome, $sobrenome, $cpf, $telefone){

        $sql = "UPDATE tbl_usuario SET nome = :nome, sobrenome = :sobrenome, cpf = :cpf, telefone = :telefone WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome, \PDO::PARAM_STR);
        $stmt->bindValue(":sobrenome", $sobrenome, \PDO::PARAM_STR);
        $stmt->bindValue(":cpf", $cpf, \PDO::PARAM_STR);
        $stmt->bindValue(":telefone", $telefone, \PDO::PARAM_STR);
        $stmt->execute();
    }

    public function EntreLogado()
	{
		if(!isset($_SESSION['usuario']))
		{
			echo '<script type="text/javascript">
			window.location = "index.php"
			</script>';
		}
	}

	public function EntreDeslogado()
	{
		if(isset($_SESSION['usuario']))
		{
			echo '<script type="text/javascript">
			window.location = "index.php"
			</script>';
		}
	}

}

?>

