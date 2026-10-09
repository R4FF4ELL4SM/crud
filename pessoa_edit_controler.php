<?php
require_once "pessoa.php";

$id = $_POST['id'];
$nome = $_POST['nome'];

$pessoa = new Pessoa($id);

$pessoa->setNome($nome);
$pessoa->atualizar();

header("Location: index.php");
exit();