<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
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

        <input type="submit" value="SALVAR">
    </form>  
</body>
</html>