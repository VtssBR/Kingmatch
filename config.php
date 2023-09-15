<?php
require "Conexao.class.php";
$conexao = new Conexao();
//CADASTRAR REGISTRO
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['cadastrar'])){
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $novoRegistro = array("user"=>$user,"senha"=>$senha,"email"=>$email, "celular"=>$celular);
    $idNovoRegistro = $conexao->cadastrarRegistro($novoRegistro);
    
    header('Location: index.php');
    exit();

}



