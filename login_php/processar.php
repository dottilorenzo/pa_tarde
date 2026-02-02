<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id_usuario'];
    $nome  = $_POST['nome'];
    $cpf   = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "Usuario $nome (ID: $id) cadastrado com sucesso!";
}
?>
