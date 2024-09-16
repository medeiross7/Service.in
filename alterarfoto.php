<?php
$msg = false;

if(isset($_FILES['arquivo'])){
    $extensao =  strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "img/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    $sql_code = "INSERT INTO arquivo (id, arquivo, data) VALUES(null,'$novo_nome', NOW())";
    if($mysqli->query($sql_code)){
        $msg = "Arquivo enviado com sucesso!";
    }
    else{
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
    <style>
        .divcentro{
            display: flex;
            justify-content:center;
            height: 50vh;
            
        }
        .divcentro div{
            display:flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10vh;
            width: 30vw;
        }
        .inputsobre{
            width: 20vw;
            height: 5vh;
            margin-bottom: 20px;
        }
        #submit{
            background-color: #238e68;
            border:none;
            width: 40%;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 6vh;
        }
        h1{
           margin-left: -5.5vw; 
        }
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
    </style>
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
                <input  required name="arquivo" style="background-color: grey; width: 350px;" type="file" />   
                <input  type="submit" name="submit" id="submit" >
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