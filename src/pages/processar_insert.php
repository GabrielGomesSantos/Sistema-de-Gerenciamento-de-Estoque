<?php

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $qnt = $_POST["quantidade"];
        $preco = $_POST["preco"];
    }
    
        $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `qnt`, `preco`) VALUES ('$nome','$descricao','$qnt','$preco')";

        

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        header('Location: insert.php');
    
    mysqli_close($conn);

?>