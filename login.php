<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        
        color: white;
        }
        .bx{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 10px;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputUser{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputUser:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Home</a>
      <div class="bx">
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
        <input type="text" placeholder="Username" name="Username" id="Username">
        <br><br>
        <input type="text" placeholder="Senha" name="Senha" id="Senha">
        <br><br>
        <input type="submit" name="submit" class="inputUser" value="Enviar" required>
        </form>
      </div>
</body>
</html>