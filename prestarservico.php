<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');


    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sobre = $_POST['sobre'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $servico = $_POST['servico'];

    try {

        $sql = "INSERT INTO cadastro_colaborador (nome, telefone, email, sobre, estado, cidade, endereco, senha, sexo, data_nascimento, servico) 
                VALUES (:nome, :telefone, :email, :sobre, :estado, :cidade, :endereco, :senha, :sexo, :data_nascimento, :servico)";
        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sobre', $sobre);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':servico', $servico);


        $stmt->execute();


        header('Location: sistema.php');
        exit();
    } catch (PDOException $e) {

        echo "Erro ao inserir os dados: " . $e->getMessage();
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
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #238e68;
        margin: 0;
        display: flex;

    }

    .box {
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
    form{
        width: 44vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    fieldset {
        border: 3px solid white;
        width: 20vw;
        
    }

    legend {
        border: 1px solid #238e68;
        padding: 10px;
        text-align: center;
        background-color: #238e68;
        border-radius: 8px;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-color: #238e68;
        border: none;
        width: 60%;
        padding: 10px;
        color: black;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        background-color: whitesmoke;
        margin-top: 8px;

    }

    .div2 {
        background-color: whitesmoke;
        height: 100vh;
        width: 59vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .div2 img {
        width: 40vw;
        height: 80vh;

    }
</style>

<body>
    <form action="cadastro.php" method="POST">
        <fieldset>
            <legend>
                <b>
                    Cadastro
                </b>
            </legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="sobre" id="sobre" class="inputUser" required>
                <label for="sobre" class="labelInput">Sobre</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <p>Area de Atuação:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Hidraulica</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Eletrica</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Pintura</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Pequenas Reformas</label>

            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
    <div class="div2">
        <img src="img/image 4.png" alt="">
    </div>
</body>

</html>