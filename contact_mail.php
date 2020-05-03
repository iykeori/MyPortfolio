<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "oricletus@gmail.com";
$mail->Password = "bingo41714";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("oricletus@gmail.com");	
$mail->Subject = $_POST["subject"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["content"]);


$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error btn btn-danger'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='btn btn-success'> Contact Mail Sent.</p>";
}	
?>