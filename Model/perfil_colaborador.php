<?php
include_once('../conexao.php');

session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('Location: ../View/login.php');
    exit();
}

$email = $_SESSION['email'];

// Prepare a consulta SQL para obter o nome do usuário
$sql = "SELECT id, nome, email, telefone FROM usuarios WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

// Verifique se o usuário foi encontrado e obtenha os dados
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
    $nome = htmlspecialchars($user['nome']);
    $email = $user['email']; // Confirme se o email também está sendo capturado
    $telefone = $user['telefone']; // Agora a variável telefone é atribuída corretamente
    $id = $user['id']; // Pega o ID do usuário
} else {
    $nome = 'Nome não encontrado';
    $telefone = 'Telefone não encontrado'; // Caso o telefone não seja encontrado
    $id = null; // Define o ID como nulo caso o usuário não seja encontrado
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        body {
            background-color: #238E68;
            /* Cor de fundo verde */
            font-family: Arial, Helvetica, sans-serif;
            font-size: 3vh;
            margin: 0;
            color: #fff;
        }

        .div-cin {
            background-color: #F5F5F5 ;
            /* Um cinza mais suave */
            border-radius: 15px;
            width: 80%;
            padding: 5vh 5vw;
            margin: 7.5vh auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* Sombras para dar mais profundidade */
        }


        .d-mae {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .mg {
            margin-bottom: 3vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: #333;
            /* Fundo escuro para os itens */
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }


        .mg p {
            color: #bbb;
            /* Texto de detalhes em cinza claro */
            margin-left: 10px;
        }


        .inp {
            margin-left: 5vh;
            width: 25vh;
            height: 2vh;
            padding: 0.5vh 2vh;
        }

        .sel {
            margin-left: 5vh;
            width: 25vh;
            height: 3vh;
        }

        .aperfil {
            text-decoration: none;
            color: white;
            margin: 5px;
            display: block;
            padding: 10px;
            border-radius: 10px;
            background-color: #333;
            transition: background-color 0.3s ease;
        }

        .aperfil:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .aperfil p {
            margin: 0;
        }


        .btn-del {
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            margin-right: 10px;
            transition: all 0.3s ease;
            width: 150px;
            text-align: center;
        }

        .btn-del[type="submit"] {
            background-color: #D32F2F;
            color: white;
        }

        .btn-del[type="submit"]:hover {
            background-color: #B71C1C;
        }


        .btn-del[type="button"] {
            background-color: #4CAF50;
            color: white;
        }

        .btn-del[type="button"]:hover {
            background-color: #388E3C;
        }
    </style>
</head>

<body>
    <form action="../Controller/delete.php" method="POST">
        <div class="d-mae">
            <div class="div-cin">
                <div class="mg"><?php echo $nome; ?></div>
            </div>

            <div class="div-cin">
                <a class="aperfil" href="../Controller/alterartelefone.php">
                    <div class="mg">
                        Alterar Telefone
                        <p>
                            <?php echo $telefone; ?>
                        </p>
                    </div>
                </a>
                <a class="aperfil" href="../Controller/alteraremail.php">
                    <div class="mg">
                        Alterar Email
                        <p style="margin-left: 12.5vw;">
                            <?php echo $email; ?>
                        </p>
                    </div>
                </a>
                <a class="aperfil" href="../Controller/alterarsenha.php">
                    <div class="mg">
                        Alterar senha
                        <p></p>
                    </div>
                </a>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <input class="btn-del" type="submit" value="Excluir Conta" name="deletar">
                <a href="../View/sistema.php"><input class="btn-del" type="button" value="Voltar" name="Voltar"></a>
            </div>
        </div>
    </form>
</body>

</html>