<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
    require_once("../conexao.php");
    /** @var mysqli $conexao */
    $resposta = mysqli_query($conexao, $sql);
    $funcionario = mysqli_fetch_assoc($resposta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <h1>Editar Funcionário</h1>
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $funcionario['nome']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $funcionario['email']; ?>" required><br><br>

        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo" value="<?php echo $funcionario['cargo']; ?>" required><br><br>

        <label for="salario">Salário:</label>
        <input type="number" id="salario" name="salario" step="0.01" value="<?php echo $funcionario['salario']; ?>" required><br><br>

        <label for="data_admissao">Data de Admissão:</label>
        <input type="date" id="data_admissao" name="data_admissao" value="<?php echo $funcionario['data_admissao']; ?>" required><br><br>

        <input type="submit" value="Salvar Alterações">
        <input type="button" value="Cancelar" onclick="window.location.href='listar.php'">
    </form>
</body>
</html>

