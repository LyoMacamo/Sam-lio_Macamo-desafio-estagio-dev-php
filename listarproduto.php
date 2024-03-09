<?php

include_once('connect.php');


if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}/*else{
    echo "Conexao efetuada com sucesso";
}*/


$sql = "SELECT * FROM produdo";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idproduto"] . " - ClienteId: " . $row["clienteid"] . " - Produto: " . $row["nomeProduto"] . " - Descricao: " . $row["descricao"] . " - Quantidade: " . $row["quantidade"] . " - Valor: " . $row["valor"] . " - Data do pedido: " . $row["datapedido"] . "  - <a href='editar_cliente.php?id=" . $row["idproduto"] . "'>Editar</a><br>";
    }
} else {
    echo "Nenhum Produto encontrado.";
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
<a href="formulario.php">Voltar</a>
    </body>
</html