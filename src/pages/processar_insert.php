<?php

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $name = $_POST["name"];
        $descricao = $_POST["descricao"];
        $qnt = $_POST["qnt"];
        $preco = $_POST["preco"];
    }
        
        $sql = "INSERT INTO `produtos`(`id`, `nome`, `descricao`, `qnt`, `preco`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    header('Location: insert.php');
    
    mysqli_close($conn);

?>