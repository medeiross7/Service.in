<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Controller/css/sobre.css">
    <style>
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
                margin-left: 0;
                font-size: 14px;
            }

            .acentral {
                width: 90%;
                margin: auto;
            }

            .colaborador h1 {
                font-size: 18px;
            }

            .colaborador p {
                font-size: 12px;
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

            .rodape {
                width: 120vw;
                height: 33.8vh;
            }

            .img2 img {
                width: 40vw;
            }

            .um-um {
                margin-left: 100px;
            }

            .imgp1 {
                width: 300px;
                margin-left: 50px;
            }

            .primeiro-texto {
                margin-left: 200px;
            }

            .incial {
                width: 116.5vw;
            }

            .img-longa {
                width: 116.5vw;
            }

            .btnhead {
                margin-left: -30px;
            }
            #prestar{
                margin-left: 150px;
            }
        }
    </style>
</head>

<body style="">
    <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <a href="../index.php"><img style="heigth: 10vh;" src="../Controller/img/Servece 1.png" alt=""></a>

        </div>
        <div style="display: flex; margin-top: 30px; justify-content: space-around; margin-left: -500px;">
            <div></div>
            <div> <a id="prestar" class="btnhead" href="prestar.php"
                    style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
            <div> <a id="solicitar" class="btnhead" href="" style="color: Black; font-size: 18px; text-decoration: none;">Solicitar
                    Serviço</a></div>
            <div> <a id="sobre" class="btnhead" href="sobre.php"
                    style="color: Black; font-size: 18px; text-decoration: none;">Sobre</a></div>
        </div>
    </div>
    <div class="divimg">
    </div>
    <div>

        <div>
            <div>
                <img class="img-longa" src="../Controller/img/Rectangle 16.png" alt="">
            </div>

            <div class="qm">
                Quem Somos?
            </div>
        </div>


        <div class="primeiro-texto">
            <div>
                <img class="imgp1" src="../Controller/img/p1.png" alt="">
            </div>

            <div class="um">
                <div class="um-um">
                    Trabalhamos para facilitar os pequenos serviços <br>
                    das pessoas dentro de casa
                </div>

                <div class="um-dois">
                    Facilitando a vida em seus lares, em todos os cantos do mundo. Essa é <br>
                    nossa missão. Nosso propósito pulsa em cada tarefa que assumimos. <br> Levantamos todos os dias
                    prontos para redefinir a experiência de <br>
                    manutenção domiciliar. Para você. Por todos os desafios que surgem em <br>
                    seu lar. Por tudo o que você deseja conquistar em um espaço que reflete <br>
                    quem você é. Para todos os reparos que precisam ser feitos. Em qualquer <br>
                    lugar. A qualquer hora. Com a eficiência que só a atenção aos detalhes <br>
                    pode oferecer. Porque sabemos que quando seu lar está em ordem, tudo <br>
                    flui melhor. Estamos aqui para tornar isso uma realidade, a cada momento, <br>
                    no ritmo da vida moderna.
                </div>
            </div>
        </div>


        <div class="primeiro-texto">
            <div id="umu" class="um">
                <div class="um-um">
                    Sustentabilidade
                </div>

                <div class="um-dois">
                    Nosso compromisso é com um lar sustentável para um mundo mais <br>
                    verde. Cada serviço que oferecemos é impulsionado pela visão de <br>
                    um futuro mais limpo e consciente. Priorizamos materiais e práticas <br>
                    eco-friendly, minimizando nosso impacto ambiental. Estamos aqui <br>
                    para cuidar do seu lar e do nosso planeta, em harmonia e equilíbrio.
                </div>

            </div>

            <div class="img2">
                <img src="../Controller/img/sus.png" alt="">
            </div>


        </div>

    </div>
    <div class="rodape">
        <div>
            <img src="../Controller/img/Servece 3.png">
            <p class="paragrafro">
                © 2024 Service.in Todos os direitos reservados. <br>
                Endereço: Rua Itajúba, 223, floresta, Belo Horizonte - MG, Brasil<br>E-mail: contato@exemplo.com.br
                <br><br><br><br><br>

                Para mais informações, visite nossa pagina <a style=" color: white;" href="sobre.php">SOBRE NÓS</a> ou
                entre em contato conosco.

            <p>
        </div>
        <div>
            <button class="compartilhe">Compartilhe</button>
            <p class="redes" style="color: white; font-family: Arial, Helvetica, sans-serif; font-weight: 700;">
                Encontre-Nos
            </p>

            <a style="margin-right: 10px;" class="redes" href="https://web.whatsapp.com/" target="_blank"><img
                    src="../Controller/img/Vector.png"></a>
            <a style="margin-right: 10px;" href="https://www.instagram.com/" target="_blank"><img
                    src="../Controller/img/Vector (2).png"></a>
            <a style="margin-right: 10px;" href="https://github.com/" target="_blank"><img
                    src="../Controller/img/Social Icons (2).png"></a>
           
        </div>

    </div>

</body>

</html>