<?php
include_once('../conexao.php'); // Incluindo o arquivo de conexão com o banco de dados

session_start();

// Verifique se o usuário está logado
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Verifique se o formulário foi enviado
    if (isset($_POST['update'])) {
        $nova_senha = $_POST['nova_senha'];
        $confirma_senha = $_POST['confirma_senha'];

        // Verifique se as senhas são iguais
        if ($nova_senha === $confirma_senha) {
            // Prepare a consulta SQL para atualizar a senha no banco de dados
            $sql = "UPDATE usuarios SET senha = :nova_senha WHERE email = :email";
            $stmt = $pdo->prepare($sql);

            // Execute a consulta com os parâmetros
            if ($stmt->execute([':nova_senha' => $nova_senha, ':email' => $email])) {
                echo "Senha alterada com sucesso!";
                header('Location: ../Model/perfil_colaborador.php'); // Redireciona para o perfil após a alteração
            } else {
                echo "Erro ao alterar a senha.";
            }
        } else {
            echo "As senhas não coincidem.";
        }
    }
} else {
    header('Location: login.php'); // Se não estiver logado, redireciona para o login
    exit();
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
            <a href="../index.php"><img style="height: 10vh;" src="img/Servece 1.png" alt=""></a>
        </div>
    </div>
    <div class="divcentro">
        <div>
            <h1>Alterar Senha</h1>
            <form action="alterarsenha.php" method="POST">
                <input class="inputsobre" type="password" placeholder="Nova Senha" name="nova_senha" required>
                <input class="inputsobre" type="password" placeholder="Confirmar Senha" name="confirma_senha" required>
                <input type="submit" name="update" id="submit" value="Alterar Senha">
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