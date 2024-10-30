<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" type="text/css" href="public/css.css" />

    <style>
        .img-longa {
            width: 100%;
            height: 60vh;
        }


        .qm {
            position: absolute;
            margin-top: -10vh;
            margin-left: 18vh;
            font-size: 4vh;
            color: white;
            font-weight: 600;
        }

        .primeiro-texto {
            display: flex;
            justify-content: center;
            margin-top: 8vh;
            margin-bottom: 20px;


        }

        .um-um {
            font-size: 4vh;
            font-weight: 600;
            margin-bottom: 3.5vh;


        }

        .um {
            margin-left: 3.5vh;

        }

        #umu {
            margin-left: -15vh;
            margin-top: 5vh;
        }

        .img2 {
            margin-left: 10vh
        }

        .rodape {
            background-color: #000;
            height: 270px;
            width: 93.1vw;   
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
    </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <img style="heigth: 10vh;" src="img/Servece 1.png" alt="">
        </div>
        <div style="display: flex; margin-top: 30px; justify-content: space-around; margin-left: -500px;">
            <div></div>
            <div> <a class="btnhead" href="prestar.php" style="color: Black; font-size: 18px; text-decoration: none;">Prestar Serviços</a></div>
            <div> <a class="btnhead" href="" style="color: Black; font-size: 18px; text-decoration: none;">Solicitar Serviço</a></div>
            <div> <a class="btnhead" href="sobre.php" style="color: Black; font-size: 18px; text-decoration: none;">Sobre</a></div>
        </div>
    </div>
    <div class="divimg">

    </div>

    <div>

        <div>
            <div>
                <img class="img-longa" src="img/Rectangle 16.png" alt="">
            </div>

            <div class="qm">
                Quem Somos?
            </div>
        </div>


        <div class="primeiro-texto">
            <div>
                <img src="p1.png" alt="">
            </div>

            <div class="um">
                <div class="um-um">
                    Trabalhamos para facilitar os pequenos serviços <br>
                    das pessoas dentro de casa
                </div>

                <div class="um-dois">
                    Facilitando a vida em seus lares, em todos os cantos do mundo. Essa é <br>
                    nossa missão. Nosso propósito pulsa em cada tarefa que assumimos. <br> Levantamos todos os dias prontos para redefinir a experiência de <br>
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
                <img src="sus.png" alt="">
            </div>


        </div>

    </div>
    <div class="rodape">
        <div>
            <img src="img/Servece 3.png">
            <p class="paragrafro">
                © 2024 Service.in Todos os direitos reservados. <br>
                Endereço: Rua Itajúba, 223, floresta, Belo Horizonte - MG, Brasil<br>E-mail: contato@exemplo.com.br <br><br><br><br><br>

                Para mais informações, visite nossa pagina <a style=" color: white;" href="sobre.php">SOBRE NÓS</a> ou entre em contato conosco.

            <p>
        </div>
        <div>
            <button class="compartilhe">Compartilhe</button>
            <p class="redes" style="color: white; font-family: Arial, Helvetica, sans-serif; font-weight: 700;">
                Encontre-Nos
            </p>

            <a style="margin-right: 10px;" class="redes" href="https://web.whatsapp.com/" target="_blank"><img src="img/Vector.png"></a>
            <a style="margin-right: 10px;" href="https://www.instagram.com/" target="_blank"><img src="img/Vector (2).png"></a>
            <a style="margin-right: 10px;" href="https://github.com/" target="_blank"><img src="img/Social Icons (1).png"></a>
            <a href="https://br.linkedin.com/" target="_blank"><img src="img/Social Icons (2).png"></a>
        </div>

    </div>

</body>

</html>