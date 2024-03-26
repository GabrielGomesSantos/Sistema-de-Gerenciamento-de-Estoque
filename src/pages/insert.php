<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_inserir.css">
    <link rel="shortcut icon" href="../../  assets/img/Chilling_codes.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Adicionando Produtos</title>
</head>

    <!-- header -->
    <?php include("navbar_inserir.php")?>
<body>

    <div class="conteudo">
        <form class="formulario" method="post" action="processar_insert.php">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
    
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>
    
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>
    
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>
    
            <div class="buttuns">
                <button class="button_inserir" type="submit">Adicionar</button>
            
                <button class="button_inserir" onclick="window.location='../../index.php'">Voltar</button>
            </div>
        </form>
    </div>


    
    
</body>
</html>