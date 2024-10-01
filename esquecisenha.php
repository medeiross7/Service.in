<?php
session_start();
include_once('conexao.php');

if (isset($_POST['submit'])) {
    if (!empty($_POST['email'])) {
        $email = $mysqli->real_escape_string($_POST['email']);
        
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $mysqli->query($sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $email;
            header('Location: reset_senha.php'); // Redireciona para a página de reset
            exit;
        } else {
            $error_message = "Email não encontrado.";
        }
    } else {
        $error_message = "Por favor, preencha o campo de email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esqueci Minha Senha</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #238e68; /* Cor de fundo */
            color: #fff; /* Cor do texto */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }
        h1{
            margin-bottom: 20px;
            text-align: center;
        }
        form{
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 30px;
            border-radius: 15px;
            width: 300px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column; 
            align-items: center;
        }
        input[type="text"],
        input[type="password"] {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 5px;
            width: 90%;
            margin-bottom: 15px; 
        }
        input[type="submit"] {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: deepskyblue;
        }

        .error-message {
            color: white; /* Cor para mensagens de erro */
            margin-top: -900px;
            padding: 12px;
            background-color: blue;
            border-radius: 12px;
            
            
        }
    </style>
</head>
<body>
    
    <form action="" method="POST">
    <h1>Esqueci Minha Senha</h1>
        <input type="text" name="email" placeholder="Email" required>
        <input type="submit" name="submit" value="Confirmar">
    </form>
</body>
</html>
