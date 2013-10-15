<?php
require 'class/class.phpmailer.php';

$mail = new PHPMailer;

if(isset($_POST['email']) && $_POST['email'] == ''){
	header( 'Location: index.php?email=err');
	exit();
}
$hash = md5($_POST['mail'].date('U'));

//Cabecalho
$header= "From:Sysup <contato@sysup.us>\r\n";
$header.= "Reply-To: murilo.mothsin@gmail.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.="Content-Type: text/html; charset=utf-8\r\n";

//Destinatario
$to = $_POST['email'];

//Assunto
$subject= html_entity_decode('Bem-vindo a Sysyup');

//Mensagem
$body = utf8_decode('<meta charset="utf-8">
<center><div style="width: 400px; height: 300px; border: 1px solid #EEE; border-radius: 5pt;"><h3>Bem-vindo a SysUp</h3><br><br><br>
<p>Você está cadastrado para receber as novidades sobre nosso site!</p><br><br><br><br>
<p style="color: #DDD; font-size: 10px;">Para não receber mais avisos clique no <a href="sysup.us/unregister.php?email='.$hash.'">link</a></p>
</div></center>');

$email = mail($to, $subject, $body, $header);

// $mail->AltBody = 'Bem-vindo a SysUp!    Você receberá as novidades sobre nosso site!';

if(!$email) {
   echo 'Message could not be sent.<br>';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}else{
	include("class/oConn.php");
	$insertQuery = "INSERT INTO emails (email, hash, created_at) VALUES ('".$_POST['email']."', '".$hash."', now())";
	mysql_query($insertQuery) or die("Erro ao inserir email no BD");
	header( 'Location: index.php?email=ok');
}