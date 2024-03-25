<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_inserir.css">
    <link rel="shortcut icon" href="../../  assets/img/Chilling_codes.png" type="image/x-icon">
    <title>Adicionando Produtos</title>
</head>

    <!-- header -->
    <?php include("navbar_inserir.php")?>
<body>

    <div class="conteudo">
        <form class="formulario" method="post" action="processar_insert.php">

            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
    
            <label for="descricao">Descrição:</label><br>
            <input type="text" id="descricao" name="descricao" required><br><br>
    
            <label for="quantidade">Quantidade:</label><br>
            <input type="number" id="quantidade" name="quantidade" required><br><br>
    
            <label for="preco">Preço:</label><br>
            <input type="number" id="preco" name="preco" step="0.01" required><br><br>
    
            <div class="buttuns">
                <button class="button_inserir" type="submit">Adicionar</button>
            
                <button class="button_inserir" onclick="window.location='../../index.php'">Voltar</button>
            </div>
        </form>
    </div>


    
    
</body>
</html>