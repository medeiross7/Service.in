<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Controller/css/login.css">
</head>
<body>
    <a href="../index.php" class="btnvoltar">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="../Controller/logar.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputsubmit" type="submit" name="submit" value="Enviar">
            <a style="color: white;" href="cadastro.php">Cadastrar</a>
            <br>
            <a class="esqueci" href="esquecisenha.php">Esqueci minha senha</a>
        </form>
    </div>
</body>

</html>