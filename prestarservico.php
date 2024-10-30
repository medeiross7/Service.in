<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['submit'])) {
    include_once('conexao.php');

    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        $extensao = strtolower(substr($_FILES['profile_pic']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "img/";
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], $diretorio . $novo_nome);
        $arquivo = $novo_nome;
    } else {
        $arquivo = null; // ou algum valor padrão
    }

    $plano = $_POST['plan'] ?? null;

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
    $area_atuacao = isset($_POST['area_atuacao']) ? implode(", ", $_POST['area_atuacao']) : '';

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
        $stmt->bindParam(':arquivo', $arquivo);
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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #207060;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #1e4d3a;
            padding: 40px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 1200px;
        }

        .form-section,
        .plan-section {
            background-color: #114230;
            padding: 30px;
            border-radius: 15px;
            width: 48%;
            box-shadow: inset 0 4px 10px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .form-section h3,
        .plan-section h3 {
            margin-bottom: 20px;
            color: #c0c0c0;
        }

        .form-section label,
        .plan-section label {
            font-weight: bold;
            font-size: 1.1em;
        }

        .form-section input,
        .form-section select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
        }

        .form-section input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        .form-section .radio-group,
        .form-section .checkbox-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-section .radio-group label,
        .form-section .checkbox-group label {
            margin-left: 10px;
        }

        .plan-section .plan-box {
            background-color: #d9d9d9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: left;
        }

        .plan-section .plan-box h4 {
            color: #333;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .plan-section .plan-box ul {
            list-style: none;
            padding: 0;
            color: #555;
        }

        .plan-section .plan-box ul li {
            margin-bottom: 5px;
        }

        .plan-section .plan-options {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .plan-section input[type="radio"] {
            margin-right: 8px;
        }

        .submit-btn {
            background-color: #238E68;
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #1e7355;
        }
    </style>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <!-- Seção do Formulário -->
            <div class="form-section">
                <h3>Cadastro</h3>
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="nome" required>

                <label for="phone">Telefone</label>
                <input type="text" id="phone" name="telefone" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="about">Sobre</label>
                <input type="text" id="about" name="sobre" required>

                <label for="state">Estado</label>
                <input type="text" id="state" name="estado" required>

                <label for="city">Cidade</label>
                <input type="text" id="city" name="cidade" required>

                <label for="address">Endereço</label>
                <input type="text" id="address" name="endereco" required>

                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" required>

                <div class="radio-group">
                    <label>Sexo:</label>
                    <label><input type="radio" name="sexo" value="Feminino" required> Feminino</label>
                    <label><input type="radio" name="sexo" value="Masculino" required> Masculino</label>
                    <label><input type="radio" name="sexo" value="Outro"> Outro</label>
                </div>

                <label for="birthdate">Data de Nascimento</label>
                <input type="date" id="birthdate" name="data_nascimento" required>

                <div class="checkbox-group">
                    <label>Área de Atuação:</label>
                    <label><input type="checkbox" name="area_atuacao[]" value="Hidraulica"> Hidraulica</label>
                    <label><input type="checkbox" name="area_atuacao[]" value="Eletrica"> Eletrica</label>
                    <label><input type="checkbox" name="area_atuacao[]" value="Pintura"> Pintura</label>
                    <label><input type="checkbox" name="area_atuacao[]" value="Pequenas Reformas"> Pequenas Reformas</label>
                </div>
            </div>
            <div class="plan-section">
                <h3>Escolha sua Foto de Perfil:</h3>
                <input type="file" name="profile_pic" accept="image/*">

                <h3>Planos Disponíveis</h3>

                <!-- Box para cada plano -->
                <div class="plan-box">
                    <h4 style="color: #FF8C00;">Bronze</h4>
                    <ul>
                        <li>Prioridade de Serviços.</li>
                        <li>Alterar Foto de Perfil.</li>
                        <li>Alterar Sobre.</li>
                        <li>Ter Redes Sociais no Perfil.</li>
                        <li><strong>Adicionar Fotos de Serviços.</strong></li>
                    </ul>
                </div>

                <div class="plan-box">
                    <h4 style="color: #C0C0C0;">Prata</h4>
                    <ul>
                        <li>Prioridade de Serviços.</li>
                        <li>Alterar Foto de Perfil.</li>
                        <li><strong>Alterar Sobre.</strong></li>
                        <li><strong>Ter Redes Sociais no Perfil.</strong></li>
                        <li><strong>Adicionar Fotos de Serviços.</strong></li>
                    </ul>
                </div>

                <div class="plan-box">
                    <h4 style="color: #FFD700;">Ouro</h4>
                    <ul>
                        <li><strong>Prioridade de Serviços.</strong></li>
                        <li><strong>Alterar Foto de Perfil.</strong></li>
                        <li><strong>Alterar Sobre.</strong></li>
                        <li><strong>Ter Redes Sociais no Perfil.</strong></li>
                        <li><strong>Adicionar Fotos de Serviços.</strong></li>
                    </ul>
                </div>

                <!-- Opções de escolha dos planos -->
                <div class="plan-options">
                    <label><input type="radio" name="plan" value="Bronze"> Bronze</label>
                    <label><input type="radio" name="plan" value="Prata"> Prata</label>
                    <label><input type="radio" name="plan" value="Ouro"> Ouro</label>
                </div>



                <input class="submit-btn" type="submit" name="submit" value="Enviar">

            </div>

    </form>


</body>

</html>