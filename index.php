<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kingmatch</title>
        <link rel="shortcut icon" href="IMG/matchmaking.png" type="image/x-icon">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="CSS/style.css">
        </head>
<div class="container">
    <div class="texto-principal">
        <h1 class="txt-h1">AQUI NA KINGMATCH VOCÊ FAZ SEUS CAMPEONATOS E PARTIDAS MONETARIAS
        </h1>
        <p>Organize partidas valendo dinheiro e adminstre um campeonato amador ao profissional
    </p>
    </div>
    <div class="card-formulario">
        <form action="login.php" method="POST" class="formulario">
            <h1>Login</h1>
            <label for="user"></label>
            <input type="text" name="user" id="user" class="label-form" placeholder=" Usuario">
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" class="label-form" placeholder=" Senha">
            <input type="submit" class="btn-entrar" value="Entrar"></a>
            <a href="registrar-se.php"class="btn-registrar-se">Registrar-se</a>
            <?php
        session_start();
        if(isset($_SESSION['mensagem'])){
            $msg=$_SESSION['mensagem'];

            echo"<p>" .$msg. "</p>";
            unset($_SESSION['mensagem']);
        }    
    ?>
    </form>
    
    </div>
</div>
