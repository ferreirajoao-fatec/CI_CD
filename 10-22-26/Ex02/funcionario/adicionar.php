<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário</title>
    <style>
        /* Estilos inspirados no Bootstrap (card, form-label, form-control, btn) */
        /* As cores usam "currentColor" para acompanhar o tema da página (claro ou escuro) */
        .card-form {
            max-width: 600px;
            margin: 32px auto;
            padding: 24px;
            color: inherit;
            background-color: color-mix(in srgb, currentColor 4%, transparent);
            border: 1px solid color-mix(in srgb, currentColor 15%, transparent);
            border-radius: 8px;
        }
        .card-form h1 {
            margin: 0 0 24px;
            font-size: 28px;
        }
        .grupo {
            margin-bottom: 16px;
        }
        .linha {
            display: flex;
            gap: 16px;
        }
        .linha .grupo {
            flex: 1;
        }
        .rotulo {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: inherit;
        }
        .campo {
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 8px 12px;
            font-size: 16px;
            color: inherit;
            background-color: transparent;
            border: 1px solid color-mix(in srgb, currentColor 25%, transparent);
            color-scheme: light dark; /* deixa o ícone do calendário visível no tema escuro */
            border-radius: 6px;
            transition: border-color 0.15s, box-shadow 0.15s;
        }
        .campo:focus {
            outline: none;
            border-color: #86b7fe;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.25);
        }
        .acoes {
            display: flex;
            gap: 8px;
            margin-top: 24px;
        }
        .botao {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid transparent;
            cursor: pointer;
            text-decoration: none;
        }
        .botao-primario {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .botao-primario:hover {
            background-color: #0b5ed7;
        }
        .botao-secundario {
            color: inherit;
            background-color: transparent;
            border-color: color-mix(in srgb, currentColor 30%, transparent);
        }
        .botao-secundario:hover {
            background-color: color-mix(in srgb, currentColor 10%, transparent);
        }
    </style>
</head>
<body>
    <?php include '../menu.php'; ?>
    <div class="card-form">
        <h1>Adicionar Funcionário</h1>
        <form action="inserir.php" method="post">
            <div class="grupo">
                <label for="nome" class="rotulo">Nome</label>
                <input type="text" id="nome" name="nome" class="campo" placeholder="Nome completo" required>
            </div>

            <div class="grupo">
                <label for="email" class="rotulo">Email</label>
                <input type="email" id="email" name="email" class="campo" placeholder="nome@exemplo.com" required>
            </div>

            <div class="grupo">
                <label for="cargo" class="rotulo">Cargo</label>
                <input type="text" id="cargo" name="cargo" class="campo" placeholder="Ex: Analista" required>
            </div>

            <div class="linha">
                <div class="grupo">
                    <label for="salario" class="rotulo">Salário (R$)</label>
                    <input type="number" id="salario" name="salario" class="campo" step="0.01" placeholder="0,00" required>
                </div>

                <div class="grupo">
                    <label for="data_admissao" class="rotulo">Data de Admissão</label>
                    <input type="date" id="data_admissao" name="data_admissao" class="campo" required>
                </div>
            </div>

            <div class="acoes">
                <input type="submit" value="Adicionar Funcionário" class="botao botao-primario">
                <input type="reset" value="Limpar Campos" class="botao botao-secundario">
                <a href="listar.php" class="botao botao-secundario">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>
