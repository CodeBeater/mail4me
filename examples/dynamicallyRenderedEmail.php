<?php 
	require_once("../mail4me.php");
	$m4m = new Mail4me();

	$strings = array("Eyyyy", "lmao");
	$success = $m4m->sendMail(
	"raphael.antonio.oliveira@gmail.com", //To
	"Mail4Me test email", //Subject
	"This body will be ignored", //Plain text body (will be ignored if a file is specified)
	"Alternative body", //Text-only alternative body 
	array("emailTemplate.php", $strings)); //Array containing filename and strings array (chcek emailTemplate.php)

	if ($success) {
		echo("Email sent successfully!");
	}
?>