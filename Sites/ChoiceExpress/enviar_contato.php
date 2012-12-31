<?php 
// Recebendo os dados passados pela página "form_contato.php"
$recebenome = $_POST["nome"];
$recebemail = $_POST["email"];
$recebemsg  = $_POST["mensagem"];

// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE
$para = "av2ltda@av2service.com.br";

// Definindo os cabeçalhos do e-mail
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: " . $para ."\r\n"; //E-mail do remetente
$headers .= "Return-Path: " . $para ."\r\n"; //E-mail do remetente


// Definindo o aspecto da mensagem
$mensagem   = "<h3>De:</h3> ";
$mensagem  .= "<p>" . $recebenome . $recebemail ."</p>";
$mensagem  .= "<h3>Assunto:</h3>";
$mensagem  .= "<p>" ."Contato" ."</p>";
$mensagem  .= "<h3>Mensagem</h3>";
$mensagem  .= "<p>";
$mensagem  .= $recebemsg;
$mensagem  .= "</p>";

// Enviando a mensagem para o destinatário
$envia =  mail($para,"Contato",$mensagem,$headers, "-r". $para);
  
// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.
$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong></p>";
$mensagem2 .= "<p>Agradeçemos sua visita e a oportunidade de recebermos sua mensagem, logo entraremos em contato.</p>";
$mensagem2 .= "<p></p>";
$mensagem2 .= "<p></p>";
$mensagem2 .= "<p>Atenciosamente,</p>";
$mensagem2 .= "<p></p>";
$mensagem2 .= "<p><strong>AV2 Prestação de Serviços Ltda</strong></p>";
$mensagem2 .= "<p><strong>Telefone:(21)2223-1401</strong></p>";
$mensagem2 .= "<p></p>";
$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";

$envia =  mail($recebemail, "Sua mensagem foi recebida!", $mensagem2, $headers, "-r". $para);

// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.
echo "Mensagem Recebida com Sucesso!";
echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
?>