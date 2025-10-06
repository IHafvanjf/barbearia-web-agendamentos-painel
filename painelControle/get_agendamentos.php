<?php
header('Content-Type: application/json');

$host = 'localhost'; // ou o hostname fornecido pela Hostinger, como 'mysql.hostinger.com'
$user = 'u953537988_Victor';
$password = '13579012Victor)';
$dbname = 'u953537988_barberShop';

// Não é necessário passar a porta se for a padrão (3306)
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Erro de conexão: " . $conn->connect_error]));
}

$profissional = isset($_GET['profissional']) ? $conn->real_escape_string($_GET['profissional']) : '';
$data = isset($_GET['data']) ? $conn->real_escape_string($_GET['data']) : '';

// Verifica se a data foi realmente enviada para evitar erro na query
if (empty($data)) {
    die(json_encode(["error" => "Erro: Data não foi fornecida."]));
}

$sql = "SELECT id, time_slot, name, phone, services, duration FROM bookings WHERE professional = '$profissional' AND date = '$data' ORDER BY time_slot ASC";

$result = $conn->query($sql);

$agendamentos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Corrige a formatação dos serviços, removendo colchetes e aspas desnecessárias
        if (!empty($row['services'])) {
            $services = json_decode($row['services'], true);
            if (is_array($services)) {
                $row['services'] = implode(', ', array_map(function($s) {
                    return trim($s, ' "[]'); // Remove aspas e colchetes corretamente
                }, $services));
            }
        } else {
            $row['services'] = "Nenhum serviço cadastrado";
        }
        $agendamentos[] = $row;
    }
}

$conn->close();
echo json_encode($agendamentos);
