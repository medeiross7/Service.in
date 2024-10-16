<?php
include_once('conexao.php');

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifique se o usuário existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conexao->query($query);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        // Armazenar informações na sessão
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['id'] = $usuario['id']; // Armazena o ID do usuário
        header('Location: index.php'); // Redireciona para a página inicial
    } else {
        echo "<script>alert('Email ou senha inválidos.');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <style>
        .divcentro {
            display: flex;
            justify-content: center;
            height: 50vh;
        }
        .divcentro div {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10vh;
            width: 30vw;
        }
        .inputsobre {
            width: 20vw;
            height: 5vh;
            margin-bottom: 20px;
        }
        #submit {
            background-color: #238e68;
            border: none;
            width: 40%;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 6vh;
        }
        h1 {
            margin-left: -13vw; 
        }
        .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #238E68;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .chat-container {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 300px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 999;
        }
        .chat-header {
            background-color: #238E68;
            color: white;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .chat-body {
            padding: 20px;
            height: 300px;
            overflow-y: auto;
        }
        .chat-input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
        }
        .chat-send-button {
            background-color: #238E68;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
    <div style="height: 20vh; background-color: #238E68; display: flex; flex-direction: column;">
        <div style="margin-left: 35vw; height: 20vh;">
            <a href="index.php"><img style="height: 10vh;" src="img/Servece 1.png" alt=""></a>
        </div>
    </div>
    <div class="divcentro">
        <div>
            <h1>Alterar Senha</h1>
            <form action="alterarsenha.php" method="POST">
                <input class="inputsobre" type="password" placeholder="Nova Senha" name="nova_senha" required>
                <input class="inputsobre" type="password" placeholder="Confirmar Senha" name="confirma_senha" required>
                <input type="submit" name="update" id="submit">
            </form>
        </div>
    </div>
    <form action="index.php" method="POST">
        <div class="chat-button" onclick="toggleChat()">
            <i class="fa fa-comment"></i>
        </div>
        <div class="chat-container" id="chatContainer">
            <div class="chat-header">
                Suporte
                <span style="float: right; cursor: pointer;" onclick="toggleChat()">Fechar</span>
            </div>
            <div class="chat-body" id="chatBody">
                Bem-vindo ao Suporte!
            </div>
            <input type="text" class="chat-input" placeholder="Tema" name="tema">
            <input style="height: 100px;" type="text" class="chat-input" placeholder="Digite sua mensagem..." name="mensagem">
            <input type="submit" name="submit" class="chat-send-button" value="Enviar">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        function toggleChat() {
            var chatContainer = document.getElementById('chatContainer');
            chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
