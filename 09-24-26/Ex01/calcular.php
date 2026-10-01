<?php 
$nome = $_POST['nome'];
$total = (float) $_POST['total'];
$idade = $_POST['idade'];

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
            </ul>

            <div class="total-final">
                <span>Total a Pagar</span>
                <strong>R$ <?= number_format($totalFinal, 2, ',', '.') ?></strong>
            </div>

            <button type="submit">
                <span class="metade-a">Novo</span>
                <span class="metade-b">Pedido</span>
            </button>
        </form>
    </main>
</body>

</html>
