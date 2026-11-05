<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <h1>Bem vindo à Empresa: Empresa</h1>
        <ul style="list-style: none; padding: 0; margin-top: 24px; display: flex; gap: 12px;">
            <li><a href="login.php" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #0d6efd; border: 1px solid #0d6efd; border-radius: 6px; text-decoration: none;">Login</a></li>
            <li><a href="cadastro.php" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #0d6efd; background-color: transparent; border: 1px solid #0d6efd; border-radius: 6px; text-decoration: none;">Cadastro</a></li>
        </ul>
    </div>
</body>

</html>