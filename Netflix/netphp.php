<?php
$host = "phpmyadmin"; // Endereço do servidor do MySQL
$usuario = "root"; // Nome de usuário do MySQL
$senha = ""; // Senha do MySQL
$bancoDeDados = "netflix"; // Nome do banco de dados

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $bancoDeDados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";
?>