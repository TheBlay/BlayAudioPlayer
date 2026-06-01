<?php
// buscar_musicas.php
header('Content-Type: application/json');

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'musicplayer';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["error" => "Falha na conexão"]));
}

$sql = "SELECT id, titulo, artista, caminho_arquivo, caminho_capa FROM musicas";
$result = $conn->query($sql);

$musicas = [];
while ($row = $result->fetch_assoc()) {
    $musicas[] = $row;
}

echo json_encode($musicas);
$conn->close();
?>