<?php
session_start();
include_once('../conexao.php');

if (isset($_POST['submit'])) {
    if (!empty($_POST['email'])) {
        $email = $mysqli->real_escape_string($_POST['email']);
        
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $mysqli->query($sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $email;
            header('Location: ../Controller/reset_senha.php'); // Redireciona para a página de reset
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
    <link rel="stylesheet" href="../Controller/css/esquecisenha.css">
</head>
<body>
    
    <form action="" method="POST">
    <h1>Esqueci Minha Senha</h1>
        <input type="text" name="email" placeholder="Email" required>
        <input type="submit" name="submit" value="Confirmar">
    </form>
</body>
</html>
