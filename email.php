<?php
require 'class/class.phpmailer.php';

$mail = new PHPMailer;

if(isset($_POST['email']) && $_POST['email'] == ''){
	header( 'Location: index.php?email=err');
	exit();
}
$hash = md5($_POST['mail'].date('U'));
$mail->isSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;

$mail->Username = 'murilo.mothsin@gmail.com';
$mail->Password = '1111117642';

//$mail->Charset = 'UTF-8';
$mail->From = 'newsletter@sysup.us';
$mail->FromName = 'SysUP';
$mail->addAddress($_POST['email']);

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Bem-vindo';
$mail->Body    = utf8_decode('<meta charset="utf-8">
<center><div style="width: 400px; height: 300px; border: 1px solid #EEE; border-radius: 5pt;"><h3>Bem-vindo a SysUp</h3><br><br><br>
<p>Você está cadastrado para receber as novidades sobre nosso site!</p><br><br><br><br>
<p style="color: #DDD; font-size: 10px;">Para não receber mais avisos clique no <a href="sysup.us/unregister.php?email='.$hash.'">link</a></p>
</div></center>');
$mail->AltBody = 'Bem-vindo a SysUp!    Você receberá as novidades sobre nosso site!';

if(!$mail->send()) {
   echo 'Message could not be sent.<br>';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}else{
	include("class/oConn.php");
	$insertQuery = "INSERT INTO emails (email, hash, created_at) VALUES ('".$_POST['email']."', '".$hash."', now())";
	mysql_query($insertQuery) or die("Erro ao inserir email no BD");
	header( 'Location: index.php?email=ok');
}