<?php
if(isset($_POST['submit'])) {
    include_once('conexao.php');

    $tiposervico = $_POST['tiposervico'];
    $experiencia = $_POST['experiencia'];
    $certificado = $_POST['certificado'];

    $result = mysqli_query($mysqli, "INSERT INTO servico(tiposervico, experiencia, certificado) VALUES('$tiposervico', '$experiencia', '$certificado')");

    if (!$result) {
        die('Erro na query: ' . mysqli_error($mysqli));
    }

    mysqli_close($mysqli);

    // Redirecionamento após inserção bem-sucedida
    header('Location: prestarservico2.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid #238e68;
        }
        legend{
            border: 1px solid #238e68;
            padding: 10px;
            text-align: center;
            background-color: #238e68;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events:none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: #238e68;
            border:none;
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        
        }
        .btnvoltar{
            padding: 10px;
            text-decoration : none;
            background-color: white;
            color: black;
            border-radius: 10px;
            position: absolute;
            top: 3%;
        }
        .listasus{
            width: 200px;
            height: 30px;
            font-size: 20px;
        }
        .optionlista{
            font-size: 20px;
        }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="box">
        <form action="prestarservico2.php" method="POST">
            <fieldset>
                <legend>
                    <b>
                        Prestar Serviço
                    </b>
                </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="servico" id="servico" class="inputUser" required>
                    <label for="servico" class="labelInput">Tipo de Serviço</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="experiencia" id="experiencia" class="inputUser" required>
                    <label for="experiencia" class="labelInput">Experiencia no Serviço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="certificado" id="certificado" class="inputUser" required>
                    <label for="certificado" class="labelInput">Certificado/Doucumento do Serviço</label>
                </div>
               
                <br><br>
                
                <input type="submit" name="submit" id="submit"  >
            </fieldset>
        </form>
    </div>
</body>
</html>
