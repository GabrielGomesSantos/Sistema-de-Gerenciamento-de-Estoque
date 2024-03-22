<?php
include("conexao.php");

mysqli_set_charset($conn, "utf8");


//ATUALIZA A TABLE NO RESPECTIVO ID 
$sql = " UPDATE `produtos` 
SET `nome`='$_GET[nome]',`descricao`='$_GET[descricao]',`qnt`='$_GET[qnt]',`preco`='$_GET[preco]' 
WHERE id='$_GET[id]'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: read.php#$_GET[id]");


?>
