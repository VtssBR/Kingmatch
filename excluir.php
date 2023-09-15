<?php
    require "Conexao.class.php";
    $conexao = new Conexao();
    $idRegistroExcluir = $_GET['id'];
    $conexao->excluirRegistro($idRegistroExcluir);
    header("Location: painel.php");
?>

