<?php
    session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){
        header('Location: login.php');
    }
    $logado = $_SESSION['email']; //email conectado na sessao, atentar na hora de fazer o layout

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
  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" type="text/css" href="public/css.css" />

  <style>
    .btnsair {
      padding: 10px;
      background-color: white;
      color: black;
      text-decoration: none;
      border-radius: 10px;
    }

    .chat-button {
      position: fixed;
      /* Mantém o botão fixo na tela */
      bottom: 20px;
      /* Distância do fundo */
      right: 20px;
      /* Distância da direita */
      background-color: #238E68;
      /* Cor de fundo */
      color: white;
      /* Cor do texto */
      border: none;
      /* Sem borda */
      padding: 15px;
      /* Espaçamento interno */
      border-radius: 50%;
      /* Forma do botão (circular) */
      cursor: pointer;
      /* Cursor ao passar o mouse */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Sombra leve */
      z-index: 1000;
      /* Garante que esteja acima de outros elementos */
    }

    /* Estilos do ícone (font awesome usado como exemplo) */
    .chat-button i {
      font-size: 24px;
      /* Tamanho do ícone */
    }

    /* Estilos do contêiner do chat */
    .chat-container {
      display: none;
      /* Inicialmente oculto */
      position: fixed;
      bottom: 80px;
      /* Distância do fundo */
      right: 20px;
      /* Distância da direita */
      width: 300px;
      /* Largura do chat */
      background-color: #f9f9f9;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      z-index: 999;
      /* Um nível abaixo do botão */
    }

    /* Estilos do cabeçalho do chat */
    .chat-header {
      background-color: #238E68;
      color: white;
      padding: 10px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    /* Estilos do corpo do chat */
    .chat-body {
      padding: 20px;
      height: 300px;
      /* Altura do corpo do chat */
      overflow-y: auto;
      /* Scroll vertical, se necessário */

    }

    /* Estilos do campo de entrada do chat */
    .chat-input {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin: 10px;
    }

    /* Estilos do botão de enviar do chat */
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

    .contrate {
      background-color: gray;
      display: flex;
      background-image: url('img/servico-encanador-bauru.jpg');
      background-size: cover;
      /* Faz a imagem cobrir toda a área da div */
      background-position: center;
      /* Centraliza a imagem */
      background-repeat: no-repeat;
      border-radius: 18px;

    }


    .central {
      display: flex;
    }

    .imgcentral {
      margin-top: -7vh;
      width: 50.5vw;

    }

    .acentral {
      padding: 8px;
      background-color: #238E68;
      text-decoration: none;
      color: black;
      border-radius: 12px;
      width: 10vw;
      font-weight: 700;
      position: absolute;
      top: 80%;
      left: 65%;
    }

    .txtcentral {
      position: absolute;
      top: 65%;
      left: 65%;
      color: white;
    }

    .a-nav {
      color: #ffffff;
      text-decoration: none;
      transition: 0.3s;
    }

    .a-nav:hover {
      opacity: 0.7;
    }

    .nav-list {
      list-style: none;
      display: flex;

    }

    .nav-list li {
      letter-spacing: 3px;
      margin-left: 32px;
    }

    .btnhead {
      color: white;
      font-size: 18px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btnhead:hover {
      opacity: 0.7;
    }

    .menu {
      list-style: none;
      padding: 0;
      margin: 0;
      margin-left: 70px;
      margin-top: -13px;

    }

    .menu-item {
      position: relative;
      display: inline-block;
    }

    .menu-link {
      display: block;
      padding: 15px 20px;
      text-decoration: none;
      color: #fff;
      background-color: grey;
      border-radius: 12px;
      font-weight: 700
    }

    .menu-link:hover {
      background-color: #555;
    }

    .submenu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      list-style: none;
      padding: 0;
      margin: 0;
      background-color: #333;
      min-width: 160px;
      z-index: 1;
    }

    .submenu li {
      border-bottom: 1px solid #444;
    }

    .submenu li:last-child {
      border-bottom: none;
    }

    .submenu a {
      display: block;
      padding: 10px 15px;
      color: #fff;
      text-decoration: none;
    }

    .submenu a:hover {
      background-color: #238E68;
    }

    .menu-item:hover .submenu {
      display: block;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    }

    .rodape {
      background-color: #000;
      height: 270px;
      width: 100%;
      padding-bottom: 2vh;
      padding: 0 6vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .paragrafro {
      color: white;
      font-size: 14px;
      margin-top: 30px;
    }

    .compartilhe {
      margin-top: 2rem;
      margin-bottom: 5rem;
      border-radius: 30px;
      padding: 1rem;
      font-size: 15px;
      transition: 0.5s;
      font-weight: 700;
      margin-left: 730px;
    }

    .redes {
      
      margin-left: 700px;
    }

    .compartilhe:hover {
      transition: 0.5s;
      background-color: gray;
      color: white
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: -5px;
      left: 0;
      right: -20px;
      bottom: 0;
      background-color: #ccc;
      transition: .4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      border-radius: 50%;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:checked+.slider:before {
      transform: translateX(26px);
    }

    .language-label {
      display: flex;
      align-items: center;
      margin-bottom: 20px;

    }

    .language-label span {
      margin-right: 10px;
    }

    .trilho {
      width: 90px;
      height: 40px;
      background-color: #4d4d4d;
      border-radius: 150px;
      position: relative;
      cursor: pointer;
      margin-top: -7px;

    }

    .trilho .indicador {
      width: 40px;
      height: 40px;
      background-color: #000;
      border-radius: 50%;
      transform: scale(.9);
      position: absolute;
      left: 0;
      transition: .5s;
    }


    .trilho.dark {
      background-color: #c3c3c3;
    }

    .trilho.dark .indicador {
      left: 50px;
      background-color: #fff;
    }

    body.dark {
      background-color: #121212;
      color: #ffffff;
    }

    .central.dark {
      background-color: #1e1e1e;
    }

    .rodape.dark {
      background-color: #1e1e1e;
    }

    .chat-container.dark {
      background-color: #2c2c2c;
    }
  </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
  <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">

    <div style="margin-left:   35vw ; heigth: 20vh;">
      <a href="index.php"><img style="heigth: 10vh;" src="img/Servece 1.png" alt=""></a>

    </div>


    <div style="display: flex; margin-top: 30px; justify-content: space-around; margin-left: -100px;">
      <div>
        <ul class="menu">
          <li class="menu-item">
            <a href="#" class="menu-link" id="linkmenu">Menu</a>
            <ul class="submenu">
              <li><a href="perfil_colaborador.php" id="profile">Perfil</a></li>
              <li><a href="#" id="account">Alterar Conta</a></li>
              <li><a href="perfil_colaborador.php" id="profiledata">Alterar Dados do perfil</a></li>
              <li><a href="sair.php" id="leave">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div> <a id="prestarservicoo" class="btnhead" href="prestar.php" style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
      <div> <a id="solicitarservicoo" class="btnhead" href="solicitar.php" style="color: Black; font-size: 18px; text-decoration: none;">Solicitar Serviço</a></div>
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
      <div class="contrate1">
        <h2 class="txtcentral" id="precisando">Esta Precisando de algum <br>serviço domestico, nos da <br> Service.in oferecemos esses <br> serviços, solicite aqui</h2>
        <a class="acentral" href="solicitar.php" id="btnsolicitar">SOLICITAR SERVICO</a>

      </div>
    </div>
  </div>
  <div class="central2">
    <div class="imagem2">
      <div style="height: 60vh; width: 45vh;  margin-top: -6vh; border-radius: 1000vh; ">
        <img style="height: 100%;   width: 100%;" src="img/Rectangle 13.png" alt="">
      </div>
    </div>
    <div class="colaborador">
      <div>
        <h1 style="color: white;">
          Seja coloborador na nossa <br> empresa e trabalhe quando <br> quiser!
        </h1>
      </div>
      <div style="margin-top: 20px;">
        <p style="color: white; font-size:18px;">Nao dependa de seus contatos para <br> trabalha, ganhe dinheiro o tempo todo <br> com usuarios proximos</p>
      </div>
      <div style="margin-top: 20px; margin-left: 14vw;">
        <a class="junte" href="prestarservico.php">Junte-Se A Nos</a>
      </div>
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

  <div class="rodape">
    <div>
      <img src="img/Servece 3.png">
      <p class="paragrafro">
        © 2024 Service.in Todos os direitos reservados. <br>
        Endereço: Rua Itajúba, 223, floresta, Belo Horizonte - MG, Brasil<br>E-mail: contato@exemplo.com.br <br><br><br><br><br>

        Para mais informações, visite nossa pagina <a style=" color: white;" href="sobre.php">SOBRE NÓS</a>  ou entre em contato conosco.
   
      <p>
    </div>
    <divl>
      <button class="compartilhe">Compartilhe</button>
      <p class="redes" style="color: white; font-family: Arial, Helvetica, sans-serif; font-weight: 700;">
        Encontre-Nos
      </p>

      <a style="margin-right: 10px;" class="redes" href="https://web.whatsapp.com/" target="_blank"><img src="img/Vector.png"></a>
      <a style="margin-right: 10px;" href="https://www.instagram.com/" target="_blank"><img src="img/Vector (2).png"></a>
      <a style="margin-right: 10px;" href="https://github.com/" target="_blank"><img src="img/Social Icons (1).png"></a>
      <a  href="https://br.linkedin.com/" target="_blank"><img src="img/Social Icons (2).png"></a>
  </div>

  </div>





  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <script>
    function toggleChat() {
      var chatContainer = document.getElementById('chatContainer');
      chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
    }

    function enviarMensagem() {
      var mensagem = document.getElementById('mensagem').value.trim();

      if (mensagem !== '') {
        // Limpar campo de mensagem
        document.getElementById('mensagem').value = '';

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
          }
        };
        xhttp.open("GET", "enviar_email.php?mensagem=" + mensagem, true);
        xhttp.send();
      }
    }
    const langToggle = document.getElementById('lang-toggle');
    const title = document.getElementById('title');
    const description = document.getElementById('description');
    const langLabel = document.getElementById('lang-label');

    langToggle.addEventListener('change', () => {
      if (langToggle.checked) {
        // Mudar para inglês

        login.textContent = "Sign In";
        cadastro.textContent = "Sign Up";
        prestarservicoo.textContent = "Provide Service";
        solicitarservicoo.textContent = "Request Service";
        profile.textContent = "Profile";
        account.textContent = "Change Account";
        profiledata.textContent = "Change Profile Data";
        leave.textContent = "Leave";
        precisando.textContent = "If you need any domestic service, we at Service.in offer these services, request them here";
        btnsolicitar.textContent = "REQUEST SERVICE";
        langLabel.textContent = 'English :';
      } else {
        // Voltar para português

        login.textContent = "Login";
        cadastro.textContent = "Cadastro";
        prestarservicoo.textContent = "Prestar Servico";
        solicitarservicoo.textContent = "Solicitar Servico";
        profile.textContent = "Perfil";
        account.textContent = "Alterar Conta";
        profiledata.textContent = "Alterar dados do perfil";
        leave.textContent = "Sair";
        precisando.textContent = "Esta Precisando de algum serviço domestico, nos da Service.in oferecemos esses serviços, solicite aqui";
        btnsolicitar.textContent = "SOLICITAR SERVICO";
        langLabel.textContent = 'Portugues:';
      }
    });
    let trilho = document.getElementById('trilho');
    let body = document.querySelector('body');
    let central = document.querySelector('.central');
    let rodape = document.querySelector('.rodape');
    let chatContainer = document.querySelector('.chat-container');

    trilho.addEventListener('click', () => {
      body.classList.toggle('dark');
      central.classList.toggle('dark');
      rodape.classList.toggle('dark');
      chatContainer.classList.toggle('dark');
    })
  </script>

</html>