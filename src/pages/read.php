<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- FORM PARA BUSCAR  -->
    <form action="read.php" method="GET">
        <input class='inputext' type="text" name="busca" id="busca" placeholder="Digite sua busca aqui">
        <input class='botaobuscar' type="submit" value="BUSCAR">
    </form>
   
    <!-- TABLE PARA IMPRIMIR O BANCO DE DADOS  -->
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
                
                 asd
                $result = mysqli_query($conn, $sql); // Executa a consulta SQL

                if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                    echo "<tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>DESCRIÇÃO</th>
                            <th>QUANTIDADE</th>
                            <th>PREÇO</th>
                            <th colspan=2>AÇAO</th>
                          </tr>";
                } else {
                    echo "<div class='resultado'><p>NENHUM RESULTADO ENCONTRADO</p></div>";
                }

                // Loop para imprimir os resultados
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>$row[id]</td>
                            <td>$row[nome]</td>
                            <td>$row[descricao]</td>
                            <td>$row[qnt]</td>
                            <td>$row[preco]</td>
                            <td> <a href='update.php?id=$row[id]'>EDITAR</a></td>
                            <td> <a href='#update'>REMOVER</a></td>
                          </tr>";
                }
            ?>
        </thead>
        <tbody>  
        </tbody>
    </table>    
</body>
</html>