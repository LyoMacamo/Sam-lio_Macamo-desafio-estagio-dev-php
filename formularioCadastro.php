<?php
if(isset($_POST['submit'])){
    
    include_once('config.php');

    $nome= $_POST['nome'];
    $username= $_POST['username'];
    $senha= $_POST['senha'];
    $usuarioid = mysqli_insert_id($conexao);

    $usuario = mysqli_query($conexao, "INSERT INTO usuario(nome,username,senha)
     VALUES('$nome','$username','$senha')");
    header('Location: login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="formulariostyle.css">
    
</head>
<body>
    <a href="home.php">Home</a>
    <div class="box">
        <form action="formularioCadastro.php" method="POST" id="Formu">
            <fieldset>
                <legend><b>Dados do Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="username" id="username" class="inputUser" required>
                    <label for="username" class="labelInput">Username</label>
                </div>
                   <br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
            </fieldset>
            <br><br>
            <fieldset>
            <button type="submit" name="submit" id="submit">Cadastrar-se</button>
            <br><br>
             <button onclick="abrirFormulario()" id="submit">Lista de usuários</button>
    <script>
        function abrirFormulario() {
            window.location.href = "listarcliente.php";
        }
    </script>

        </fieldset>
        </form>
    </div>
    
    </body>
</html