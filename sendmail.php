<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
$to      = 'zagorakom@gmail.com' . ', ';
$to     .= 'ask@devmuerto.com';
$subject = 'Offer from DevMuerto';
$message = "---- New Offer from DevMuerto: ---- \n\nName: $_POST[q1] \nDetails: $_POST[q2] \nE-mail: $_POST[q3] \nComment: $_POST[q4]";
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: offer@devmuerto.com' . "\r\n" .
			'Reply-To: noreply@devmuerto.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

// Send
mail($to, $subject, $message, $headers);