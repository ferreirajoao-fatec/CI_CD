<?php
$numero = isset($_POST["numero"]) && is_numeric($_POST["numero"]) ? (int)$_POST["numero"] : null;
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
    <div class="card">
        <?php if ($numero !== null && $numero >= 1 && $numero <= 10): ?>
            <div class="badge">Resultado com While</div>
            <h1>Tabuada do <span><?= $numero ?></span></h1>
            <p class="subtitulo">Valores calculados de 1 a 10:</p>

            <ul class="tabuada-lista">
                <?php 
                $i = 1;
                while ($i <= 10) {
                    $resultado = $numero * $i;
                    echo "<li class='tabuada-item'>";
                    echo "<span class='operacao'>{$numero} &times; {$i}</span>";
                    echo "<span class='igual'>=</span>";
                    echo "<span class='resultado'>{$resultado}</span>";
                    echo "</li>";
                    $i++;
                }
                ?>
            </ul>
        <?php else: ?>
            <div class="alerta-erro">
                <h3>Atenção</h3>
                <p>Por favor, insira um número válido entre 1 e 10.</p>
            </div>
        <?php endif; ?>

        <a href="index.html" class="btn btn-voltar">&larr; Voltar</a>
    </div>
</body>
</html>