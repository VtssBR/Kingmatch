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
        <form action="config.php" method="POST" class="formulario">
            <h1>Registrar-se</h1>
            <label for="user"></label>
            <input type="text" name="user" id="user" class="label-form" placeholder=" Usuario">
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" class="label-form" placeholder=" Senha">
            <label for="email"></label>
            <input type="email" name="email" id="email" class="label-form" placeholder=" Email">
            <label for="celular"></label>
            <input type="number" name="celular" id="celular" class="label-form" placeholder=" Celular">
            <input type="submit" name="cadastrar" value="Cadastrar" class="btn-cadastrar">
            <a href="index.php" class="entrar">Entrar</a>
    </form>
    </div>
</div>
