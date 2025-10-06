<?php
// configurando a conexão com db
$host = 'localhost'; // ou o hostname fornecido pela Hostinger, como 'mysql.hostinger.com'
$user = 'u953537988_Victor2';
$password = '13579012Victor)';
$dbname = 'u953537988_barbearia';

// Não é necessário passar a porta se for a padrão (3306)
$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Erro na conexão: ". $conn->connect_error);
} 
?>