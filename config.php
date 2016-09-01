<?php 
	//PHPMailer settings
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->CharSet = 'UTF-8';

	//Server info
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;

	//Sender details
	$mail->Username = "example@gmail.com";
	$mail->Password = "examplePassword";
	$mail->setFrom('creative@gmail.com', 'John Doe');
?>