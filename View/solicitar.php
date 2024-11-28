<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('Location: cadastro.php');
}
$logado = $_SESSION['email']; //email conectado na sessao, atentar na hora de fazer o layout
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Controller/css/solicitar.css">
    <style>
        .incial {
            height: 20vh;
            background-color: #238E68;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .incial img {
            height: 50px;
        }

        .divinformaçoes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .divs1 {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 250px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .divs1:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .divs1 h4 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .divs1 img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 10px 0;
            background-color: #f0f0f0;
        }

        .divs1 a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #238E68;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .divs1 a:hover {
            background-color: #1b6e53;
        }

        @media (max-width: 768px) {
            .incial {
                padding: 10px;
            }

            .btnhead {
                font-size: 16px;
                
            }

            .divs1 {
                width: 200px;
            }

            .divs1 img {
                width: 80px;
                height: 80px;
            }

            .menu-link {
                font-size: 16px;
                margin-left: 100px;
            }
            .divinformaçoes{
                margin-left: -80px;
            }
            .menu{
                margin-left: 100px;
            }
            #prestar{
                margin-left: 200px;
            }
            #solicitar{
                margin-left: 200px;
            }
        }

        /* Responsividade para celulares */
        @media (max-width: 480px) {
            .divinformaçoes {
                flex-direction: column;
                align-items: center;
                margin-left: -100px;
            }

            .divs1 {
                width: 100%;
                max-width: 300px;
            }

            .divs1 img {
                width: 70px;
                height: 70px;
            }

            .btnhead {
                font-size: 14px;
                margin: 5px 0;
            }

            .menu-link {
                font-size: 14px;
            }

            .submenu a {
                font-size: 12px;
            }
            .menu{
                margin-left: 100px;
            }
            
        }
    </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
    <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <a href="../index.php"><img style="height: 10vh;margin-left: -30vw;" src="../Controller/img/Servece 1.png"
                    alt=""></a>
        </div>

        <div style="display: flex; margin-top: 30px; justify-content: space-around;">
            <div>
                <ul style="margin-left: -25vw;" class="menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link" id="linkmenu">Menu</a>
                        <ul class="submenu">
                            <li><a href="../Model/perfil_colaborador.php" id="profile">Perfil</li>
                            <li><a href="../Controller/alterarconta.php" id="account">Alterar Conta</a></li>
                            <li><a href="../Model/perfil_colaborador.php" id="profiledata">Alterar Dados do perfil</a></li>
                            <li><a href="../Controller/sair.php" id="leave">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div></div>
            <div> <a id="prestar" class="btnhead" href="prestar.php"
                    style="color: Black; font-size: 18px; text-decoration: none; margin-left: -250px;">Prestar
                    Serviços</a></div>
            <div> <a id="solicitar" class="btnhead" href="solicitar.php"
                    style="color: Black; font-size: 18px; text-decoration: none; margin-left: 100px;">Solicitar
                    Serviço</a></div>
            <div> <a class="btnhead" href="prestar.php"
                    style="color: Black; font-size: 18px; text-decoration: none; margin-left: 220px;">Prestar Serviço </a></div>
        </div>
    </div>

    <div class="divinformaçoes">
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador1.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador2.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>
                Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador3.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>
                Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador4.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador5.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador6.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador7.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="../Controller/img/7319933-black-avatar-person-icons-user-profile-icon-vetor.jpg" alt="">
            <a href="../Model/prestador8.php">Entrar em contato</a>
        </div>
    </div>

</body>

</html>