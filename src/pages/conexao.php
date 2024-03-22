<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "estoque";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

    // Caminho do arquivo SQL
    $sql_file = "../db/estoque(2).sql";

    // Verifica se o arquivo existe
    if (file_exists($sql_file)) {
        // Lê o conteúdo do arquivo SQL
        $sql_content = file_get_contents($sql_file);

        // Executa as consultas SQL
        if ($conn->multi_query($sql_content)) {
            echo "Arquivo SQL executado com sucesso!";
        } else {
            echo "Erro ao executar o arquivo SQL: " . $conn->error;
        }
    } else {
        echo "Arquivo SQL não encontrado!";
    }

?>