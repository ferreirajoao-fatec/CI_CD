<?php
$numero = isset($_GET["numero"]) && is_numeric($_GET["numero"]) ? $_GET["numero"] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($numero !== null): ?>
            <h1>Tabuada do <?= htmlspecialchars($numero) ?></h1>
            
            <table>
                <thead>
                    <tr>
                        <th>Multiplicação</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <tr>
                            <td><?= htmlspecialchars($numero) ?> x <?= $i ?></td>
                            <td class="resultado-destaque"><?= $numero * $i ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h1>Atenção</h1>
            <div class="alerta">
                Por favor, informe um número válido para calcular a tabuada.
            </div>
        <?php endif; ?>

        <div class="voltar-container">
            <a href="index.html" class="btn-voltar">Voltar</a>
        </div>
    </div>
</body>
</html>