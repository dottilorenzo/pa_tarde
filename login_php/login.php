<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema | Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="esquerda" style="background-image: url('cadastrar.php estilo.css index.php login.php');">
             <div class="overlay">
                <h1>    Bem-vindo!      </h1>
                <p>   ENTRE NO NOSSO SITE QUE CUIDA DA SUA SAÚDE </p>
            </div>
        </div>
        <div class="direita">
            <form action="processa_login.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Seu E-mail" required>
                <input type="password" name="senha" placeholder="Sua Senha" required>
                <button type="submit">Entrar</button>
                <p>Nao tem conta? <a href="index.php">Cadastre-se</a></p>
            </form>
        </div>
    </div>
</body>

</html>