<?php $nome = $_POST['nome'];
$total = (float) $_POST['total'];
$idade = $_POST['idade'];
$parcelas = isset($_POST['parcelas']) ? (int) $_POST['parcelas'] : 1;

// Garante que fique entre 1 e 6
if ($parcelas < 1) $parcelas = 1;
if ($parcelas > 6) $parcelas = 6;

if(isset($_POST['fidelidade'])){
    $cartao = "Sim";
} else {
    $cartao = "Não";
}

switch ($idade) {
    case "51-70":
        $descontoIdade = 5;
        break;
    case ">=70":
        $descontoIdade = 7;
        break;
    default: 
        $descontoIdade = 0;
}


if ($cartao == "Sim") {
    $descontoCartao = 5;
} else {
    $descontoCartao = 0;
}


$percentual = $descontoIdade + $descontoCartao;
$valorDesconto = $total * $percentual / 100;
$totalFinal = $total - $valorDesconto;
$valorParcelaEscolhida = $totalFinal / $parcelas;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paracetaloka</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="receita">
        <header class="topo">
            <span class="cruz" aria-hidden="true"></span>
            <h1>Farmácia Paracetaloka</h1>
            <p class="slogan">Resumo do pedido</p>
        </header>

        <form action="index.html">
            <ul class="resultado">
                <li>
                    <span>Cliente</span>
                    <strong><?= htmlspecialchars($nome) ?></strong>
                </li>
                <li>
                    <span>Total do Pedido</span>
                    <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong>
                </li>
                <li>
                    <span>Desconto por Idade</span>
                    <strong><?= $descontoIdade ?>%</strong>
                </li>
                <li>
                    <span>Cartão Fidelidade</span>
                    <strong><?= $cartao ?> (<?= $descontoCartao ?>%)</strong>
                </li>
                <li>
                    <span>Desconto Total</span>
                    <strong class="desconto">- R$ <?= number_format($valorDesconto, 2, ',', '.') ?> (<?= $percentual ?>%)</strong>
                </li>
                <li>
                    <span>Parcelamento Escolhido</span>
                    <strong><?= $parcelas ?>x de R$ <?= number_format($valorParcelaEscolhida, 2, ',', '.') ?></strong>
                </li>
            </ul>

            <div class="total-final">
                <span>Total a Pagar</span>
                <strong>R$ <?= number_format($totalFinal, 2, ',', '.') ?></strong>
            </div>

            <div class="parcelas-wrapper">
                <div class="parcelas-header">
                    <h3>Opções de Parcelamento (1x até <?= $parcelas ?>x)</h3>
                    <p class="parcelas-desc">Cálculo de cada parcela com laço de repetição</p>
                </div>

                <div class="parcelas-comparativo">
                    <!-- Versão 1: Laço FOR -->
                    <div class="parcelas-col">
                        <span class="badge-laco">Versão com FOR</span>
                        <ul class="lista-parcelas">
                            <?php for ($i = 1; $i <= $parcelas; $i++): ?>
                                <?php $parcelaFor = $totalFinal / $i; ?>
                                <li <?= ($i == $parcelas) ? 'class="ativa"' : '' ?>>
                                    <span class="vezes"><?= $i ?>x de</span>
                                    <strong class="valor">R$ <?= number_format($parcelaFor, 2, ',', '.') ?></strong>
                                    <?php if ($i == $parcelas): ?>
                                        <span class="tag-escolhida">Escolhida</span>
                                    <?php endif; ?>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <!-- Versão 2: Laço WHILE -->
                    <div class="parcelas-col">
                        <span class="badge-laco">Versão com WHILE</span>
                        <ul class="lista-parcelas">
                            <?php 
                            $j = 1;
                            while ($j <= $parcelas) {
                                $parcelaWhile = $totalFinal / $j;
                                $classe = ($j == $parcelas) ? "class='ativa'" : "";
                                $tag = ($j == $parcelas) ? " <span class='tag-escolhida'>Escolhida</span>" : "";
                                echo "<li {$classe}>";
                                echo "<span class='vezes'>{$j}x de</span> ";
                                echo "<strong class='valor'>R$ " . number_format($parcelaWhile, 2, ',', '.') . "</strong>";
                                echo $tag;
                                echo "</li>";
                                $j++;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <button type="submit">
                <span class="metade-a">Novo</span>
                <span class="metade-b">Pedido</span>
            </button>
        </form>
    </main>
</body>

</html>
