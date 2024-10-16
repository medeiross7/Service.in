<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); 
    $novo_nome = md5(time()) . $extensao; 
    $diretorio = "img/"; 

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

    $plano = $_POST['plano'];

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
    $area_atuacao = $_POST['area_atuacao'];
    $arquivo = $novo_nome;  // Corrigido: agora $arquivo é igual a $novo_nome

    try {
        $sql = "INSERT INTO cadastro_colaborador (nome, telefone, email, sobre, estado, cidade, endereco, senha, sexo, data_nascimento, area_atuacao, arquivo, plano) 
                VALUES (:nome, :telefone, :email, :sobre, :estado, :cidade, :endereco, :senha, :sexo, :data_nascimento, :area_atuacao, :arquivo, :plano)";
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
        $stmt->bindParam(':area_atuacao', $area_atuacao);
        $stmt->bindParam(':arquivo', $arquivo); // Corrigido: vinculando o arquivo
        $stmt->bindParam(':plano', $plano);

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
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        display: flex;
        justify-content: space-between;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 15px;
        color: white;
        width: 80%;
    }

    .form-left {
        width: 50%;
        height: ;
    }

    .form-right {
        width: 45%;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 15px;
        color: black;
    }

    fieldset {
        border: 3px solid white;
        padding: 10px;
        height: 80vh;
    }

    .inputBox {
        position: relative;
        margin-bottom: 20px;
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
        width: 100%;
        padding: 10px;
        color: black;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        background-color: #238E68;
        margin-top: 10px;
    }

    .planos {
        margin-bottom: 20px;
        font-size: 24px;
    }

    .card {
        margin-bottom: 20px;
        padding: 20px;
        background-color: white;
        text-align: left;
        border-radius: 10px;
    }

    .bronze, .prata, .ouro {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .bronze {
        color: #F8832E;
    }

    .prata {
        color: #90A3BF;
    }

    .ouro {
        color: #FFB800;
    }

    .planos-list {
        list-style: none;
        padding: 0;
    }

    .verde {
        color: #238E68;
        font-weight: bold;
    }

    .foto-perfil {
        margin-bottom: 20px;
    }

    .foto-perfil input {
        display: block;
        margin: 0 auto;
    }

    .inpt {
        display: flex;
        justify-content: space-around;
    }
</style>

<body>
    <form action="prestarservico.php" method="POST" enctype="multipart/form-data" class="container">
        <div class="form-left">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="sobre" id="sobre" class="inputUser" required>
                    <label for="sobre" class="labelInput">Sobre</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <p>Area de Atuação:</p>
                <input type="radio" id="hidraulica" name="area_atuacao" value="hidraulica" required>
                <label for="hidraulica">Hidraulica</label>
                <input type="radio" id="eletrica" name="area_atuacao" value="eletrica" required>
                <label for="eletrica">Eletrica</label>
                <input type="radio" id="pintura" name="area_atuacao" value="pintura" required>
                <label for="pintura">Pintura</label>
                <input type="radio" id="pequenas" name="area_atuacao" value="pequenas" required>
                <label for="pequenas">Pequenas Reformas</label>
            </fieldset>
        </div>

        <div class="form-right">
            <div class="foto-perfil">
                <label for="arquivo">Escolha sua Foto de Perfil:</label><br>
                <input type="file" name="arquivo" accept="image/png, image/jpeg" required>
            </div>

            <div class="planos">
                Planos Disponíveis
            </div>

            <div class="card">
                <div class="bronze">Bronze</div>
                <ul class="planos-list">
                    <li>Prioridade de Serviços.</li>
                    <li>Alterar Foto de Perfil.</li>
                    <li>Alterar Sobre.</li>
                    <li>Ter Redes Sociais no Perfil.</li>
                    <li class="verde">Adicionar Fotos de Serviços.</li>
                </ul>
            </div>

            <div class="card">
                <div class="prata">Prata</div>
                <ul class="planos-list">
                    <li>Prioridade de Serviços.</li>
                    <li>Alterar Foto de Perfil.</li>
                    <li class="verde">Alterar Sobre.</li>
                    <li class="verde">Ter Redes Sociais no Perfil.</li>
                    <li class="verde">Adicionar Fotos de Serviços.</li>
                </ul>
            </div>

            <div class="card">
                <div class="ouro">Ouro</div>
                <ul class="planos-list">
                    <li class="verde">Prioridade de Serviços.</li>
                    <li class="verde">Alterar Foto de Perfil.</li>
                    <li class="verde">Alterar Sobre.</li>
                    <li class="verde">Ter Redes Sociais no Perfil.</li>
                    <li class="verde">Adicionar Fotos de Serviços.</li>
                </ul>
            </div>

            <div class="inpt">
                <label for="bronze">Bronze</label>
                <input type="radio" name="plano" value="bronze" id="bronze" required>
                <label for="prata">Prata</label>
                <input type="radio" name="plano" value="prata" id="prata" required>
                <label for="ouro">Ouro</label>
                <input type="radio" name="plano" value="ouro" id="ouro" required>
            </div>

            <input type="submit" name="submit" id="submit">
        </div>
    </form>
</body>

</html>
