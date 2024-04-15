<?php 
    include("conexao.php"); 

    $busca = isset($_GET['busca']) ? $_GET['busca'] : '';
    $nome_da_table = 'produtos'; 
    
    if (!empty($busca)) { 
        $sql = "SELECT * FROM $nome_da_table WHERE nome LIKE '%$busca%'";
    } else {
        $sql = "SELECT * FROM $nome_da_table";
    }

    $result = mysqli_query($conn, $sql); // Executa a consulta SQL
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="assets/css/style_read.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="content">
            <table class="table table-dark table-striped">


        <thead>
            <?php 
                if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                    if($_SESSION["perm"] != 2){
            ?>
            <tr>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
                <th colspan=2>AÇÃO</th>
            </tr>
            <?php }else{ ?>
            <tr>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
            </tr>
            <?php }
                } else {
            ?>
            <div class="resultado">
                <img src="assets/img/notificacao.svg" width="712px" alt="">
                <br>
                <p class="error_busca">NENHUM RESULTADO ENCONTRADO</p>
            </div>
            <?php } ?>
        </thead>




        <tbody> 
            <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($_SESSION["perm"] != 2) {
            ?>
            <tr id='<?php echo $row["id"]; ?>'>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["descricao"]; ?></td>
                <td><?php echo $row["qnt"]; ?></td>
                <td class='preco' >R$ <?php echo $row["preco"]; ?></td>
                <td> <a href='src/pages/update.php?id=<?php echo $row["id"]; ?>'><button class="button_acao">EDITAR</button></a></td>
                <td> <a href='src/pages/delete.php?id=<?php echo $row["id"]; ?>'><button class="button_acao">REMOVER</button></a></td>
            </tr>
            <?php } else { ?>
            <tr id='<?php echo $row["id"]; ?>'>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["descricao"]; ?></td>
                <td><?php echo $row["qnt"]; ?></td>
                <td class='preco'>R$ <?php echo $row["preco"]; ?></td>
            </tr>
            <?php } } ?>
        </tbody>
        </table>
    </div> 
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
