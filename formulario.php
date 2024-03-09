<?php
session_start();
if((!isset($_SESSION['user']) == true) and (isset($_SESSION['senha']) == true)){
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
    $logado = $_SESSION['user'];

if(isset($_POST['submit'])){
    
    include_once('config.php');

    $consumidorempresa= $_POST['consumidorempresa'];
    
    $endereco= $_POST['endereco'];
    $telefone= $_POST['telefone'];

    $nomeproduto= $_POST['nomeproduto'];
    $descricao= $_POST['descricao'];
    $quantidade= $_POST['quantidade'];
    $valor= $_POST['valor'];

    $usuarioid = mysqli_insert_id($conexao);

    $cliente = mysqli_query($conexao, "INSERT INTO cliente(consumidor_empresa,endereco,telefone, usuarioid) VALUES('$consumidorempresa','$endereco','$telefone','$usuarioid')");

    $clienteid = mysqli_insert_id($conexao);

    $pedidos = mysqli_query($conexao, "INSERT INTO produdo(clienteid,nomeProduto,descricao,quantidade,valor) VALUES('$clienteid','$nomeproduto','$descricao','$quantidade','$valor')");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de pedidos</title>
    <link rel="stylesheet" href="formulariostyle.css">
    
</head>
<body>
    <a href="home.php">Home</a>
    <div class="box">
        <form action="formulario.php" method="POST" id="Formu">
            <fieldset>
                <legend><b>Dados do Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="consumidorempresa" id="consumidorempresa" class="inputUser" required>
                    <label for="consumidorempresa" class="labelInput">Consumidor ou Empresa?</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
            </fieldset>
            <br>
            <fieldset>
                <legend><b>Pedidos de Compra</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeproduto" id="nomeproduto" class="inputUser" required>
                    <label for="nomeproduto" class="labelInput">Nome do Produto</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type= "number" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type= "number" name="valor" id="valor" class="inputUser" required>
                    <label for="valor" class="labelInput">Valor a pagar</label>
                </div>
            </fieldset>
            <br><br>
            <fieldset>
            <button type="submit" name="submit" id="submit">Enviar</button>
             <br><br>
             <button onclick="abrirFormulario()" id="submit">Lista de produtos</button>
    <script>
        function abrirFormulario() {
            window.location.href = "listarproduto.php";
        }
    </script>

        </fieldset>
        </form>
    </div>
    
    </body>
</html