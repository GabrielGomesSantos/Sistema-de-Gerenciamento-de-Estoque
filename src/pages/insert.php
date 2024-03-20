<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="processar_insert.php">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="name" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <input type="text" id="descricao" name="descricao" required><br><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" required><br><br>

        <input type="submit" value="Enviar">

    </form>


    <button onclick="window.location='read.php'">Ver Estoque</button>
    
</body>
</html>