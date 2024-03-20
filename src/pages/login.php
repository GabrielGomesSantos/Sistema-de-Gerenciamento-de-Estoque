<?php
    //arquivo de conexao com banco de dados
    include("conexao.php");

    //Variaveis que vem do painel de login

    $user = $_POST['username'];
    $password = $_POST['password'];

    //Buscar Usuario no Banco de dados

    $sql = "SELECT * FROM `usuarios`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        $saida[] = $row;
        }
        } else {
        echo "0 results";
    }

    foreach($saida as $users){
        $encontrado = false;
        if($users['user'] === $user and $users['senha'] === $password){
            echo("Bem-Vindo " . $users['user']);
            $encontrado = true;
            exit();
        }
    }

    
    if(!$encontrado){
        echo("Usuario e/ou senha invalidos");
    }

    mysqli_close($conn);



?>