<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar Sobre</title>
  <link rel="stylesheet" href="css/Alterarsobre.css">
</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
  <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">

    <div style="margin-left:   35vw ; heigth: 20vh;">

      <a href="index.php"><img style="heigth: 10vh;" src="img/Servece 1.png" alt=""></a>

    </div>
  </div>
  <div class="divcentro">
    <div>
      <h1>Alterar Sobre</h1>
      <form action="alterarsobre.php" method="POST">
        <input class="inputsobre" type="text">
        <input type="submit" name="submit" id="submit">
      </form>
    </div>
  </div>
  <form action="index.php" method="POST">
    <div class="chat-button" onclick="toggleChat()">
      <i class="fa fa-comment"></i> <!-- Ícone (exemplo usando Font Awesome) -->

    </div>

    <!-- Contêiner do chat -->
    <div class="chat-container" id="chatContainer">
      <div class="chat-header">
        Suporte
        <span style="float: right; cursor: pointer;" onclick="toggleChat()">Fechar</span>
      </div>
      <div class="chat-body" id="chatBody">
        <!-- Aqui ficará o conteúdo do chat -->
        Bem-vindo ao Suporte!
      </div>
      <input type="text" class="chat-input" placeholder="Tema" name="tema">
      <input style="height: 100px;" type="text" class="chat-input" placeholder="Digite sua mensagem..." name="mensagem">
      <input type="submit" name="submit" class="chat-send-button" value="Enviar">
    </div>
  </form>


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script script="js/script.js"></script>
</body>

</html>