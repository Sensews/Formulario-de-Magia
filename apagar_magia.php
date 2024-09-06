<?php
$host = 'sql10.freesqldatabase.com';
$dbname = 'sql10729772';
$username = 'sql10729772';
$password = 'NJLFHbmBiw';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);

        $sql = "DELETE FROM magias WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "Magia apagada com sucesso!";
        } else {
            echo "Erro ao apagar a magia.";
        }
    } else {
        echo "ID da magia não fornecido.";
    }

} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}

header('Location: lista_de_magias.html');
exit();
?>
