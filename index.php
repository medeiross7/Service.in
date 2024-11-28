<?php
// Verifica se a mensagem foi enviada via GET
if (isset($_POST['submit'])) {
  include_once('conexao.php');

  $tema = $_POST['tema'];
  $mensagem = $_POST['mensagem'];
  $result = mysqli_query($mysqli, "INSERT INTO suporte(tema, mensagem) VALUES('$tema', '$mensagem')");

  if (!$result) {
    die('Erro na query: ' . mysqli_error($mysqli));
  }

  mysqli_close($mysqli);

  // Redirecionamento após inserção bem-sucedida
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service.in</title>
  <link rel="stylesheet" href="Controller/css/css.css?v=1.0">
  <style>
    /* Media Queries para telas pequenas */
    @media (max-width: 1024px) {
      .incial {
        flex-direction: column;
        height: auto;
      }

      .btnhead {
        font-size: 16px;
        margin: 5px 0;
      }

      .acentral {
        width: 80%;
        margin: auto;
      }

      .contrate1 h2 {
        font-size: 18px;
        text-align: center;
      }

      .contrate img {
        height: 40vh;
        width: auto;
        border-radius: 18px;
      }

      .colaborador h1 {
        font-size: 22px;
      }

      .colaborador p {
        font-size: 14px;
      }

      .rodape {
        padding: 10px;
        text-align: center;
      }

      .rodape img {
        margin: 0 auto;
      }

      .redes img {
        width: 24px;
        height: 24px;
      }

      .chat-container {
        width: 90%;
        margin: 0 auto;
      }

      .chat-header {
        font-size: 18px;
      }

      .chat-input {
        font-size: 14px;
      }

      .chat-body {
        font-size: 14px;
      }

      .rodape .compartilhe {
        display: block;
        margin: 10px auto;
      }
    }

    /* Media Queries para telas menores (celulares) */
    @media (max-width: 768px) {
      .txtcentral {
        margin-left: -120px;
        font-size: 14px;
      }

      .acentral {
        width: 29%;
        margin: auto;
        margin-left: -10vw;
      }

      .colaborador h1 {
        font-size: 18px;
        margin-left: 100px;
      }

      .colaborador p {
        font-size: 12px;
        margin-left: 100px;
      }

      .imgcontrate {
        height: auto;
        width: 100%;
      }

      .chat-container {
        width: 100%;
        max-width: 400px;
        margin: auto;
      }

      .chat-header {
        font-size: 16px;
      }

      .chat-body {
        font-size: 14px;
      }

      .chat-input {
        font-size: 14px;
        margin: 5px 0;
      }

      .chat-send-button {
        font-size: 14px;
      }

      .chat-button {
        font-size: 18px;
        bottom: 10px;
        right: 300px;
      }

      .rodape {
        height: 35vh;
      }
    }
  </style>

</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
  <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
    <div style="margin-left:   35vw ; heigth: 20vh;">
      <a href="index.php"><img style="heigth: 10vh;" src="Controller/img/Servece 1.png" alt=""></a>
    </div>
    <div style="display: flex; margin-top: 30px; justify-content: space-around; margin-left: -0px;">
      <div><a id="login" class="btnhead" href="View/login.php"
          style="color: white; font-size: 18px; text-decoration: none;">Login</a></div>
      <div> <a id="cadastro" class="btnhead" href="View/cadastro.php"
          style="color: white; font-size: 18px; text-decoration: none;">Cadastre-se</a> </div>
      <div> <a id="prestarservicoo" class="btnhead" href="View/prestar.php"
          style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
      <div> <a id="solicitarservicoo" class="btnhead" href="View/solicitar.php"
          style="color: Black; font-size: 18px; text-decoration: none;">Solicitar Serviço</a></div>
      <div class="language-label">
        <span id="lang-label">Portugues:</span>
        <label class="switch">
          <input type="checkbox" id="lang-toggle">
          <span class="slider"></span>
        </label>
      </div>
      <div class="trilho" id="trilho">
        <div class="indicador"></div>
      </div>
      <div id="content">

      </div>
    </div>
  </div>
  <div class="central">
    <div class="contrate">
      <img style="height: 60vh; border-radius: 18px;" class="imgcontrate"
        src="Controller/img/servico-encanador-bauru.jpg" alt="">
      <div class="contrate1">
        <h2 class="txtcentral" id="precisando">Esta Precisando de algum <br>serviço domestico, nos da <br> Service.in
          oferecemos esses <br> serviços, solicite aqui</h2>
        <a class="acentral" href="View/solicitar.php" id="btnsolicitar">SOLICITAR SERVICO</a>
      </div>
    </div>
  </div>
  <div class="central2">
    <div class="imagem2">
      <div style="height: 60vh; width: 45vh;  margin-top: -6vh; border-radius: 1000vh; ">
        <img style="height: 100%;   width: 100%;" src="Controller/img/Rectangle 13.png" alt="">
      </div>
    </div>
    <div class="colaborador">
      <div>
        <h1 style="color: white;">
          Seja coloborador na nossa <br> empresa e trabalhe quando <br> quiser!
        </h1>
      </div>
      <div style="margin-top: 20px;">
        <p style="color: white; font-size:18px;">Nao dependa de seus contatos para <br> trabalha, ganhe dinheiro o tempo
          todo <br> com usuarios proximos</p>
      </div>
      <div style="margin-top: 20px; margin-left: 14vw;">
        <a class="junte" href="Model/prestarservico.php">Junte-Se A Nos</a>
      </div>
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

  <div class="rodape">
    <div>
      <img src="Controller/img/Servece 3.png">
      <p class="paragrafro">
        © 2024 Service.in Todos os direitos reservados. <br>
        Endereço: Rua Itajúba, 223, floresta, Belo Horizonte - MG, Brasil<br>E-mail: contato@exemplo.com.br
        <br><br><br><br><br>
        Para mais informações, visite nossa pagina <a style=" color: white;" href="View/sobre.php">SOBRE NÓS</a> ou
        entre em
        contato conosco.
      <p>
    </div>
    <div>
      <button class="compartilhe">Compartilhe</button>
      <p class="redes" style="color: white; font-family: Arial, Helvetica, sans-serif; font-weight: 700;">
        Encontre-Nos
      </p>
      <a style="margin-right: 10px;" class="redes" href="https://web.whatsapp.com/" target="_blank"><img
          src="Controller/img/Vector.png"></a>
      <a style="margin-right: 10px;" href="https://www.instagram.com/" target="_blank"><img
          src="Controller/img/Vector (2).png"></a>
      <a style="margin-right: 10px;" href="https://github.com/" target="_blank"><img
          src="Controller/img/Social Icons (2).png"></a>

  </div>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="Controller/js/script.js"></script>

</html>