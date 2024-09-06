<?php
// Configurações do banco de dados
$host = 'sql10.freesqldatabase.com';
$dbname = 'sql10729772';
$username = 'sql10729772';
$password = 'NJLFHbmBiw';

header('Content-Type: application/json'); // Define o tipo de conteúdo como JSON

$response = array(); // Array para armazenar a resposta

try {
    // Conectar ao MySQL usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Definir o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insere os dados do formulário no banco de dados
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $circulo = $_POST['circulo'];
        $divisao = $_POST['divisao'];
        $componentes = $_POST['componentes'];
        $execucao = $_POST['execucao'];
        $alcance = $_POST['alcance'];
        $duracao = $_POST['duracao'];
        $descricao = $_POST['descricao'];

        // Prepara e executa a inserção no banco
        $sql = "INSERT INTO magias (nome, circulo, divisao, componentes, execucao, alcance, duracao, descricao) 
                VALUES (:nome, :circulo, :divisao, :componentes, :execucao, :alcance, :duracao, :descricao)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':circulo', $circulo);
        $stmt->bindParam(':divisao', $divisao);
        $stmt->bindParam(':componentes', $componentes);
        $stmt->bindParam(':execucao', $execucao);
        $stmt->bindParam(':alcance', $alcance);
        $stmt->bindParam(':duracao', $duracao);
        $stmt->bindParam(':descricao', $descricao);

        if ($stmt->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'Magia salva com sucesso!';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Erro ao salvar a magia.';
        }
    }
} catch (PDOException $e) {
    $response['status'] = 'error';
    $response['message'] = 'Erro ao conectar: ' . $e->getMessage();
}

echo json_encode($response); // Retorna a resposta em formato JSON
?>
