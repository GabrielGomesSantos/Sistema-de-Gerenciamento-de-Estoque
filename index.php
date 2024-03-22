<?php
    session_start();

    if(!isset($_SESSION['perm'])){
?>

        <!-- Sem Login -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style_index.css">
        <title>Document</title>
    </head>
        
    <header>
            
        <div class="img_logo_login">
            <img src="assets/img/Chilling_codes.png" alt="">
        </div>

    </header>

         <br>
        <div class="conteudo">
            <h2>Seja Bem-Vindo</h2>
            <h3>Faça login para continuar</h3>

            <div class="button_login">
                <button onclick="window.location='src/pages/painel_de_login.php'">Login</button>
            </div>
        </div>

    </body>
    </html>

<body>
   
    <?php
        exit();
        }else?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/style_index.css">
            <title>Document</title>
        </head>
            
        <header>
                
            <div class="img_logo_login">
                <img src="assets/img/Chilling_codes.png" alt="">
            </div>

            <?php 
                if($_SESSION['perm'] == 1 or $_SESSION['perm'] == 3){
                    echo("
                        <div class='button_header'>
                            <button onclick='window.location=\"src/pages/insert.php\"'>
                                <p>Adicionar</p>
                            </button>
                        </div>
                    ");

                }


            ?>
    
        </header>
    
        </body>

                <div class="conteudo_index">
                    <?php include("src/pages/read.php")?>
                </div>
                <aside>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia veniam, libero ipsam consequuntur illo aliquam deserunt, praesentium placeat corrupti obcaecati consequatur aperiam sed facere fugit expedita? Reprehenderit nostrum soluta perspiciatis.</p>
                </aside>
        </html>
    <body>
    </html>