<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode enviar o e-mail ou armazenar as informações no banco de dados
    // Exemplo de envio de e-mail (certifique-se de configurar um servidor de e-mail adequado)
    $to = "contato@pizzariaderik.com"; // Troque pelo seu e-mail
    $subject = "Mensagem de Contato - Pizzaria do Derik";
    $body = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>
