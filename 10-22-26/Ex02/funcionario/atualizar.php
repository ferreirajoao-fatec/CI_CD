<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $admissao = $_POST['data_admissao'];
    $sql = "UPDATE funcionarios SET
                nome = '$nome',
                email = '$email',
                cargo = '$cargo',
                salario = '$salario',
                data_admissao = '$admissao'
            WHERE id = '$id'";
    require_once("../conexao.php");
    /** @var mysqli $conexao */
    $resposta = mysqli_query($conexao, $sql);
    if ($resposta == true) {
        header("location: listar.php");
    }
?>

