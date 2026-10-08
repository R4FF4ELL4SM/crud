<?php
require_once "conexao.php";

class Pessoa
{
    private $id_pessoa;
    private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdPessoa() {
        return $this->id_pessoa;
    }

    public function criar() {
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO pessoa (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $this->getNome());
            $stmt->execute();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }
    public static function listar(){

        try{
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM pessoa";
            $stm = $conexao->prepare($sql);
            $stm->execute();
            $lista = $stm->fetchAll();
            return $lista;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}