<?php
// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor
$user = 'root';      // Usuário do banco de dados
$pass = '';          // Senha do banco de dados
$dbname = 'MEUBDNEW'; // Nome do banco de dados

try {
   
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
    echo "Banco de dados criado com sucesso!<br>";

    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
    $sql = "CREATE TABLE IF NOT EXISTS MINHATABELA (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME VARCHAR(30) NOT NULL,
        LASTNAME VARCHAR(30) NOT NULL,
        CPF VARCHAR(14) NOT NULL,
        ENDERECO VARCHAR(50),
        CIDADE VARCHAR(50)
    )";
    $pdo->exec($sql);
    echo "Tabela MINHATABELA criada com sucesso!<br>";

    $sql = "INSERT INTO MINHATABELA (NOME, LASTNAME, CPF, ENDERECO, CIDADE) VALUES 
            ('João', 'Silva', '123.456.789-00', 'Rua A, 123', 'São Paulo'),
            ('Maria', 'Oliveira', '987.654.321-00', 'Rua B, 456', 'Rio de Janeiro'),
            ('Pedro', 'Santos', '159.753.486-00', 'Rua C, 789', 'Belo Horizonte')";

    $pdo->exec($sql);
    echo "Dados inseridos com sucesso!<br>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

$pdo = null;
?>
