<?php
// Configurações do banco de dados
$host = 'sql10.freesqldatabase.com';
$dbname = 'sql10729772';
$username = 'sql10729772';
$password = 'NJLFHbmBiw';

header('Content-Type: text/html; charset=UTF-8');

try {
    // Conectar ao MySQL usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta todas as magias
    $sql = "SELECT * FROM magias";
    $stmt = $pdo->query($sql);
    $magias = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($magias as $magia) {
        echo '<div class="magia">';
        echo '<h2>' . htmlspecialchars($magia['nome']) . '</h2>';
        echo '<button class="mostrar-detalhes" onclick="mostrarDetalhes(' . $magia['id'] . ')">MOSTRAR DETALHES</button>';
        echo '<div id="detalhes-' . $magia['id'] . '" class="detalhes" style="display:none;">';
        echo '<p><strong>NOME:</strong> ' . htmlspecialchars($magia['nome']) . ' <strong>| CÍRCULO:</strong> ' . htmlspecialchars($magia['circulo']) . ' <strong>| DIVISÃO:</strong> ' . htmlspecialchars($magia['divisao']) . '</p>';
        echo '<p><strong>COMPONENTES:</strong> ' . htmlspecialchars($magia['componentes']) . '</p>';
        echo '<p><strong>EXECUÇÃO:</strong> ' . htmlspecialchars($magia['execucao']) . ' <strong>| ALCANCE:</strong> ' . htmlspecialchars($magia['alcance']) . ' <strong>|DURAÇÃO:</strong> ' . htmlspecialchars($magia['duracao']) . '</p>';
        echo '<p><strong>DESCRIÇÃO:</strong> ' . htmlspecialchars($magia['descricao']) . '</p>';
        echo '</div>';
        echo '<form method="POST" action="apagar_magia.php" style="display:inline;">';
        echo '<input type="hidden" name="id" value="' . $magia['id'] . '">';
        echo '<button type="submit" class="apagar" onclick="return confirm(\'Tem certeza de que deseja apagar esta magia?\')">APAGAR</button>';
        echo '</form>';
        echo '</div>';
    }

} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
