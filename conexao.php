<?php
$host = 'localhost'; 
$usuario = 'root'; 
$senha = '';
$banco = 'cadastro';
try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
$mysqli = new mysqli($host, $usuario, $senha, $banco);
?>
