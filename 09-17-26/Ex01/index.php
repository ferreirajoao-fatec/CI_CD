<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spider Calculator | Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container result-page">
        <div class="system-status">
            <span class="status-dot"></span>
            CÁLCULO FINALIZADO
        </div>

        <header class="hero result-header">
            <p class="eyebrow">QUEENS // WEB RESULT NETWORK</p>
            <h1>SPIDER CALC</h1>
            <p class="subtitle">Resultados das operações</p>
        </header>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $valor1 = (float) $_POST["valor1"];
            $valor2 = (float) $_POST["valor2"];

            $soma = $valor1 + $valor2;
            $subtracao = $valor1 - $valor2;
            $multiplicacao = $valor1 * $valor2;
            $potencia = $valor1 ** $valor2;
            $concatenacao = (string) $valor1 . (string) $valor2;

            function resultado($codigo, $nome, $simbolo, $expressao, $valor) {
                echo "<article class='operation-card'>";
                echo "<div class='operation-top'>";
                echo "<span class='operation-code'>" . $codigo . "</span>";
                echo "<span class='operation-symbol'>" . $simbolo . "</span>";
                echo "</div>";
                echo "<div class='operation-body'>";
                echo "<h3>" . $nome . "</h3>";
                echo "<p>" . $expressao . "</p>";
                echo "</div>";
                echo "<div class='operation-result'>";
                echo "<span>RESULTADO</span>";
                echo "<strong>" . $valor . "</strong>";
                echo "</div>";
                echo "</article>";
            }

            function erroResultado($codigo, $nome, $simbolo, $expressao) {
                echo "<article class='operation-card operation-error'>";
                echo "<div class='operation-top'>";
                echo "<span class='operation-code'>" . $codigo . "</span>";
                echo "<span class='operation-symbol'>" . $simbolo . "</span>";
                echo "</div>";
                echo "<div class='operation-body'>";
                echo "<h3>" . $nome . "</h3>";
                echo "<p>" . $expressao . "</p>";
                echo "</div>";
                echo "<div class='operation-result'>";
                echo "<span>ALERTA</span>";
                echo "<strong>DIVISOR ZERO</strong>";
                echo "</div>";
                echo "</article>";
            }
        ?>

            <section class="result-console">
                <div class="result-intro">
                    <div>
                        <span class="section-tag">WEB DATA // OUTPUT</span>
                        <h2>Rede de resultados</h2>
                        <p>Cada operação foi processada separadamente.</p>
                    </div>

                    <div class="web-badge" aria-hidden="true">
                        <span></span>
                    </div>
                </div>

                <div class="input-summary">
                    <div class="value-panel value-panel-a">
                        <span>VALOR 01</span>
                        <strong><?= $valor1 ?></strong>
                    </div>

                    <div class="versus">×</div>

                    <div class="value-panel value-panel-b">
                        <span>VALOR 02</span>
                        <strong><?= $valor2 ?></strong>
                    </div>
                </div>

                <div class="operations-grid">
                    <?php
                    resultado("01", "Soma", "+", "$valor1 + $valor2", $soma);
                    resultado("02", "Subtração", "−", "$valor1 - $valor2", $subtracao);
                    resultado("03", "Multiplicação", "×", "$valor1 × $valor2", $multiplicacao);

                    if ($valor2 != 0) {
                        $divisao = $valor1 / $valor2;
                        resultado("04", "Divisão", "÷", "$valor1 ÷ $valor2", $divisao);
                    } else {
                        erroResultado("04", "Divisão", "÷", "$valor1 ÷ $valor2");
                    }

                    if ($valor2 != 0) {
                        $modulo = (int) $valor1 % (int) $valor2;
                        resultado("05", "Módulo", "%", "$valor1 % $valor2", $modulo);
                    } else {
                        erroResultado("05", "Módulo", "%", "$valor1 % $valor2");
                    }

                    resultado("06", "Potência", "^", "$valor1 ^ $valor2", $potencia);
                    resultado("07", "Concatenação", ".", "$valor1 . $valor2", $concatenacao);
                    ?>
                </div>

                <div class="console-message">
                    <span class="pulse-dot"></span>
                    Processamento concluído. Nenhum vilão matemático detectado.
                </div>
            </section>

        <?php
        } else {
        ?>
            <div class="request-error">
                <span>ALERTA // 405</span>
                <strong>Nenhum cálculo foi enviado.</strong>
                <p>Volte para a calculadora e informe os dois valores.</p>
            </div>
        <?php
        }
        ?>

        <a href="index.html" class="back-link">Fazer outro cálculo</a>

        <footer class="system-footer">
            <span>SPIDER NETWORK</span>
            <span>MISSION COMPLETE</span>
        </footer>
    </main>
</body>
</html>
