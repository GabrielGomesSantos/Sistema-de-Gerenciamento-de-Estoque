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
    <title>Seja Bem Vindo</title>
    <link rel="shortcut icon" href="assets/img/Chilling_codes.png" type="image/x-icon">
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
                <link rel="shortcut icon" href="assets/img/Chilling_codes.png" type="image/x-icon">
                <title>DashBoard</title>
            </head>

            <header>
                <?php include("src/pages/navbar_pesquisa.php");?>
            </header>

            <body>

                <div class="conteudo_index">
                    
                    <div class="estoque">
                        <h1>Estoque dos produtos:</h1>
                        <?php include("src/pages/read.php");?>
                    </div>

                    <div class="aviso">
                        <h1>Baixas Quantidades:</h1>                        
                        <?php include("src/pages/avisos.php");?>
                    </div>
                </div>

            </body>
            </html>