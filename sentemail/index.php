<?php
	// Chame o arquivo com as Classes do PHPMailer
	require_once('phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();	
    $mail->CharSet   = 'UTF-8';
	$mail->SMTPDebug = 0;		        
	$mail->SMTPAuth  = true;		     
	$mail->SMTPSecure = 'ssl';	      
	$mail->Host      = 'smtp.controlcondo.com.br'; 
	$mail->Port      = 25;  		     
	$mail->Subject   = 'teste';
	$mail->Body      = 'fsdafds';
    $mail->SetFrom('controlcondo@controlcondo.com.br', 'ControlCondo');
	$mail->IsHTML(true);
	$mail->AddAddress('caio.souza@live.com');
    //$mail->addCustomHeader('MIME-Version: 1.0');
 
	if($mail->Send()) {
        echo 'teste 1';
		return false;
	} else {
        echo $ret. ' '.$mail->ErrorInfo;
		return true;
	}

?>