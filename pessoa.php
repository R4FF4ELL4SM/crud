<?php
require_once "conexao.php";

class Pessoa
{
    private $id_pessoa;
    private $nome;

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