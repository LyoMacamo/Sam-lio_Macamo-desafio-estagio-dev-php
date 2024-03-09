<?php

include_once('connect.php');


if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}/*else{
    echo "Conexao efetuada com sucesso";
}*/


$sql = "SELECT * FROM usuario";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idusuario"] . " - Nome: " . $row["nome"] . " - Username: " . $row["username"] . "  - <a href='editar_cliente.php?id=" . $row["idusuario"] . "'>Editar</a><br>";
    }
} else {
    echo "Nenhum cliente encontrado.";
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    
</head>
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(15,127,220), rgb(17,54,71));
        }
    </style>
<body>
    <br>
<a href="formularioCadastro.php">Voltar</a>
    </body>
</html