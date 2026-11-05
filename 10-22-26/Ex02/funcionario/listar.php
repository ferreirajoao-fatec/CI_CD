<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <h1>Funcionários</h1>
    <input type="button" value="Adicionar Funcionário" onclick="window.location.href='adicionar.php'">
    <table border="1" style="border-collapse: collapse; margin-top: 16px; width: 100%;">
        <thead>
            <tr>
                <th style="padding: 10px 14px; text-align: left;">Nome</th>
                <th style="padding: 10px 14px; text-align: left;">Email</th>
                <th style="padding: 10px 14px; text-align: left;">Cargo</th>
                <th style="padding: 10px 14px; text-align: left;">Salário</th>
                <th style="padding: 10px 14px; text-align: left;">Data de Admissão</th>
                <th style="padding: 10px 14px; text-align: left;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão com o banco de dados
           $conexao = new PDO("mysql:host=localhost;port=3307;dbname=empresa", "root", "");
            // Consulta para obter todos os funcionários
            $stmt = $conexao->prepare("SELECT * FROM funcionarios");
            $stmt->execute();
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($funcionarios as $funcionario): ?>
                <tr>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['nome']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['email']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['cargo']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo number_format($funcionario['salario'], 2, ',', '.'); ?></td>
                    <td style="padding: 10px 14px;"><?php echo date('d/m/Y', strtotime($funcionario['data_admissao'])); ?></td>
                    <td style="padding: 10px 14px;">
                        <a href="editar.php?id=<?php echo $funcionario['id']; ?>" style="display: inline-block; padding: 6px 12px; font-size: 14px; color: #fff; background-color: #0d6efd; border: 1px solid #0d6efd; border-radius: 6px; text-decoration: none;">Editar</a>
                        <a href="excluir.php?id=<?php echo $funcionario['id']; ?>" onclick="return confirm('Deseja realmente excluir este funcionário?')" style="display: inline-block; padding: 6px 12px; font-size: 14px; color: #fff; background-color: #dc3545; border: 1px solid #dc3545; border-radius: 6px; text-decoration: none;">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>