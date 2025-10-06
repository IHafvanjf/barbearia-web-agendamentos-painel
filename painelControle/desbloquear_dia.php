<?php

$host = 'localhost'; // ou o hostname fornecido pela Hostinger, como 'mysql.hostinger.com'
$user = 'u953537988_Victor';
$password = '13579012Victor)';
$dbname = 'u953537988_barberShop';

// Não é necessário passar a porta se for a padrão (3306)
$conn = new mysqli($host, $user, $password, $dbname);

$data = json_decode(file_get_contents("php://input"), true);
$dia = $data['dia'] ?? null;

if (!$dia) {
    echo "Data não recebida.";
    exit;
}

$stmt = $conn->prepare("DELETE FROM dias_bloqueados WHERE dia = ?");
$stmt->bind_param("s", $dia);
$stmt->execute();
$stmt->close();
$conn->close();

echo "Dia desbloqueado com sucesso!";
?>
