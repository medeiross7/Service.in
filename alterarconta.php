<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');

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
            header('Location: login.php');
          }
       else{
               $_SESSION['email'] = $email;
               $_SESSION['senha'] = $senha;
               header('Location: sistema.php');
          }
   }
   else{
    //nao acessa
        header('Location: login.php');
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
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #238e68;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputsubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputsubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        .btnvoltar{
            padding: 10px;
            text-decoration : none;
            background-color: white;
            color: black;
            border-radius: 10px;
            position: absolute;
            top: 3%;
        }
    
    </style>
</head>
<body>
    <a href="index.php" class="btnvoltar">Voltar</a>
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