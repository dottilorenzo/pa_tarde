<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$data = $_POST['data_nasc'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, cpf, data_nasc, senha) VALUES ('$nome', '$email', '$cpf', '$data', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Sucesso!'); window.location.href='index.php';</script>";
} else {
    echo "Erro: " . $conn->error;
}

?>