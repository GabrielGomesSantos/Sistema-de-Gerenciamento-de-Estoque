<?php
    include("conexao.php");
    $id_produto = $_GET['id']; 

    $sql = "SELECT * FROM produtos WHERE id = $id_produto"; 

    $result = mysqli_query($conn, $sql);

    

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
         $produto[] = $row;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/update.css">
    <link rel="shortcut icon" href="../../assets/img/Chilling_codes.png" type="image/x-icon">
    <title>Editando Produto: <?php echo($produto[0]['nome'])?></title>   
</head>

<?php include("navbar_editar.php")?>

<body>

    <div class="conteudoi">

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
                <button type="submit" class="button_update">SALVAR</button>
                <button class="button_update" onclick="window.location='../../index.php'">Voltar</button>

            </div>
        </form>
    </div>
      
</body>
</html>