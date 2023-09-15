<?php

include "Conexao.class.php";

session_start();

$user = $_POST['user'];
$senha = $_POST['senha'];


if(empty($user)){
    $_SESSION['mensagem'] = "Preencha o campo Usuario";
    header("Location: index.php");
}
elseif(empty($senha)){
    $_SESSION['mensagem'] = "Preencha o campo Senha";
    header("Location: index.php");

}
else{

    $conexao = new Conexao();
    $resultado = $conexao->verificarLogin($user, $senha);

    if($resultado['user'] == $user and $resultado['senha'] == $senha){

        $usuario = array("login" =>$resultado['user'], "senha" =>$resultado['senha']);

        $_SESSION['user'] = $user;


        //echo $usuario['login'];
        header("Location: campeonatos.php");
        
    }
    else{
        $_SESSION['mensagem']="Login ou senha inválidos";
        header("Location: index.php");
    }
 }
$conexao = new Conexao();
$user = $_POST['user'];
$senha = $_POST['senha'];

$resultado = $conexao->verificarLogin($user, $senha);

if ($resultado) {
    header('Location: campeonatos.php');
    exit();
} else {
    "Dados incorretos necessario verificar usuario ou senha";
    exit();
}