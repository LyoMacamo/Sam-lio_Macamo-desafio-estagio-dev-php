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
