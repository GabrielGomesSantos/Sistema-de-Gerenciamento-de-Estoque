<?php 
    include("conexao.php"); 

    $sql = "SELECT * FROM produtos WHERE qnt <= 50 ORDER BY qnt ASC";
    $result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="assets/css/style_read.css">
</head>
<body>
    <div class="content">
        <table>

            <thead>

                <?php 
                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                ?>
                
                <tr>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>QUANTIDADE</th>
                    <th>PREÇO</th>
                </tr>
                
                <?php } else { ?>

                <div class="resultado"><p>NENHUM RESULTADO ENCONTRADO</p></div>;

                <?php } ?>
                
            </thead>

            <tbody> 

                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr id='<?php echo $row["id"]; ?>'>
                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["descricao"]; ?></td>
                    <td><?php echo $row["qnt"]; ?></td>
                    <td class='preco'>R$ <?php echo $row["preco"]; ?></td>
                </tr>
                <?php };?>
            </tbody>
        </table>
    </div>
</body>
</html>
