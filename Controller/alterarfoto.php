<?php
$msg = false;

if (isset($_FILES['arquivo'])) {
  $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
  $novo_nome = md5(time()) . $extensao;
  $diretorio = "img/";

  move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
  $sql_code = "INSERT INTO arquivo (id, arquivo, data) VALUES(null,'$novo_nome', NOW())";
  if ($mysqli->query($sql_code)) {
    $msg = "Arquivo enviado com sucesso!";
  } else {
    $msg = "Falha ao enviar o Arquivo";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/Alterarfoto.css">

</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
  <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">

    <div style="margin-left:   35vw ; heigth: 20vh;">
      <a href="index.php"><img style="heigth: 10vh;" src="img/Servece 1.png" alt=""></a>
    </div>
  </div>
  <div class="divcentro">
    <div>
      <h1>Alterar Foto de Perfil</h1>
      <form action="alterarfoto.php" method="POST" enctype="multipart/form-data">
        <input class="inputsobre" type="hidden" name="arquivo" value="4194304" />
        <br>
        <input required name="arquivo" style="background-color: grey; width: 350px;" type="file" />
        <input type="submit" name="submit" id="submit">
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