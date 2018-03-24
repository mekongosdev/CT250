<?php
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions.php"; 
	$title = '[Windsor Shop] - Đăng ký tài khoản';
	$content = 'Vui lòng click vào link sau để kích hoạt tài khoản!';
	$To = 'ntctuyen.ctu@gmail.com';
	$mail = sendMail($title, $content, $To);
?>