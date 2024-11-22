<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../View/login.php');

    if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha'])){
        //acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: '. $email);
        //print_r('<br>');
        //print_r('Senha: '. $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $mysqli->query($sql);

        //print_r($sql);
       // print_r($result);
       if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../View/login.php');
          }
       else{
               $_SESSION['email'] = $email;
               $_SESSION['senha'] = $senha;
               header('Location: ../View/sistema.php');
          }
   }
   else{
    //nao acessa
        header('Location: ../View/login.php');
   }
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Alterar.css">
    
</head>
<body>
    <a href="../index.php" class="btnvoltar">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="logar.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Enviar">

        </form>
        
    </div>
</body>
</html>