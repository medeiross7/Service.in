<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('Location: cadastro.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Serviços</title>
    <link rel="stylesheet" href="prestar.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #238E68;
            height: 20vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        header img {
            height: 10vh;
            margin-bottom: 10px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 0 auto;
        }

        nav a {
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            border-radius: 25px;
        }

        nav a:hover {
            background-color: #1e7355;
        }


        .menu {
            list-style: none;
            padding: 0;
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
            font-weight: 700;
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


        main {
            margin-top: 25vh;
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .section {
            width: 45%;
        }

        .section h2 {
            font-size: 2em;
            margin-bottom: 15px;
            color: #333;
        }

        .button {
            background-color: #238E68;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #1e7355;
        }


        .foto {
            text-align: center;
            margin-top: 8vh;
        }

        .foto img {
            width: 100%;
            height: auto;
            max-width: 400px;
            border-radius: 15px;
        }


        @media screen and (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
            }

            .section {
                width: 90%;
                margin-bottom: 20px;
            }

            nav {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="index.php"><img src="img/Servece 1.png" alt="Logo"></a>
        <nav>
            <a href="prestar.php">Prestar Serviços</a>
            <a href="solicitar.php">Solicitar Serviço</a>
            <a href="sobre.php">Sobre</a>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link">Menu</a>
                    <ul class="submenu">
                        <li><a href="perfil_colaborador.php">Perfil</a></li>
                        <li><a href="#">Alterar Conta</a></li>
                        <li><a href="perfil_colaborador.php">Alterar Dados do Perfil</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="section">
            <h2>Crie uma conta para solicitar serviços</h2>
            <a href="prestarservico.php" class="button">COMEÇAR</a>
        </section>
        <section class="section">
            <h2>Faça login para solicitar serviços</h2>
            <a href="prestarservico.php" class="button">COMEÇAR</a>
        </section>
    </main>

    <div class="foto">
        <img src="img/image 7.png" alt="Imagem de serviço">
    </div>
</body>

</html>