<?php
if(isset($_POST['submit'])){
    include_once('conexao.php');
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sobre = $_POST['sobre'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : ''; // corrigir para pegar o valor de sexo
    $data_nascimento = $_POST['data_nascimento'];
    $area_atuacao = isset($_POST['servico']) ? $_POST['servico'] : ''; // capturar a área de atuação


    // Inserir os dados no banco de dados, incluindo o caminho da imagem
    $stmt = $mysqli->prepare("INSERT INTO cadastro_colaborador (nome, telefone, email, sobre, estado, cidade, endereco, senha, sexo, data_nascimento, area_atuacao) VALUES (:nome, :telefone, :email, :sobre, :estado, :cidade, :endereco, :senha, :sexo, :data_nascimento, :area_atuacao)");
    $stmt->bind_param('ssssssssssss', $nome, $telefone, $email, $sobre, $estado, $cidade, $endereco, $senha, $sexo, $data_nascimento, $area_atuacao);
    
    if ($stmt->execute()) {
        header('Location: sistema.php');
        exit();
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Colaborador</title>
</head>

<style>

    textarea:focus, input:focus, select:focus {
    box-shadow: 0 0 0 0;
    border: 0 none;
    outline: 0;
} 

    input[type="text"] , select{
    box-shadow: 0 0 0 0;
    border: 0 none;
    outline: 0;
    width: 45%;
    height: 2.8vh;
    }
    input[type="email"]{

        box-shadow: 0 0 0 0;
        border: 0 none;
        outline: 0;
        width: 45%;
         height: 2.8vh;
    }

    input[type="password"]{

        box-shadow: 0 0 0 0;
        border: 0 none;
        outline: 0;
        width: 45%;
        height: 2.8vh;
        }

    

    body{
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .a{
        display: flex;
        flex-direction: column;
    }

input[type="date"]{
    background-color: #56FFC3;
    padding: 0.8vh;
    font-size: 1.8vh;
    border: none;
    outline: none;
    border-radius: 5px;
}
::-webkit-calendar-picker-indicator{
    background-color: #ffffff;
    padding: 1.2vh;
    cursor: pointer;
    border-radius: 3px;
    margin-left:1.5vh;
}
.div-total{
    display: flex;
    justify-content: center;
    align-items: center;

}
.img{
    width: 60%;
    height: 80%;
}

.div-img{
    width: 50%;
    text-align: center;
}
.div-inps{
    background-color:  #238e68;
    width: 40%;
    height: 115vh;
    padding-left: 10%
}
.bem-vindo{
    font-size: 135%;
    margin: 4% 20% 1% 20%;
}
.divisao-nome{
    margin: 1.5% 0 0 0%;
    font-size: 120%;
}
.div-sexo{
    margin-top:2vh;
    font-size: 130%;
}
.div-data{
    display: flex;
    text-align: center;
    align-items: center;
    margin-bottom: 2%;

}
.data-text{
    margin-right: 2%;
}
.form-check{
    padding: 1vh 1vh 0vh 1vh;
    margin-top: 1vh;
    background-color: #56FFC3;
    width: 40%;
    height: 19%;
    border-radius: 1.6vh;
}

.btn-form{
            padding: 1.2vh;
            text-decoration : none;
            background-color: white;
            color: black;
            border-radius: 10px;
            box-shadow: 0 0 0 0;
             border: 0 none;
             outline: 0;
}
.div-btn-form{
    text-align: end;
    margin: 1vh 2vh 0vh 0vh;
    padding-bottom: 1vh;


}
.sair:hover{
    padding: 1.5vh 4.6vh 1.5vh 4.6vh;
    transition: 0.5s;
}
.sair{
             padding: 1vh 3.3vh 1vh 3.3vh;
            text-decoration : none;
            background-color: white;
            color: black;
            border-radius: 10px;
             box-shadow: 0 0 0 0;
             border: 0 none;
             outline: 0;
             font-size: 2.5vh;
             

}
.cadastrar:hover{
    padding: 1.5vh 4.6vh 1.5vh 4.6vh;
    transition: 0.5s;
}
.cadastrar{
             padding: 1vh 2.3vh 1vh 2.3vh;
            text-decoration : none;
            background-color: #56FFC3;
            color: black;
            border-radius: 10px;
            box-shadow: 0 0 0 0;
             border: 0 none;
             outline: 0;
             font-size: 2.5vh;
             transition: 0.5s;

}
.btns{
    margin-right: 2vh;
    text-align: end;
    margin-top: 4vh;

}
</style>


<body>
    
    <div class="div-total">

        <div class="div-inps">
            <div class="bem-vindo">BEM-VINDO COLABADOR(A)</div>
        <form action="prestarservico.php" METHOD="POST" enctype="multipart/form-data">
            <div class="a">
                <div class="">
                         <div class="divisao-nome">
                            <label for="nome">Nome Completo  </label>
                         </div>
                         <div>
                            <input type="text" name="nome" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="telefone">Telefone</label>
                         </div>
                         <div>
                            <input type="text" name="telefone" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="email">Email</label>
                         </div>
                         <div>
                            <input type="email" name="email" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="sobre">Sobre</label>                         
                         </div>
                         <div>
                            <input style="height: 70px;" type="text" name="sobre" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="estado">Estado</label>                        
                         </div>
                         <div>
                            <input type="text" name="estado" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="cidade">Cidade</label> 
                         </div>
                         <div>
                            <input type="text" name="cidade" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="endereco">Endereço</label>
                         </div>
                         <div>
                            <input type="text" name="endereco" value="">
                         </div>
                </div>
                <div class="">
                         <div class="divisao-nome">
                            <label for="senha">Senha</label>           
                         </div>
                         <div>
                            <input type="password" name="senha" value="">
                         </div>
                </div>
                <div class="div-sexo">Sexo</div>
                <div>
                    <input type="radio" id="masc" name="sexo" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                    <input type="radio" id="fem" name="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                </div>
                <div>
                    <input type="radio" id="outros" name="sexo" value="outros">
                    <label for="outros">Outros</label>
                </div>
                

                <div class="div-data">
                    <div class="data-text">
                       <label for="data_nascimento">Data de Nascimento</label>
                    </div>

                    <div>
                      <input
                         type="date"
                         id="meeting-time"
                         name="data_nascimento"
                         value="data_nascimento"
                         min="1950-01-01"
                         max="2007-01-01" />
                    </div>

                    <!-- check box -->
                </div>
                <div>
                    <div>Área de Atuação</div>

                    <div>

                    
                            <label>
                                <input type="checkbox" name="servico" value="hidraulica"> Hidráulica
                            </label><br>
                            <label>
                                <input type="checkbox" name="servico" value="eletrica"> Elétrica
                            </label><br>
                            <label>
                                <input type="checkbox" name="servico" value="pintura"> Pintura
                            </label><br>
                            <label>
                                <input type="checkbox" name="servico" value="pequenas-reformas"> Pequenas Reformas
                            </label><br> <br>
                            <div class="inputBox">
                                <label for="servico" class="labelInput">Foto de Perfil:</label><br>
                                <input type="hidden" name="arquivo" value="4194304" />
                                <br>
                                <input required name="arquivo" style="background-color: grey; width: 350px;" type="file" />   
                    
                </div>
                            
                        

                    </div>
                </div>

                <!-- botoes -->

                <div class="btns">
                        <input class="sair" type="submit" value="Sair">

                        <input class="cadastrar" type="submit" value="Cadastrar">
                </div>
            </form>
            

        </div>



           
        </div>



        <!-- imagem -->
        <div class="div-img">
            <img class="img" src="img/image 4.png" alt="">
        </div>

    </div>
    



</body>
</html>
