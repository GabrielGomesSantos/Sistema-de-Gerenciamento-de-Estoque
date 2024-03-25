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
</head>
<body>

    <div class="content">
        <table>

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
                    <td class='preco'>R$ <?php echo $row["preco"]; ?></td>
                    <td> <a href='src/pages/update.php?id=<?php echo $row["id"]; ?>'><button>EDITAR</button></a></td>
                    <td> <a href='src/pages/delete.php?id=<?php echo $row["id"]; ?>'><button>REMOVER</button></a></td>
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
        
    
</body>
