<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$corpo  = "Nome: ".$nome."\n";
$corpo .= "Email: ".$email."\n";
$corpo .= "Mensagem: ".$mensagem."\n";
if(mail("MEU E-MAIL@GMAIL.com.br","Contato via SITE",$corpo,"From: E-MAIL QUE RECEBE@SITE.com.br")){
  echo "<meta http-equiv='refresh' content='0;URL=contatos.html'>";
} else {
  echo("Erro ao enviar e-mail");
}
?>