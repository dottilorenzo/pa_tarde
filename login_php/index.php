<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="lado-esquerdo">
            <img src="https://aldeiaconteudo.com.br/wp-content/uploads/2019/06/ciclo-de-vida-do-meme-aldeia-marketing-de-conteudo.jpg">
        </div>
        <div class="lado-direito">
            <form action="processar.php" method="POST">
                <h2>cadastro</h2>
                <input type="text" name="id_usuario" placeholder="ID" required>
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="text" name="cpf" placeholder="CPF" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>

                <button type="submit">Entrar</button>

            </form>
    </div>
    
</body>
</html>