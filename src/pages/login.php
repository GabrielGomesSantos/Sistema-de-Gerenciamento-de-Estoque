<?php
    //Inicio da Sessão

    session_start(); 
    
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
        $_SESSION['perm'] = null;
        if($users['user'] === $user and $users['senha'] === $password){
            $_SESSION['perm'] = $users['id_funcao'];
            print_r($users['id_funcao']);
            $encontrado = true;
            break;
        }
    }

    if(!$encontrado){
        header("Refresh: 0; URL=painel_de_login.php?ERROR=1");
        exit; 
    }
    

    mysqli_close($conn);


    header("location: ../../index.php")
?>