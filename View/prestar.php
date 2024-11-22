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
    <link rel="stylesheet" href="../Controller/css/prestar.css">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../Controller/img/Servece 1.png" alt="Logo"></a>
        <nav>
            <a href="prestar.php">Prestar Serviços</a>
            <a href="solicitar.php">Solicitar Serviço</a>
            <a href="sobre.php">Sobre</a>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link">Menu</a>
                    <ul class="submenu">
                        <li><a href="../Model/perfil_colaborador.php">Perfil</a></li>
                        <li><a href="../Controller/alterarconta.php">Alterar Conta</a></li>
                        <li><a href="../Model/perfil_colaborador.php">Alterar Dados do Perfil</a></li>
                        <li><a href="../Controller/sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="section">
            <h2>Crie uma conta para solicitar serviços</h2>
            <a href="../Model/prestarservico.php" class="button">COMEÇAR</a>
        </section>
        <section class="section">
            <h2>Faça login para solicitar serviços</h2>
            <a href="../Model/prestarservico.php"class="button">COMEÇAR</a>
        </section>
    </main>

    <div class="foto">
        <img src="../Controller/img/image 7.png" alt="Imagem de serviço">
    </div>
</body>

</html>