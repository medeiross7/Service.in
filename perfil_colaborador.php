<?php
    session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){
        header('Location: login.php');
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
          body{
            background-color: #238E68;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 3vh
            
        }    

        .div-cin{
            background-color: gray;
            height: auto ;
             width: 75% ;
             padding: 7.5vh 10vh 7.5vh 20vh;
            margin-top: 7.5vh;
              
        }

        .d-mae{
            display: grid;

            place-items: center;
            align-items: center;
        }

        .mg{
             margin-bottom: 3vh;
             margin-left: -10vh;
             display:flex;
             
        }

        p{
            margin-left: 20vh;
        }

        .inp{
            margin-left: 5vh;
            width: 25vh ;
            height: 2vh ;
            padding: 0.5vh 2vh 0.5vh 2vh;
        }

        .sel{
            margin-left: 5vh;
            width: 25vh ;
            height: 3vh ;
   
        }
        .aperfil{
            text-decoration: none;
             color: black;
        }
        
        .aperfil:hover{
            background-color: rgba(0, 0, 0, 0.5);
        }

</style>
</head>
<body>


        <form action="delete.php" method="POST">
        <div class="d-mae">

            <div class="div-cin">
    <div class="mg"> Nome</div>
    <div class="mg">Sobrenome</div>               
    </div>


    <div class="div-cin">
    <div class="mg">Alterar telefone <p></p>  (**)*****-**** <input class="inp" type="tel"> </div>
    <div class="mg">Alterar email <p></p> *************@gmail.com <input class="inp" type="text"> </div>
    

    <div class="mg">Adicionar tipo de serviço 
        <div>  <select class="sel" name="cars">
              <option value="volvo">Hidraulica</option>
                <option value="saab">Eletrica</option>
                  <option value="fiat">Mecanico</option>
                     <option value="audi">Gogo boy</option>
                        </select> </div>
      </div>

        </div>


        <div class="div-cin">
        <a class="aperfil"  href="alterarsobre.php"><div class="mg">Alterar sobre <p></p> </div></a>
        <a class="aperfil"  href="alterarsenha.php"><div class="mg">Alterar senha<p></p></div></a>
        <a class="aperfil"  href="alterarfoto.php"><div class="mg">Alterar Fotos do Perfil <p></p></div></a>
        </div>

        <div>
            <a href="index.php"> <input class="btn-del"   type="button" value="Excluir Conta" name="deletar"></a>
       
        <input class="btn-del"  type="button" value="Alterar" name="alterar">
        </div>


        </div>
        </form>
       
    
</body>
</html>