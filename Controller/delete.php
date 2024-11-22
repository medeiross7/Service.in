<?php
session_start();

// Verifica se a sessão está estabelecida corretamente
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: ../View/login.php');
    exit();
}

include_once('conexao.php');

// Verifica se o ID foi passado pela URL
if (!empty($_GET['id'])) {
    $id = intval($_GET['id']); // Usa intval para garantir que $id é um número inteiro

    // Prepara e executa a consulta para deletar o usuário
    $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = $id");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
?>