<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #238e68;
        }
        
        


        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputsubmit{
            background-color: #56FFC3;
            border: none;
            padding: 15px;
            width: 70%;
            border-radius: 10px;
            color: white;
            font-size: 3vh;
            color:black;
            margin-left:7vh;
            
        }
        .inputsubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
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

        .mae{
            display:flex;
            justify-content: space-around
        }
    
      

        .bem{
            font-size: 4.5vh ;
            margin-top: 56% ;
            margin-left: 8vh;
            margin-bottom: 38%;
        }

        .uso{
            font-size: 4vh;
        }

        .inputemail{
            width: 40vh;
            height:1.8vh;
        }

        .fle{
            display: flex;
            justify-content: space-between;

            

        }

        .img2{
            height: 80vh;
            width: 40vh;
        }

        .div-mae2{
            width: 125%;
            height: 112%;   
            background-color: white;
            margin-right: -18vh;
            margin-bottom: -10vh;
            display:flex;
            align-items: center;
            margin-top: 1vh;
            border-radius:5%;
            
        }
        

        .img1{
            width: 80vh;
            height: 100.2%;  
        }

        .sub-imgs{
            margin-left: 10vh;

        }

        .letr{
            font-size: 1.8vh;
        }
       

    </style>
</head>
<body>
    <a href="index.php" class="btnvoltar">Voltar</a>

    

    <div class = "mae">

        <div>

<div class="bem">BEM VINDO(A)</div>

            <div class="uso">Usuário</div>

            <form action="logar.php" method="POST">
             <input  class="inputemail"  type="text" name="email"  placeholder="Email">
             <br><br>
             <div class="uso">Senha</div>

             <input class="inputemail"  type="password" name="senha" placeholder="Senha">
                <div class="fle">
                <div class="letr" >Esqueci minha senha</div>
                 <div  class="letr" >Criar conta</div>
                </div> 
             <br><br>
              <input class="inputsubmit" type="submit" name="submit" value="Entrar">

           </form>

           </div>     

            <div >

        
                    <div class= "div-mae2">

                          <div class="sub-imgs">
                            <img class= "img1" src="image 5.png" alt="">
                          </div>
                    
                     </div>


            </div>
         


       



       

        
      </div>

        </div>

    <!-- <div>
        <h1>Login</h1>
        <form action="logar.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Enviar">

        </form>
        
    </div> -->



</body>
</html>