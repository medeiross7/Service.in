<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    include_once('logar.php');

    $nome = $_POST['nome'];
    $profissao = $_POST['profissao'];


    $result = mysqli_query($mysqli, "INSERT INTO avaliacao(nome, profissao) VALUES('$nome', '$profissao')");

    if (!$result) {
        die('Erro na query: ' . mysqli_error($mysqli));
    }

    mysqli_close($mysqli);

    // Redirecionamento após inserção bem-sucedida
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliaçao</title>
    <link rel="stylesheet" href="../Controller/css/avaliacao.css">
</head>
<body>
    <form action="avaliacao.php" method="POST">
        <fieldset>
            <div class="d-t">
                <div class="pri">
                    <div class="d-avaliacao">AVALIAÇÃO DE PROFISSIONAL</div>
                    <div class="d-um">
                        <div class="aling"><img class="img-p" src="p1.png" alt=""> </div>
                        <div class="t" id="d-nm">
                            <label for="nome" class="labelInput"></label>
                            <input class="margin-left: 10px;" type="nome" name="nome" id="nome" class="inputUser"
                                required> <br>
                            <label for="profissao" class="labelInput">Profissão</label>
                            <input type="text" name="profissao" id="profissao" class="inputUser" required>
                        </div>
                        <div>
                            <div class="t">DESEJA AVALIAR O <br> SERVIÇO PRESTADO?</div>
                            <div class="s-btn">
                                <input id="inp-c" type="submit" name="none" value="SIM!">
                                <input class="inp-s" type="submit" name="none" value="NÃO OBRIGADO.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="duo">
                    <div class="d-bx">
                        <div class="grid">
                            <!--  -->
                            <div class="ava">
                                <div> <img class="img-ava" src="../Controller/img/p1.png" alt=""> </div>
                                <div class="textali">RÁPIDO!</div>
                                <div>
                                    <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg></div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="ava">
                                <div> <img class="img-ava" src="../Controller/img/p1.png" alt=""> </div>
                                <div class="textali">SERVIÇO <br> DETALHADO</div>
                                <div>
                                    <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg></div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="ava">
                                <div> <img class="img-ava" src="../Controller/img/p1.png" alt=""> </div>
                                <div class="textali">BOAS <br> FERRAMENTAS</div>
                                <div>
                                    <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg></div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="ava">
                                <div> <img class="img-ava" src="../Controller/img/p1.png" alt=""> </div>
                                <div class="textali">ORGANIZADO</div>
                                <div>
                                    <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg></div>
                                </div>
                            </div>
                            <input type="submit" name="submit" id="submit" value="Avaliar">
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>