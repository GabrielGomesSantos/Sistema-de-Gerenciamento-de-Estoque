<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title>Document</title>   
=======
    <link rel="stylesheet" href="../../assets/css/update.css">
    <link rel="shortcut icon" href="../../assets/img/Chilling_codes.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Archivo+Black&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Editando Produto: <?php echo($produto[0]['nome'])?></title>   
>>>>>>> Stashed changes
</head>

<body>

    <!-- FORM PARA EDITAR AS INFORMAÇOES ALTERADAS -->
    <form action="save.php" method="GET">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" required>
        <label for="quantidade">Quantidade: </label>
        <input type="number" name="qnt" required>
        <label for="preco">Preço: </label>
        <input type="number" name="preco" required>
        <input type="hidden" name="id" value=<?php echo $_GET["id"]?>>

<<<<<<< Updated upstream
        <input type="submit" value="SALVAR">
    </form>  
=======
        <form class="formulario" action="save.php" method="GET">

            <label for="nome">Nome: </label>
            <input type="text" name="nome" value="<?php echo("{$produto[0]['nome']}")?>" required>
    
            <label for="descricao">Descrição: </label>
            <input type="textbox" name="descricao" value="<?php echo("{$produto[0]['descricao']}")?>" required>
    
            <label for="quantidade">Quantidade: </label>
            <input type="number" name="qnt" value="<?php echo("{$produto[0]['qnt']}")?>" required>
    
            <label for="preco">Preço: </label>
            <input type="number" name="preco" value="<?php echo("{$produto[0]['preco']}")?>" required>
    
            <input type="hidden" name="id" value=<?php echo $_GET["id"]?>>
    
            <div class="buttons">
                <button type="submit" class="button_update">Salvar</button>
                <button class="button_update" onclick="window.location='../../index.php'">Voltar</button>

            </div>
        </form>
    </div>
      
>>>>>>> Stashed changes
</body>
</html>