<?php

require_once 'Core.php';

class Estampas extends Core{

    public function enviarEstampa($nome, $desc, $img, $tipo, $comissao, $autor)
    {

        $imgInsert = "imagens/itens/stamps/".$autor."/".$img;

        $sql = "INSERT INTO `tbl_estampa`(`id_estampa`, `tipo`, `nome`, `descricao`, `imagem`, `comissao`, `ativa`, `tbl_cliente_id_cliente`) VALUES (null, :tipo, :nome, :descricao, :imagem, :comissao, 0, :autor)";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":nome", $nome, \PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $desc, \PDO::PARAM_STR);
        $stmt->bindParam(":imagem", $imgInsert, \PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $tipo, \PDO::PARAM_STR);
        $stmt->bindParam(":comissao", $comissao , \PDO::PARAM_INT);
        $stmt->bindParam(":autor", $autor, \PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            //criar sessão
            echo Core::sucesso("Endereço atualizado!");
        } else{
            echo Core::erro("Erro no sistema, contate o administrador!");
        }
        
    }

    public function listarEstampasCliente($id){
        $sql = "SELECT * FROM tbl_estampa WHERE tbl_cliente_id_cliente = :idCliente";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":idCliente", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function deletarEstampa($id){
        $sql = "DELETE FROM tbl_estampa WHERE id_estampa = :idEstampa";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":idEstampa", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    
}

?>

