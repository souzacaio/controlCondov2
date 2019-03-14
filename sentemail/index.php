<?php
	// Chame o arquivo com as Classes do PHPMailer
	require_once('phpmailer.php');
	
	// Inst�ncia a classe PHPMailer
	$mail = new PHPMailer();
	
	// Configura��o dos dados do servidor e tipo de conex�o (Estes dados voc� obtem com seu host)
	$mail->IsSMTP(); // Define que a mensagem ser� SMTP
  $mail->Host = "localhost"; // Endere�o do servidor SMTP
  $mail->Port = 25;
	$mail->SMTPAuth = true; // Autentica��o (True: Se o email ser� autenticado | False: se o Email n�o ser� autenticado)
	$mail->Username = 'controlcondo@controlcondo.com.br'; // Usu�rio do servidor SMTP
  $mail->Password = 'ControlCondo'; // A Senha do email indicado acima
  $mail->CharSet = 'UTF-8';
	
	// Remetente (Identifica��o que ser� mostrada para quem receber o email)
	$mail->From = "controlcondo@controlcondo.com.br";
	$mail->FromName = "teste";
	
	// Destinat�rio
	$mail->AddAddress('kio.rg3@hotmail.com', 'teste');

	// Opcional (Se quiser enviar c�pia do email)
	$mail->AddBCC('kio.rg3@hotmail.com', 'Copia Oculta');

	// Define tipo de Mensagem que vai ser enviado
	$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML

	// Assunto e Mensagem do email
  $mail->Subject = 'Nova interação via Website.'; // Assunto da mensagem
  $mail->Body    = '<div style="font-family: Arial, Helvetica, sans-serif;"><p align="center" style="margin-right: 13%;"><img src="http://w3educa.com/angulaw3/html/images/W3white_resized.png"></p><p style="font-size:18px; line-height:1.4"><strong>Olá, uma nova menssagem foi gerada via website. Veja as informações a baixo.</strong></p><table style="font-size: 18px;
    line-height: 1.4;"><tr><td> Nome:teste</td></tr><tr><td>Empresa: teste</td></tr><tr><td>E-mail:teste</td></tr><tr><td>Telefone:teste</td></tr></table><p style="font-size: 18px;line-height: 1.4;">teste</p><p><a href="http://w3educa.com.br">Voltar ao site.</a></p></div>';              
  
	// Envia a Mensagem
	$enviado = $mail->Send();
	
	// Verifica se o email foi enviado
	if($enviado)
	{
		echo "E-mail enviado com sucesso!";
	}
	else
	{
		echo "N�o foi poss�vel enviar o e-mail, devido ao erro de: ".$mail->ErrorInfo;
	}
?>