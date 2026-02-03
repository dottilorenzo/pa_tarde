<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema | Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="esquerda">
            <div class="overlay">
                <h1>Crie sua conta</h1>
                <p>Entre ao nosso grupo .</p>
            </div>
        </div>
        <div class="direita">
            <form action="processa_cadastro.php" method="POST">
                <h2>Cadastro</h2>
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <div class="row">
                    <input type="text" name="cpf" placeholder="CPF">
                    <input type="date" name="data_nasc">
                </div>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Cadastrar</button>
                <p>Ja tem conta? <a href="login.php">   Fazer Login    </a></p>
            </form>
        </div>
    </div>
</body>

</html>