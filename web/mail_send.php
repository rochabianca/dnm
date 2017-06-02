<?php

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}

$email_servidor = "contato@donortemadeiras.com.br";
$para = "contato@donortemadeiras.com.br";
$de = pegaValor("email");
$nome = pegaValor("nome");
$telefone = pegaValor("telefone");
$mensagem = pegaValor("mensagem");
$assunto = "Mensagem do Norte Madeiras";

$novamensagem = 'Nome: ' . $nome . ' <br /> Telefone: ' . $telefone . '<br /> E-Mail: ' . $de . '<br /><br /> Mensagem: ' . $mensagem;

if (validaEmail($de) && $mensagem) {
enviaEmail($de, $assunto,$novamensagem, $para, $email_servidor);
$pagina = "mail_ok.php";
} else {
$pagina = "mail_error.php";
}

header("location:$pagina");
?>
