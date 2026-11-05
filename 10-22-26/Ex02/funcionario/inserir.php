<?php
    $nome = $_POST  ['nome'];
    $email = $_POST ['email']; 
    $cargo = $_POST ['cargo'];
    $salario = $_POST ['salario'];
    $admissao = $_POST ['data_admissao'];
$sql = "INSERT INTO funcionarios (nome, email, cargo, salario, data_admissao)
            VALUES ('$nome', '$email', '$cargo', '$salario', '$admissao')";
    require_once("../conexao.php");
    /** @var mysqli $conexao */
    $resposta = mysqli_query($conexao, $sql);
    if ($resposta == true) {
        header("location: listar.php");
    }
?>