<?php
require "header.php";
require "Conexao.class.php";
$conexao = new Conexao();

$id = $_GET['id'];

$registros_id = $conexao->listarRegistrosID($id);

if ($registros_id) {
    $dados = $registros_id;

} else {

    echo 'Cliente nao encontrado';
}
?>
<section class="section-content">
    <div class="main-content">
        <div class="card-formulario">
            <form action="update.php" method="POST" class="formulario">
                <h1>Alteração de Cadastro</h1>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="user">Usuário:</label>
                    <input type="text" name="user" id="user" class="label-form" placeholder="Usuário" value="<?php echo isset($dados['user']) ? $dados['user'] : ''; ?>">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="label-form" placeholder="Senha" value="<?php echo isset($dados['senha']) ? $dados['senha'] : ''; ?>">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="label-form" placeholder="Email" value="<?php echo isset($dados['email']) ? $dados['email'] : ''; ?>">
                    <label for="celular">Celular:</label>
                    <input type="number" name="celular" id="celular" class="label-form" placeholder="Celular" value="<?php echo isset($dados['celular']) ? $dados['celular'] : ''; ?>">
                    <input type="submit" name="atualizar" value="Editar" class="btn-cadastrar">
            </form>
        </div>
    </div>
</section>

<?php require "footer.php"; ?>