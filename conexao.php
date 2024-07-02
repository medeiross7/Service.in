<?php

$usuario = 'root';
$senha = '';
$database = 'cadastro';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error){
    die("falha ao conhectar o banco de dados". $mysqli->error);
}
else{
    echo "Conexao efetuada com sucesso";
}
?>