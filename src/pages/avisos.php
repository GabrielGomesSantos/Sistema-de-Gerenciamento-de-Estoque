<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <aside>

            <!-- TABLE PARA IMPRIMIR O BANCO DE DADOS  -->
    <div class="content">
    <table border="1">

       
        <thead>
            
                <?php 
                    include("conexao.php"); 

                    $busca = isset($_GET['busca']) ? $_GET['busca'] : '';
                    $nome_da_table = 'produtos';
                    $qnt_aviso = '30';

                if (!empty($busca)) { 
                    $sql = "SELECT * FROM $nome_da_table WHERE nome LIKE '%$busca%'";
                } else {
                    $sql = "SELECT * FROM $nome_da_table WHERE qnt <= '$qnt_aviso' ";
                }
            ?>
            <?php
                
                
                $result = mysqli_query($conn, $sql); 
     
                    
                    
                    $result = mysqli_query($conn, $sql); 


                    if (mysqli_num_rows($result) > 0) { 
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

    </aside>
</body>
</html>