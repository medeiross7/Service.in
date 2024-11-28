<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: ../login.php');
    exit();
}

include_once('../conexao.php');

// Verifica se o ID foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = intval($_POST['id']); // Converte para inteiro para segurança

    try {
        // Verifica se o ID existe no banco de dados
        $checkStmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $checkStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $checkStmt->execute();

        if ($checkStmt->rowCount() > 0) {
            // O ID existe, então delete o registro
            $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                session_destroy();
                header("Location: ../index.php");
                exit();
            } else {
                echo "Erro ao deletar o usuário.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Requisição inválida.";
}
?>
