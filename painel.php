<?php
require("header.php");
require "Conexao.class.php";
$conexao = new Conexao();
$registros = $conexao->listarRegistros();
?>
<section class="section-content">
    <div class="main-content">
        <div class="listar">
        <h1 class="section-title">Painel de Cadastro</h1>
            <table>
                <thead>
                    <tr class="table-listar">
                        <th>Id</th>
                        <th>User</th>
                        <th>Senha</th>
                        <th>Email</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody class="table-listar">
                    <?php foreach ($registros as $row) {
                        ?>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['user']; ?>
                        </td>
                        <td>
                            <?php echo $row['senha']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['celular']; ?>
                        </td>
                        <td><a href="form.update.php?id=<?php echo $row['id']; ?>"><img src="img/editar.png"
                                    alt="Atualizar" class="alter-img"></a></td>
                        <td><a href="excluir.php?id=<?php echo $row['id']; ?>"><img src="img/excluir.png"
                                    alt="Excluir" class="alter-img"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
</section>
</div>
<?php require "footer.php"; ?>