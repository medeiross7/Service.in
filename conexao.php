<?php

$host = 'localhost'; // Endereço do servidor de banco de dados
$dbname = 'cadastro'; // Nome do banco de dados
$user = 'root'; // Nome de usuário do banco de dados
$pass = ''; // Senha do banco de dados
$mysqli = new mysqli($host, $user, $pass, $dbname);
if($mysqli->error){
    die("falha ao conhectar o banco de dados". $mysqli->error);
}
else{
    echo "Conexao efetuada com sucesso";
}

try {
    // Cria uma instância de PDO para a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Se houver um erro na conexão, exibe a mensagem de erro
    echo 'Conexão falhou: ' . $e->getMessage();
    exit();
}
?>