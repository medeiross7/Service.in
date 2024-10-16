<?php
include_once('conexao.php');

$msg = false;

if (isset($_FILES['arquivo']) && isset($_POST['plano'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); 
    $novo_nome = md5(time()) . $extensao; 
    $diretorio = "img/"; 

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

    $plano = $_POST['plano'];

    $sql_code = "INSERT INTO cadastro_colaborador (arquivo, plano) VALUES ('$novo_nome', '$plano')";

    if ($mysqli->query($sql_code)) {
        
        header('Location: sistema.php');
        exit(); 
    } else {
        $msg = "Falha ao enviar o perfil.";
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
        li {
            list-style-type: none;
            margin-left: -4vh;
            margin-top: 0.5vh;
            font-size: 2.2vh;
        }

        body {
            background-color: #238E68;
            display: flex;

        }

        .div-mae {
            margin-top: 5%;
            background-color: #D9D9D9;
            height: 80%;
            width: 60%;
            border-radius: 4vh;
            text-align: center;
            padding: 2vh 4vh 0vh 4vh;

        }

        .quase {
            font-size: 6vh;
            margin-bottom: 2vh;

        }

        .escolha {
            margin-left: -56%;
            font-size: 4vh;
        }

        .planos {
            margin-bottom: 4vh;
            font-size: 4vh;
            margin-top: 10px;
        }

        .card {
            margin: 0vh 2vh 0vh 2vh;
            width: 30%;
            height: 100%;
            padding-top: 2vh;
            padding-bottom: 2.5vh;
            background-color: white;
            text-align: left;
        }

        .bronze {
            font-size: 5vh;
            color: #F8832E;
            margin-left: 2.5vh;
        }

        .prata {
            font-size: 5vh;
            color: #90A3BF;
            margin-left: 2.5vh;
        }

        .ouro {
            font-size: 5vh;
            color: #FFB800;
            margin-left: 2.5vh;
        }

        .oque {
            margin-left: 2.5vh;
        }

        .linha {
            width: 100%;
            border-bottom: 1px solid #000000;

        }

        .verde {
            color: #238E68;
            font-weight: bolder;
        }

        .div-cards {
            display: flex;

        }

        .inpt {
            display: flex;
            justify-content: space-around;
        }

        .inp-text {
            box-shadow: 0 0 0 0;
            border: 0 none;
            outline: 0;
            width: 30%;
        }

        .fts {
            margin-top: 2%;
            margin-left: -50%;
            margin-bottom: 2%;
        }

        .pronto {
            padding: 1vh 3.3vh 1vh 3.3vh;
            text-decoration: none;
            background-color: white;
            color: black;
            border-radius: 10px;
            box-shadow: 0 0 0 0;
            border: 0 none;
            outline: 0;
            font-size: 2.5vh;
            height: 5vh;
            margin-top: 2vh;
            margin-left: 48vw;

        }

        .d-btn {
            position: absolute;
            margin: 43% 0% 0% 63%;
        }
    </style>


</head>


<body style="font-family: Arial, Helvetica, sans-serif;">

    <div class="div-mae">

        <div class="quase">
            Quase Tudo Pronto!
        </div>

        <div class="escolha">
            Escolha sua Foto de Perfil
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="inputBox">
                <label for="arquivo" class="labelInput">Foto de Perfil:</label><br>
                <input type="file" name="arquivo" required accept="image/png, image/jpeg"
                    style="background-color: grey; width: 350px;"><br><br>
            </div>



            <div class="planos">
                Planos Disponiveis
            </div>

            <div class="div-cards">

                <div class="card">
                    <div class="bronze">Bronze</div>
                    <div class="oque">Oque vai ser <br> Disponipilizado?</div>
                    <h1 class="linha"></h1>
                    <ul>
                        <li>Prioridade de Serviços.</li>
                        <li>Alterar Foto de Perfil.</li>
                        <li>Alterar Sobre.</li>
                        <li>Ter Redes Sociais no Perfil.</li>
                        <li class="verde">Adicionar Fotos de Serviços.</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="prata">Prata</div>
                    <div class="oque">Oque vai ser <br> Disponipilizado?</div>
                    <h1 class="linha"></h1>
                    <ul>
                        <li>Prioridade de Serviços.</li>
                        <li>Alterar Foto de Perfil.</li>
                        <li class="verde">Alterar Sobre.</li>
                        <li class="verde">Ter Redes Sociais no Perfil.</li>
                        <li class="verde">Adicionar Fotos de Serviços.</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="Ouro">Ouro</div>
                    <div class="oque">Oque vai ser <br> Disponipilizado?</div>
                    <h1 class="linha"></h1>
                    <ul>
                        <li class="verde">Prioridade de Serviços.</li>
                        <li class="verde">Alterar Foto de Perfil.</li>
                        <li class="verde">Alterar Sobre.</li>
                        <li class="verde">Ter Redes Sociais no Perfil.</li>
                        <li class="verde">Adicionar Fotos de Serviços.</li>
                    </ul>
                </div>

            </div>
            <div class="inpt">
            <label for="bronze"></label>
            <input type="radio" id="bronze" name="plano" value="bronze" required>

            <label for="prata"></label>
            <input type="radio" id="prata" name="plano" value="prata" required>

            <label for="ouro"></label>
            <input type="radio" id="ouro" name="plano" value="ouro" required>
        </div>
            <input class="pronto" type="submit" name="submit" value="Concluido !">
        </form>
        <!-- checkbox -->
        

        


    </div>



    

        

   





</body>

</html>