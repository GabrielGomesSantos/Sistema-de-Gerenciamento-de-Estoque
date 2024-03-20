<!DOCTYPE html>
<html lang="pt-BR">
<head>
</head>
<body>
 
    
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "estoque";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        
        mysqli_set_charset($conn, "utf8");
    ?>

</body>
</html>