<?php

// Não é necessário passar a porta se for a padrão (3306)
$conn = new mysqli($host, $user, $password, $dbname);

$result = $conn->query("SELECT dia FROM dias_bloqueados ORDER BY dia ASC");

$dias = [];

while ($row = $result->fetch_assoc()) {
    $dias[] = $row['dia'];
}

echo json_encode($dias);
$conn->close();
?>

