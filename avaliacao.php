<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliaçao</title>
    
    <style>

        body{
            background-color: #238E68;
            margin:8vh;
            font-family: Arial, Helvetica, sans-serif;
            
        }        

        .d-t{
            text-align: center;
            width: 100%;
            justify-content: center;
            align-items: center;
            background-color: #D9D9D9;
            height: 100vh   ;
           
        }

        .d-um{
            display:flex;
            background-color: white ;
            padding: 9vh 22vh 4vh 22vh   ;
            
        }

        .img-p{
            height: 12vh;
            width: 12vh;
            border-radius: 50%
        }

        #d-nm{
            margin-left: 3vh;
            margin-right: 7.5vh;
        }
        .aling{
            
            margin-top:-3.4vh;
            margin-left: -10vh
        }

        .t{
            font-size: 3.2vh;
            
        }

        .inp-s{
            border:none;
            padding-left: 3.2vh;
            padding-right: 3.2vh;
            padding-top:1vh;
            padding-bottom: 1vh ;
            background-color: gray;
            margin-left:2.5vh;
        
        }

        #inp-c{
            border:none;
            padding-left: 3.2vh;
            padding-right: 3.2vh;
            padding-top:1vh;
            padding-bottom: 1vh ;
            background-color: #238E68;
      
        }
;
        

        .s-btn{
            
        }

        .d-bx{
            
            background-color:white;
            height: 48vh;
            margin-top: 5vh;
            width: 100vh;

        }

        .ava{
            display:flex;
        }

        .img-ava{
            height: 12vh;
            width: 12vh;
            outline-style: outset;
            outline-color:gray;
            
        }

        .grid{
            padding-left:10vh;
            padding-top: 5vh;
            display: grid;
            grid-template-columns: 50vh 50vh;
            justify-content: space-evenly;
            grid-template-rows: 18vh 18vh
            

        }
        

        .svgs{
            height: 2.5vh;
            width: 2.5vh;
        }

        .pri{
            display: inline-block;
        }

        .duo{
            display: inline-block;
        }

        .textali{
            text-align: left;
            margin-left: 3.2vh;
            margin-top: 4vh;
            width: 13vh;
        }

        .div-svg{
            margin-top: 3vh;
            margin-left: 5vh
        }

        .svgs:hover{
            outline-style: outset;
            outline-color:#238E68;
            fill: #238E68;
            height: 3.5vh;
            width: 3.5vh;

        }

        .d-avaliacao{
            padding-bottom: 1vh;
            padding-top:3vh;
            font-size:6.2vh;
        }

    </style>
</head>


<body>
    
        <div class="d-t">

            <div class="pri" >

                    <div class="d-avaliacao" >AVALIAÇÃO DE PROFISSIONAL</div>

                    <div class="d-um">

                        <div class="aling"><img class="img-p" src="p1.png" alt=""> </div>
                        <div class="t"  id="d-nm">  NOME/ <br>PROFISSAO   </div>
                        <div>
                            <div class="t">DESEJA AVALIAR O <br> SERVIÇO PRESTADO?</div>

                            <div class="s-btn">

                              <input id="inp-c" type="submit" name="none" value="SIM!"> 
                            
                              <input class="inp-s" type="submit" name="none" value="NÃO OBRIGADO."> 

                            </div>
                        </div>

                     </div>
            </div>



            <div  class="duo">

                <div class="d-bx">

                <div class="grid" >
                        <!--  -->
                    <div class="ava">
                        <div> <img class="img-ava" src="p1.png" alt=""> </div>
                        <div class="textali" >RÁPIDO!</div>

                        <div>
                            <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></div>
                        </div>

                    </div>
                        <!--  -->
                    <div class="ava">
                        <div> <img class="img-ava" src="p1.png" alt=""> </div>
                        <div class="textali" >SERVIÇO <br> DETALHADO</div>

                        <div>
                            <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></div>
                        </div>

                    </div>
                        <!--  -->
                    <div class="ava">
                        <div> <img class="img-ava" src="p1.png" alt=""> </div>
                        <div class="textali">BOAS <br> FERRAMENTAS</div>

                        <div>
                            <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></div>
                        </div>

                    </div>
                        <!--  -->
                    <div class="ava">
                        <div> <img class="img-ava" src="p1.png" alt=""> </div>
                        <div class="textali">ORGANIZADO</div>

                        <div>
                            <div class="div-svg"><svg class="svgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></div>
                        </div>

                    </div>
                        <!--  -->
                </div>

            </div>

</div>

            

        </div>

       



</body>
</html>