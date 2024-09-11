<?php
$host = 'localhost';
$dbname = 'senac1'; // Corrigido de 'sdname' para 'dbname'
$username = 'root';
$password = '';

//PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Corrigido de setAttibute para setAttribute
    echo 'Conectado com sucesso!';
} catch (PDOException $e) {
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
}
?>
