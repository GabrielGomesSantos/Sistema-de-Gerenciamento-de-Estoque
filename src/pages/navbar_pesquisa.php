<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_navbar.css">
    <link rel="stylesheet" href="assets/css/style_navbar.css">
</head>
<header>
    
    <div class="header">
        <div class="img_logo">
            <img src="assets/img/Chilling_codes.png" alt="">
        </div>

        <div class="pesquias">
             <!-- FORM PARA BUSCAR  -->
            <form action="read.php" method="GET">
                <input class='inputext' type="text" name="busca" id="busca" placeholder="Digite sua busca aqui">
            </form>
        </div>    

        <div class="button_header">

    
            <?php 
                
                if($_SESSION['perm'] == 2){
                    echo("
                        <div class='button_header'>
                            <button onclick='window.location=\"src/pages/insert.php\"'>
                                Adicionar
                            </button>

                            <button onclick='window.location=\"src/pages/sair.php\"'>
                                Sair
                            </button>
                        </div>
                    ");

                }else{
                    echo("
                    <div class='button_header'>
                        <button>
                            Sair
                        </button>
                    </div>
                ");
                }
            ?>
             
            
        </div>
    </div>

</header>

</html>