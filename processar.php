<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Formata os dados para salvar no arquivo
    $dados = "Nome: $nome\n";
    $dados .= "Email: $email\n";
    $dados .= "Mensagem: $mensagem\n\n";

    // Define o nome do arquivo e o modo de abertura (append)
    $arquivo = 'dados_formulario.txt';
    $modo = 'a';

    // Tenta abrir o arquivo e escrever os dados
    if ($handle = fopen($arquivo, $modo)) {
    fwrite($handle, $dados);
    fclose($handle);
    echo "Dados enviados com sucesso!";
    } else {
    echo "Erro ao enviar os dados.";
    }
} else {
    echo "Acesso inválido.";
}
?>