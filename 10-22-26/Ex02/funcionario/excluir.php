<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM funcionarios WHERE id = '$id'";
    require_once("../conexao.php");
    /** @var mysqli $conexao */
    $resposta = mysqli_query($conexao, $sql);
    if ($resposta == true) {
        header("location: listar.php");
    }
?>

