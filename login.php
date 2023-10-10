<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    
    <div class="div1">
        <img src="Logo HB (1).png" width="100px" height="100px" alt="Escola legal :D">
    </div>
    <h1>
        Login
    </h1>
    
    <form action="controller-login.php" method="POST">
        <label for="cpf">CPF: *</label>
        <br>
        <input type="text" name="cpf" placeholder="Digite seu cpf:" id="cpf" class="input" required autocomplete="off">
        <br>
        <br>
        <label for="senha">Senha: *</label>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" class="input" required autocomplete="off">
        <br>
        <br>
        <button type="submit" name="Entrar" id="Entrar" class="btn2">Entrar</button>
        <br>
        <br>
        <button type="click" name="Cadastrar" id="Cadastrar" class="btn4" onclick="location.href='index.html'">Cadastrar</button>
    </form>
    <style>
        form{
            text-align: center;
        }
        .btn2{
            padding: 10px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14pt;
            color: #ffffff;
            background-color: #1176d4;
            border-radius: 6px;
            height: 50px;
            width: 195px;
            transition: 0.5s;
        }
        body{
            background-color: rgb(255, 149, 0);
        }
        label{
            font-family: Arial, Helvetica, sans-serif;

        }
        .input{
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 6px;
            width: 175px;
            height: 30px;
            transition: 0.5s;
        }
        h1{
            color: #ffffff;
            text-align: center;
            
        }
        .btn4{
            padding: 10px;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14pt;
            color: #ffffff;
            background-color: #1176d4;
            border-radius: 6px;
            height: 50px;
            width: 195px;
            transition: 0.5s;
        }
        .div1{
            text-align: center;
        }
    </style>
</body>
</html>