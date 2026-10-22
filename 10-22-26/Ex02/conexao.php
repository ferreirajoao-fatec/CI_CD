<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "empresa";
$porta = 3307;

$resultado = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

if (!$resultado) {
    echo 'Falha na conexão com o banco de dados: ' . mysqli_connect_error();
} else {
    echo 'Conexão realizada com sucesso';
}

?>
