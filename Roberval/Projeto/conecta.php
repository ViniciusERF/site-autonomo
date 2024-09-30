<?php
// db_config.php

$host = 'localhost';
$dbname = 'encontre_bd'; // Substitua pelo nome do seu banco de dados
$user = 'root'; // Substitua pelo seu usuário do banco de dados
$pass = ''; // Substitua pela sua senha do banco de dados

// Conexão com o banco de dados usando mysqli
$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
