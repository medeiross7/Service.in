<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .chat-button {
      position: fixed; /* Mantém o botão fixo na tela */
      bottom: 20px; /* Distância do fundo */
      right: 20px; /* Distância da direita */
      background-color: #238E68; /* Cor de fundo */
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
      z-index: 999; /* Um nível abaixo do botão */
    }

    /* Estilos do cabeçalho do chat */
    .chat-header {
      background-color:#238E68;
      color: white;
      padding: 10px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    /* Estilos do corpo do chat */
    .chat-body {
      padding: 20px;
      height: 300px; /* Altura do corpo do chat */
      overflow-y: auto; /* Scroll vertical, se necessário */
    
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
        .divmaior{
            height: 70vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .divmenor1{
            width: 30vw;
            height: 30vh;
            
        }
        .divmenor2{
            width: 30vw;
            height: 30vh;
            display: flex;
            justify-content: center;
            
        }
        .divmaior2{
            height: 30vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: -250px;
            margin-left: 380px;
        }
        .svg{
            width: 2vw;
            margin-top: 5vh;
            margin-right: 30px;
        }
        .p1{
            padding: 10px;
            background-color: grey;
            border-radius: 12px;
            width: 5vw;
        }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
<div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <img style="heigth: 10vh;" src="img/Servece 1.png" alt="">
        </div>
        <div style="display: flex; margin-top: 30px; justify-content: space-around;">
            <div></div>
            <div> <a class="btnhead" href="cadastro.php" style="color: white; font-size: 18px; text-decoration: none;">Cadastre-se</a> </div>
            <div> <a class="btnhead" href="prestar.php" style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
            <div> <a class="btnhead" href="solicitar.php" style="color: Black; font-size: 18px; text-decoration: none;">Solicitar Serviço</a></div>
            <div> <a class="btnhead" href="sobre.php" style="color: Black; font-size: 18px; text-decoration: none;">Sobre</a></div>
            <div><a href="login.php" style="color: white; font-size: 18px; text-decoration: none;">Login</a></div>
        </div>
    </div>
    <div class="divmaior">
        <div class="divmenor1">
            <h2>Nome</h2>
            <p>Funçao</p>
            <p style="margin-left:40px;">Email</p>
            <p style="margin-left:40px;">Numero</p>
            <p>Oferecemos serviços profissionais de pintura para transformar e revitalizar espaços residenciais e comerciais. Com uma equipe experiente e dedicada, garantimos um acabamento de alta qualidade que realça a beleza e protege suas superfícies. Nossos serviços são projetados para atender às suas necessidades específicas, garantindo a satisfação total do cliente.</p>
        </div>
        <div class="divmenor2">
            <img style="heigth: 10vh; border-radius: 20px;" src="img/pintor.jpg" alt="">
        </div>
    </div>
    <div class="divmaior2">
        <div class="divmenor11">
           <p>Serviços ja realizados</p>
           <div class="p1">Pintura</div>
        </div>
        <div class="divmenor22">
            <a href=""><svg class="svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            <a href=""><svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a>
        

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
            <input type="submit" name="submit" class="chat-send-button" value= "Enviar" >
    </div>
    </form>
    

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Script JavaScript para mostrar/ocultar o chat e enviar mensagens -->
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

      // Enviar mensagem para o servidor (pode ser implementado aqui)

      // Enviar email (método em PHP)
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
</script>
</body>
</html>