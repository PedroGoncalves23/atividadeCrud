<?php

session_start();

$host = "mysql:host=localhost;dbname=hospital";
$user = "root";
$pass = "";

global $conexao;

try {
    $conexao = new PDO($host, $user, $pass);
    $conexao->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    
} catch (PDOException $error) {
    echo "Erro na conexão com MySql: " . $error->getMessage();
    exit;
}
