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
