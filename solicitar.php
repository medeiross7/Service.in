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

    <style>
        .div1 {
            display: flex;
            border-bottom: 2px solid black;
            padding: 10px;
            width: 80vw;
            margin-left: 8vw;
        }

        .div1 a {
            text-decoration: none;
            color: black;
        }

        .div1 h3 {
            margin-left: 100px;
            font-weight: 400;
        }

        .divs1 {
            background-color: grey;
            width: 15vw;
            height: 35vh;
            border-radius: 18px;
            margin-left: 100px;
            margin-top: 80px
        }

        .divs1 a {
            text-decoration: none;
            color: black;
            padding: 10px;
            background-color: white;
            border-radius: 6px;

        }

        .divinformaçoes {

            width: 100vw;
            height: 90vh;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
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
            <a href="index.php"><img style="heigth: 10vh;" src="img/Servece 1.png" alt=""></a>
        </div>

        <div style="display: flex; margin-top: 30px; justify-content: space-around;">
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
            <div></div>
            <div> <a class="btnhead" href="prestar.php" style="color: Black; font-size: 18px; text-decoration: none; margin-left: -350px;">Prestar Serviços</a></div>
            <div> <a class="btnhead" href="solicitar.php" style="color: Black; font-size: 18px; text-decoration: none; margin-left: -200px;">Solicitar Serviço</a></div>
            <div> <a class="btnhead" href="sobre.php" style="color: Black; font-size: 18px; text-decoration: none;">Sobre</a></div>
        </div>
    </div>
    <div class="div1">
        <a style="color:#238E68 " href="solicitar.php">
            <h3>Hidraulica</h3>
        </a>
        <a href="eletricista.php">
            <h3>Eletricista</h3>
        </a>
        <a href="Encanador.php">
            <h3>Encanador</h3>
        </a>

    </div>
    <div class="divinformaçoes">
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="prestador1.php">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>
                Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>
                Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="">Entrar em contato</a>
        </div>
    </div>

</body>

</html>