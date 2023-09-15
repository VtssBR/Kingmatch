<?php
require "header.php";
require "Conexao.class.php";
$conexao = new Conexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];

        $dados = array(':id' => $id, 'user' => $user, 'senha' => $senha, 'email' => $email, 'celular' => $celular);
        $conexao->editarRegistro($id, $dados);
        header("Location: painel.php");
    }
     else {
    echo 'Metodo Invalido';
}
?>

