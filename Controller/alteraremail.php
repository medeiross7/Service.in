<?php
include_once('../conexao.php'); // Incluindo o arquivo de conexão com o banco de dados

session_start();

// Verifique se o usuário está logado
if (isset($_SESSION['email'])) {
  $email_atual = $_SESSION['email'];

  // Verifique se o formulário foi enviado
  if (isset($_POST['update'])) {
    $novo_email = $_POST['novo_email'];
    $confirma_email = $_POST['confirma_email'];

    // Verifique se os emails são iguais
    if ($novo_email === $confirma_email) {
      // Prepare a consulta SQL para atualizar o email no banco de dados
      $sql = "UPDATE usuarios SET email = :novo_email WHERE email = :email_atual";
      $stmt = $pdo->prepare($sql);

      // Execute a consulta com os parâmetros
      if ($stmt->execute([':novo_email' => $novo_email, ':email_atual' => $email_atual])) {
        // Atualize o email na sessão
        $_SESSION['email'] = $novo_email;

        echo "<script>alert('Email alterado com sucesso!');</script>";
        header('Location: ../Model/perfil_colaborador.php'); // Redireciona para o perfil após a alteração
        exit();
      } else {
        echo "<script>alert('Erro ao alterar o email.');</script>";
      }
    } else {
      echo "<script>alert('Os emails não coincidem.');</script>";
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
  <title>Alterar Email</title>
  <link rel="stylesheet" href="css/Alterarsenha.css">
  <style>
    @media (max-width: 768px) {
      #submit {
        width: 15vw;
      }
    } 
  </style>


</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
  <div style="height: 20vh; background-color: #238E68; display: flex; flex-direction: column;">
    <div style="margin-left: 35vw; height: 20vh;">
      <a href="../index.php"><img style="height: 10vh;" src="img/Servece 1.png" alt=""></a>
    </div>
  </div>
  <div class="divcentro">
    <div>
      <h1>Alterar Email</h1>
      <form action="alteraremail.php" method="POST">
        <input class="inputsobre" type="email" placeholder="Novo Email" name="novo_email" required>
        <input class="inputsobre" type="email" placeholder="Confirmar Email" name="confirma_email" required>
        <input type="submit" name="update" id="submit" value="Alterar Email">
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
  <script src="Controller/js/script.js"></script>
</body>

</html>