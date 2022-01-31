<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('en', 'phpmailer/language/');
	$mail->IsHTML(true);

	//Sender
	$mail->setFrom('test@test.com', 'test@test.com');
	//Receiver
	$mail->addAddress('grb747@inbox.ru');
	//Topic
	$mail->Subject = 'FRONTEND new job opportunities';
	//Body
	$body = '<h1>New message!</h1>';

	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Message:</strong> '.$_POST['message'].'</p>';
	}

	$mail->Body = $body;

	//Send
	if (!$mail->send()) {
		$message = 'Error!';
	} else {
		$message = 'Your message has been sent!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>