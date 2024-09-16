<?php
    session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){
        header('Location: login.php');
    }
    $logado = $_SESSION['email']; //email conectado na sessao, atentar na hora de fazer o layout
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
        .btnsair{
            padding: 10px;
            background-color: white;
            color: black;
            text-decoration: none;
            border-radius: 10px;
        }
        
        .chat-button {
      position: fixed; /* Mantém o botão fixo na tela */
      bottom: 20px; /* Distância do fundo */
      right: 20px; /* Distância da direita */
      background-color: #007bff; /* Cor de fundo */
      color: white; /* Cor do texto */
      border: none; /* Sem borda */
      padding: 15px; /* Espaçamento interno */
      border-radius: 50%; /* Forma do botão (circular) */
      cursor: pointer; /* Cursor ao passar o mouse */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra leve */
      z-index: 1000; /* Garante que esteja acima de outros elementos */
    }

    /* Estilos do ícone (font awesome usado como exemplo) */
    .chat-button i {
      font-size: 24px; /* Tamanho do ícone */
    }

    /* Estilos do contêiner do chat */
    .chat-container {
      display: none; /* Inicialmente oculto */
      position: fixed;
      bottom: 80px; /* Distância do fundo */
      right: 20px; /* Distância da direita */
      width: 300px; /* Largura do chat */
      background-color: #f9f9f9;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      z-index: 999; 
    }

   
    .chat-header {
      background-color: #007bff;
      color: white;
      padding: 10px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    
    .chat-body {
      padding: 20px;
      height: 300px; 
      overflow-y: auto; /
    }

    
    .chat-input {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin: 10px;
    }

    
    .chat-send-button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
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
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
    <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <img style="heigth: 10vh;" src="img/Servece 1.png" alt="">
        </div>
        <div style="display: flex; margin-top: 30px; justify-content: space-around; margin-left: -26.5vw;">
            <div></div>
            <div >
              <ul class="menu">
                <li class="menu-item">
                  <a href="#" class="menu-link">Menu</a>
                  <ul class="submenu">
                      <li><a href="perfil_colaborador.php">Perfil</a></li>
                      <li><a href="#">Alterar Conta</a></li>
                      <li><a href="perfil_colaborador.php">Alterar Dados do perfil</a></li>
                      <li><a href="sair.php">Sair</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div> <a class="btnhead" href="cadastro.php" style="color: white; font-size: 18px; text-decoration: none;">Cadastre-se</a> </div>
            <div> <a class="btnhead" href="prestar.php" style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
            <div> <a class="btnhead" href="" style="color: Black; font-size: 18px; text-decoration: none;">Solicitar Serviço</a></div>
            <div> <a class="btnhead" href="sobre.php" style="color: Black; font-size: 18px; text-decoration: none;">Sobre</a></div>
            
        </div>
    </div>
    <div  class="central">
        <div class="contrate">
            <div class="contrate1">
              <h2 class="txtcentral">Esta Precisando de algum <br>serviço domestico, nos da <br> Service.in oferecemos esses <br> serviços, solicite aqui</h2>
              <a class="acentral" href="solicitar.php">SOLICITAR SERVICO</a>
                
            </div>     
        </div>
    </div>
    <div class="central2">
        <div class="imagem2">
            <div style="height: 100%; background-color: white; width: 100%;">
                
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
                <a class="junte" href="">Junte-Se A Nos</a>
            </div>
        </div>
    </div>
    <footer class="rodape">
        <img class="imgfot" src="img/Servece 1.png" alt="">
        <a href="centraldeajuda.php" style="color: white; margin-left: -4vw; text-decoration: none; margin-top: 20px;">.ACESSO CENTRAL DE AJUDA</a>
    </footer>
    <div class="chat-button" onclick="toggleChat()">
    <i class="fa fa-comment"></i> <!-- Ícone (exemplo usando Font Awesome) -->
  </div>

  <!-- Contêiner do chat -->
  <div class="chat-container" id="chatContainer">
    <div class="chat-header">
      Chat
      <span style="float: right; cursor: pointer;" onclick="toggleChat()">Fechar</span>
    </div>
    <div class="chat-body" id="chatBody">
      <!-- Aqui ficará o conteúdo do chat -->
      Bem-vindo ao chat!
    </div>
    <input type="text" class="chat-input" placeholder="Digite sua mensagem...">
    <button class="chat-send-button">Enviar</button>
  </div>

  <!-- Incluir Font Awesome (caso necessário) -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Script JavaScript para mostrar/ocultar o chat -->
  <script>
    function toggleChat() {
      var chatContainer = document.getElementById('chatContainer');
      chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
    }
  </script>
</body>
</body>
</html>