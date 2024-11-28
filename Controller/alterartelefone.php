<?php
include_once('../conexao.php'); // Incluindo o arquivo de conexão com o banco de dados

session_start();

// Verifique se o usuário está logado
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Verifique se o formulário foi enviado
    if (isset($_POST['update'])) {
        $novo_telefone = $_POST['novo_telefone'];
        $confirma_telefone = $_POST['confirma_telefone'];

        // Verifique se os telefones são iguais
        if ($novo_telefone === $confirma_telefone) {
            // Prepare a consulta SQL para atualizar o telefone no banco de dados
            $sql = "UPDATE usuarios SET telefone = :novo_telefone WHERE email = :email";
            $stmt = $pdo->prepare($sql);

            // Execute a consulta com os parâmetros
            if ($stmt->execute([':novo_telefone' => $novo_telefone, ':email' => $email])) {
                echo "Telefone alterado com sucesso!";
                header('Location: ../Model/perfil_colaborador.php'); // Redireciona para o perfil após a alteração
                exit(); // Adiciona exit() para garantir que o código seja interrompido após o redirecionamento
            } else {
                echo "Erro ao alterar o telefone.";
            }
        } else {
            echo "Os telefones não coincidem.";
        }
    }
} else {
    header('Location: ../View/login.php'); // Se não estiver logado, redireciona para o login
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Telefone</title>
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
            <h1>Alterar Telefone</h1>
            <form action="alterartelefone.php" method="POST">
                <input class="inputsobre" type="text" placeholder="Novo Telefone" name="novo_telefone" required>
                <input class="inputsobre" type="text" placeholder="Confirmar Telefone" name="confirma_telefone" required>
                <input type="submit" name="update" id="submit" value="Alterar Telefone">
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
