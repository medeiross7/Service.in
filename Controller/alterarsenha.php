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
    <link rel="stylesheet" href="css/Alterarsenha.css">
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
            <input style="height: 100px;" type="text" class="chat-input" placeholder="Digite sua mensagem..."
                name="mensagem">
            <input type="submit" name="submit" class="chat-send-button" value="Enviar">
        </div>
    </form>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="Controller/js/script.js"></script>
</body>

</html>