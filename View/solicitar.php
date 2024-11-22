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

</head>

<body style="font-family: Arial, Helvetica, sans-serif; margin: 0;">
    <div style="height: 20vh; background-color: #238E68; display: flex;  flex-direction: column;" class="incial">
        <div style="margin-left:   35vw ; heigth: 20vh;">
            <a href="index.php"><img style="heigth: 10vh;" src="../Controller/img/Servece 1.png" alt=""></a>
        </div>

        <div style="display: flex; margin-top: 30px; justify-content: space-around;">
            <div>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link" id="linkmenu">Menu</a>
                        <ul class="submenu">
                            <li><a href="../Model/perfil_colaborador.php" id="profile">Perfil</a></li>
                            <li><a href="../Controller/alterarconta.php" id="account">Alterar Conta</a></li>
                            <li><a href="../Model/perfil_colaborador.php" id="profiledata">Alterar Dados do perfil</a></li>
                            <li><a href="../Controller/sair.php" id="leave">Sair</a></li>
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

    <div class="divinformaçoes">
        <div class="divs1">
            <h4>Nome</h4>
            <img src="" alt="">
            <a href="../Model/prestador1.php">Entrar em contato</a>
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