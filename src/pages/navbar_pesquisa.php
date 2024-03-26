<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_navbar.css">
    <link rel="stylesheet" href="assets/css/style_navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Rubik+Scribble&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>
<header>
    
    <div class="header">
        <div class="img_logo">
            <img src="assets/img/Chilling_codes.png" alt="">
            <h1>Chilling Codes</h1>
        </div>

        <div class="pesquisar">
            <form class="pesquisar" action="index.php" method="GET">
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