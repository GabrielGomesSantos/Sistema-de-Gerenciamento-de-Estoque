<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&display=swap" rel="stylesheet">
</head>
<body>

   
    <!-- TABLE PARA IMPRIMIR O BANCO DE DADOS  -->
    <div class="content">
    <table border="1">

       
        <thead>
            
                <?php 
                    include("conexao.php"); // PUXA A CONEXAO DO BANCO DE DADOS

                    $busca = isset($_GET['busca']) ? $_GET['busca'] : '';// Captura o valor da busca
                    $nome_da_table = 'produtos'; // Defina o nome da tabela
                    // Defina a categoria para a busca

                if (!empty($busca)) { // Verifica se a busca não está vazia
                    $sql = "SELECT * FROM $nome_da_table WHERE nome LIKE '%$busca%'";
                } else {
                    $sql = "SELECT * FROM $nome_da_table";
                }
            ?>
            <?php
                
                
                $result = mysqli_query($conn, $sql); // Executa a consulta SQL
     
                    
                    
                    $result = mysqli_query($conn, $sql); // Executa a consulta SQL


                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                        echo "<tr>
                                
                                <th>NOME</th>
                                <th>DESCRIÇÃO</th>
                                <th>QUANTIDADE</th>
                                <th>PREÇO</th>
                                <th colspan=2>AÇÃO</th>
                            </tr>";
                    } else {
                        echo "<div class='resultado'><p>NENHUM RESULTADO ENCONTRADO</p></div>";
                    }

                
                ?>
            
        </thead>
        
        <tbody> 
            <?php 
                 // Loop para imprimir os resultados
                 while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<tr id='$row[id]'>
                           
                            <td>$row[nome]</td>
                            <td>$row[descricao]</td>
                            <td>$row[qnt]</td>
                            <td class='preco'>R$:$row[preco]</td>
                            <td> <a href='update.php?id=$row[id]'><button>EDITAR</button></a></td>
                            <td> <a href=''><button>REMOVER</button></a></td>
                          </tr>";
                   
                }
             
            
            
            ?> 
        </tbody>
    </table>    
    <div>            
</body>
</html>