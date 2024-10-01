<?php

$usuario = 'root';
$senha = '';
$database = 'cadastro';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->connect_error) {
  die("Erro na conexão: " . $mysqli->connect_error);
}
?>