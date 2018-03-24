<?php
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions.php"; 
	$title = '[Windsor Shop] - Register';
	$content = 'Please click <a href="http://localhost/CT250/Index.php?page=activeaccount">here</a> to active your account!';
	$To = 'ntctuyen.ctu@gmail.com';
	$mail = sendMail($title, $content, $To);
?>