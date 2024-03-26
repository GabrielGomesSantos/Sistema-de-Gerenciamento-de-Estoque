<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_navbar.css">
    <link rel="stylesheet" href="assets/css/style_navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<header>
    
    <div class="header">
        <div class="img_logo">
            <img src="assets/img/Chilling_codes.png" alt="">
        </div>

        <div class="pesquias">

            <form action="index.php" method="GET">
                <input class='inputext' type="text" name="busca" id="busca" placeholder="Digite sua busca aqui">
            </form>
        </div>    

        

    
            <?php 
                
                if($_SESSION['perm'] == 1 or $_SESSION['perm'] == 3){
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
                        <button onclick='window.location=\"src/pages/sair.php\"'>
                            Sair
                        </button>
                    </div>
                ");
                }
            ?>
             
            
        
    </div>

</header>

</html>