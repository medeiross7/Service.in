<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include_once('../conexao.php');

if (!isset($_SESSION['email'])) {
    header('Location: ../View/esquecisenha.php'); // Se não há email na sessão, volta para a página anterior
    exit;
}

$error_message = ''; // Para armazenar mensagens de erro

if (isset($_POST['submit'])) {
    if (!empty($_POST['nova_senha'])) {
        $nova_senha = $_POST['nova_senha']; // Senha em texto puro
        $email = $_SESSION['email'];

        // Atualiza a senha diretamente no banco de dados
        $sql = "UPDATE usuarios SET senha = '$nova_senha' WHERE email = '$email'";
        if ($mysqli->query($sql) === TRUE) {
            echo "Senha alterada com sucesso!";
            unset($_SESSION['email']); // Limpa a sessão
            header('Location: ../View/login.php'); // Redireciona para a página de login
            exit;
        } else {
            $error_message = "Erro ao atualizar a senha: " . $mysqli->error; // Captura erros
        }
    } else {
        $error_message = "Por favor, preencha a nova senha."; // Mensagem de erro
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
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
        }
    </style>
</head>
<body>
    <?php if ($error_message): ?>
            <div class="error-message"><?php echo $error_message; ?></div> <!-- Mensagem de erro -->
        <?php endif; ?>
    <form action="" method="POST">
        <h1>Redefinir Senha</h1>
        <input type="password" name="nova_senha" placeholder="Nova Senha" required>
        <input type="submit" name="submit" value="Alterar Senha">
    </form>
</body>
</html>
