<?php
// Conexão com o banco

// Não é necessário passar a porta se for a padrão (3306)
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Erro de conexão: " . $conn->connect_error]));
}

$data = json_decode(file_get_contents('php://input'), true);

$dias = $data['dias'] ?? [];
$profissional = $data['profissional'] ?? '';

if (empty($dias) || !$profissional) {
    http_response_code(400);
    echo "Dados inválidos.";
    exit;
}

$stmt = $conn->prepare("INSERT IGNORE INTO dias_bloqueados (dia, profissional) VALUES (?, ?)");

foreach ($dias as $dia) {
    $stmt->bind_param("ss", $dia, $profissional);
    $stmt->execute();
}

echo "Dias bloqueados com sucesso!";
?>

