<?php
    include_once('conexao.php');

    $msg = false;

    if(isset($_FILES['arquivo'])){
        $extensao =  strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "img/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
        $sql_code = "INSERT INTO arquivo (id, arquivo, data) VALUES(null,'$novo_nome', NOW())";
        if($mysqli->query($sql_code)){
            $msg = "Arquivo enviado com sucesso!";
        }
        else{
            $msg = "Falha ao enviar o Arquivo";
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
        .termos{
            padding: 10px;
            background-color: grey;
            width: 350px;
            text-align: center;
            text-decoration: none;
            color: white;
        }
        .divtermos{
            width: 350px;
            height: 40px;
            display: flex;
            align-items: center;
        }
        svg{
            color: white;
            
        }
        #submit{
            padding: 8px;
            background-color: grey;
            border: none;
            border-radius: 8px;
            color: white;
        }
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <?php
        if($msg != false) {
            echo "<p> $msg </p>";
        }
    ?>
    <div class="box">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <b>
                       Quase Tudo Pronto!
                    </b>
                </legend>
                <br>
                <div class="inputBox">
                    <label for="servico" class="labelInput">Foto de Perfil:</label><br>
                    <input type="hidden" name="arquivo" value="4194304" />
                    <br>
                    <input required name="arquivo" style="background-color: grey; width: 350px;" type="file" />   
                    
                </div>
                
                <br><br>
                <div class="divtermos">
                    <a class="termos" href="">Termos e condições
                    </a>
                    <a style="background-color: grey; height: 40px; display: flex; align-items: center;" href=""><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"><title>Chevron right small</title><path d="m16.9 12-4.6 6H8.5l4.6-6-4.6-6h3.8l4.6 6Z" fill="currentColor"></path>
                    <title>Chevron right small</title>
                    <path d="m16.9 12-4.6 6H8.5l4.6-6-4.6-6h3.8l4.6 6Z" fill="currentColor"></path>
                    </svg></a>
                    
                    
                    
                </div>
                <br><br>
               
                
                <input type="submit" name="submit" id="submit" value="Concluido!" >
            </fieldset>
        </form>
    </div>
</body>
</html>