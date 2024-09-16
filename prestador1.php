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
    .topo{
      margin-top:15vh;
    }
     
        .linha-cima{
          margin: 0 auto;
            width: 85%;
           border-bottom: 1px solid #000000;
        }

        .esco{
          margin-bottom: 3.4vh;
          margin-left:16vh;
          font-size:2.4vh;
          word-spacing: 22vh;
        }

        .d1-f{
          display:flex;
          margin: 0 auto;
          margin:10vh 10vh 0 19vh;
        }
        .icons{
          margin-left:67vh;
          display:flex;
        }
        .rd{
          font-size:3.3vh;
          margin-bottom: 1.8vh;
        }
        .he{
          font-size:2vh;
          margin-bottom: 2vh;
        }

        .d_emai{
          margin-bottom: 2.5vh;
          margin-left: 5.4vh;
          font-size:1.8vh;
          
        }
        .espaco{
          margin-left: 4vh;
          margin-top: 0vh;
        }

        .d-img{
          margin-left: 25vh;
        }
        .img{
          height: 60vh ;
          width:50vh   ;
        }
        .btn{
          align-items:center;
          text-align:center;
          background-color: gray ;
          padding:1vh 2vh 1vh 2vh;
          width: 22vh ;
          border-radius: 5vh;
          margin:0vh 2vh 0vh 2vh;
        }
        .btn-se{
          display:flex;
          margin-top:2.5vh;
        }
        .div-tdbtn{
          margin-top:7vh;
          margin-left: 15vh ;
        }
        .p-ab{
          font-size:2.5vh;
          position: absolute;
          margin: 2.5vh 2vh 0vh 2vh;
        }
        .img-g{
          height: 45vh ;
          width:35vh   ;
          border-radius: 2vh;
        }

        .grid{
          margin-top:35vh;
          justify-content: center;
          display: grid;
          grid-template-columns: 45vh 45vh 45vh ;
          gap:7vh;
        }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">


    <div class="topo">
      <div class="esco">Hidraulica Eletricista Encanador</div>
      <div class="linha-cima" ></div>
    </div>

    <div class="d1-f">
      <div>
        <div class="rd">Rodrigo Faro</div>
        <div class= "he">Hidraulica, Eletrica</div>
        <div class= "he">Eletricista e encanador experiente.</div>
        <div class="d_emai">rodrigofaro1234@gmail.com</div>
        <div class="d_emai">+31 9 99863-8679</div>
        <div>Olá, meu nome é Rodrigo Faro e sou eletricista e encanador com 13 <br> anos de experiência. Meu objetivo é fornecer soluções seguras e <br> eficientes para suas necessidades elétricas e hidráulicas. <br>
              Ofereço uma ampla gama de serviços, incluindo: <br>
              Serviços Elétricos: <br>
              <div class="espaco"> ° Instalação e manutenção de sistemas elétricos</div> 
              <div class="espaco"> ° Diagnóstico e reparo de falhas </div>  
              <div class="espaco"> ° Instalação de iluminação e tomadas  </div>
              Serviços Hidráulicos: <br>
              <div class="espaco"> ° Reparos e manutenção de encanamentos </div> 
              <div class="espaco"> ° Instalação de torneiras e chuveiros </div> 
              <div class="espaco"> ° Desentupimento de pias e vasos sanitários </div> 
              Meu compromisso é com a qualidade e a satisfação do cliente, <br> sempre respeitando prazos e orçamentos. Para soluções confiáveis e <br> profissionais, entre em contato!</div>
      </div>


      <div>

        <div class="d-img" ><img class="img" src="img/Catalogue Car.jpg" alt=""></div>

        <div class="icons">
          <div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="4vh" height="4vh" viewBox="0 0 50 50">
            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
              </svg>  </div>
          <div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="4vh " height="4vh" viewBox="0 0 50 50">
            <path d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 29.079097 3.1186875 32.88588 4.984375 36.208984 L 2.0371094 46.730469 A 1.0001 1.0001 0 0 0 3.2402344 47.970703 L 14.210938 45.251953 C 17.434629 46.972929 21.092591 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 21.278025 46 17.792121 45.029635 14.761719 43.333984 A 1.0001 1.0001 0 0 0 14.033203 43.236328 L 4.4257812 45.617188 L 7.0019531 36.425781 A 1.0001 1.0001 0 0 0 6.9023438 35.646484 C 5.0606869 32.523592 4 28.890107 4 25 C 4 13.390466 13.390466 4 25 4 z M 16.642578 13 C 16.001539 13 15.086045 13.23849 14.333984 14.048828 C 13.882268 14.535548 12 16.369511 12 19.59375 C 12 22.955271 14.331391 25.855848 14.613281 26.228516 L 14.615234 26.228516 L 14.615234 26.230469 C 14.588494 26.195329 14.973031 26.752191 15.486328 27.419922 C 15.999626 28.087653 16.717405 28.96464 17.619141 29.914062 C 19.422612 31.812909 21.958282 34.007419 25.105469 35.349609 C 26.554789 35.966779 27.698179 36.339417 28.564453 36.611328 C 30.169845 37.115426 31.632073 37.038799 32.730469 36.876953 C 33.55263 36.755876 34.456878 36.361114 35.351562 35.794922 C 36.246248 35.22873 37.12309 34.524722 37.509766 33.455078 C 37.786772 32.688244 37.927591 31.979598 37.978516 31.396484 C 38.003976 31.104927 38.007211 30.847602 37.988281 30.609375 C 37.969311 30.371148 37.989581 30.188664 37.767578 29.824219 C 37.302009 29.059804 36.774753 29.039853 36.224609 28.767578 C 35.918939 28.616297 35.048661 28.191329 34.175781 27.775391 C 33.303883 27.35992 32.54892 26.991953 32.083984 26.826172 C 31.790239 26.720488 31.431556 26.568352 30.914062 26.626953 C 30.396569 26.685553 29.88546 27.058933 29.587891 27.5 C 29.305837 27.918069 28.170387 29.258349 27.824219 29.652344 C 27.819619 29.649544 27.849659 29.663383 27.712891 29.595703 C 27.284761 29.383815 26.761157 29.203652 25.986328 28.794922 C 25.2115 28.386192 24.242255 27.782635 23.181641 26.847656 L 23.181641 26.845703 C 21.603029 25.455949 20.497272 23.711106 20.148438 23.125 C 20.171937 23.09704 20.145643 23.130901 20.195312 23.082031 L 20.197266 23.080078 C 20.553781 22.728924 20.869739 22.309521 21.136719 22.001953 C 21.515257 21.565866 21.68231 21.181437 21.863281 20.822266 C 22.223954 20.10644 22.02313 19.318742 21.814453 18.904297 L 21.814453 18.902344 C 21.828863 18.931014 21.701572 18.650157 21.564453 18.326172 C 21.426943 18.001263 21.251663 17.580039 21.064453 17.130859 C 20.690033 16.232501 20.272027 15.224912 20.023438 14.634766 L 20.023438 14.632812 C 19.730591 13.937684 19.334395 13.436908 18.816406 13.195312 C 18.298417 12.953717 17.840778 13.022402 17.822266 13.021484 L 17.820312 13.021484 C 17.450668 13.004432 17.045038 13 16.642578 13 z M 16.642578 15 C 17.028118 15 17.408214 15.004701 17.726562 15.019531 C 18.054056 15.035851 18.033687 15.037192 17.970703 15.007812 C 17.906713 14.977972 17.993533 14.968282 18.179688 15.410156 C 18.423098 15.98801 18.84317 16.999249 19.21875 17.900391 C 19.40654 18.350961 19.582292 18.773816 19.722656 19.105469 C 19.863021 19.437122 19.939077 19.622295 20.027344 19.798828 L 20.027344 19.800781 L 20.029297 19.802734 C 20.115837 19.973483 20.108185 19.864164 20.078125 19.923828 C 19.867096 20.342656 19.838461 20.445493 19.625 20.691406 C 19.29998 21.065838 18.968453 21.483404 18.792969 21.65625 C 18.639439 21.80707 18.36242 22.042032 18.189453 22.501953 C 18.016221 22.962578 18.097073 23.59457 18.375 24.066406 C 18.745032 24.6946 19.964406 26.679307 21.859375 28.347656 C 23.05276 29.399678 24.164563 30.095933 25.052734 30.564453 C 25.940906 31.032973 26.664301 31.306607 26.826172 31.386719 C 27.210549 31.576953 27.630655 31.72467 28.119141 31.666016 C 28.607627 31.607366 29.02878 31.310979 29.296875 31.007812 L 29.298828 31.005859 C 29.655629 30.601347 30.715848 29.390728 31.224609 28.644531 C 31.246169 28.652131 31.239109 28.646231 31.408203 28.707031 L 31.408203 28.708984 L 31.410156 28.708984 C 31.487356 28.736474 32.454286 29.169267 33.316406 29.580078 C 34.178526 29.990889 35.053561 30.417875 35.337891 30.558594 C 35.748225 30.761674 35.942113 30.893881 35.992188 30.894531 C 35.995572 30.982516 35.998992 31.07786 35.986328 31.222656 C 35.951258 31.624292 35.8439 32.180225 35.628906 32.775391 C 35.523582 33.066746 34.975018 33.667661 34.283203 34.105469 C 33.591388 34.543277 32.749338 34.852514 32.4375 34.898438 C 31.499896 35.036591 30.386672 35.087027 29.164062 34.703125 C 28.316336 34.437036 27.259305 34.092596 25.890625 33.509766 C 23.114812 32.325956 20.755591 30.311513 19.070312 28.537109 C 18.227674 27.649908 17.552562 26.824019 17.072266 26.199219 C 16.592866 25.575584 16.383528 25.251054 16.208984 25.021484 L 16.207031 25.019531 C 15.897202 24.609805 14 21.970851 14 19.59375 C 14 17.077989 15.168497 16.091436 15.800781 15.410156 C 16.132721 15.052495 16.495617 15 16.642578 15 z"></path>
            </svg></div>
        </div>

      </div>
      
    </div>

      <!-- bton -->
        <div>
          <div class="div-tdbtn">
            <div>Sou Especializado em...</div>
            <div class="btn-se">
              <div class="btn">Hidraulica</div>
              <div class="btn">Eletrica</div>
            </div>
          </div>



          <div class="div-tdbtn">
            <div>Serviços já realizados:</div>
            <div class="btn-se">
              <div class="btn">Pintura</div>
              <div class="btn">trocar Torneira</div>
              <div class="btn">Mecanica</div>
            </div>
          </div>
        </div>



      <!-- GRID -->

        <div class="grid">

          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>

          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>
          
          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>

          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>

          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>

          <div>
            <div class="p-ab">Instlação Elétrica <br> em predio</div>
            <div><img class="img-g" src="img/Catalogue Car.jpg" alt=""></div>
          </div>
        </div>




    <form action="index.php" method="POST">
        <div class="chat-button" onclick="toggleChat()">
            <i class="fa fa-comment"></i> <!-- Ícone (exemplo usando Font Awesome) -->
           
        </div>

  
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


<script>
  function toggleChat() {
    var chatContainer = document.getElementById('chatContainer');
    chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
  }

  function enviarMensagem() {
    var mensagem = document.getElementById('mensagem').value.trim();

    if (mensagem !== '') {
      
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
</script>
</body>
</html>