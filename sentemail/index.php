<?php
	// Chame o arquivo com as Classes do PHPMailer
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "localhost"; // Your SMTP PArameter
    $mail->Port = 587; // Your Outgoing Port
    $mail->SMTPAuth = true; // This Must Be True
    $mail->Username = "controlcondo@controlcondo.com.br"; // Your Email Address
    $mail->Password = "ControlCondo"; // Your Password
    $mail->SMTPSecure = 'ssl'; // Check Your Server's Connections for TLS or SSL
 

	$mail->From = "controlcondo@controlcondo.com.br";
    $mail->FromName = 'fff';
    $mail->AddAddress("kio.rg3@hotmail.com");

    $mail->IsHTML(true);

	$mail->Subject = 4;
	$mail->Body  = 4;
	

	if($mail->Send()) {
        echo 'teste 1';
		return false;
		$mail->Send();
	} else {
        echo $mail->ErrorInfo;
		return true;
	}

?>