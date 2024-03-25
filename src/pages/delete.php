<?php

    include("conexao.php");
    $id_Excluir = $_GET['id'];

    $sql = "DELETE from `produtos` WHERE id = $id_Excluir";

    if ($conn->query($sql) === TRUE) {
       header('Location: ../../index.php');
    } 

?>