<?php

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $name = $_POST["name"];
        $descricao = $_POST["descricao"];
        $qnt = $_POST["quantidade"];
        $preco = $_POST["preco"];
    }
    
        $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `qnt`, `preco`) VALUES ('$name','$descricao','$qnt','$preco')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    print_r($_POST);
    
    mysqli_close($conn);

?>