<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	
  	include 'conexao.php';
	require './vendor/autoload.php';
  
  $recebe_email = $_POST['email'];

  $consulta = $conexao->query("SELECT nome, senha, email FROM usuarios WHERE email='$recebe_email';");  

  if($consulta->rowCount() == 0){
    header('location: erro2.php');
  }else{
    
		$exibe=$consulta->fetch(PDO::FETCH_ASSOC);
		
		$recebe_nome=$exibe['nome'];
		$recebe_senha=$exibe['senha'];
		
  
		$mail = new PHPMailer();
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->CharSet = 'UTF-8';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->SMTPAuth = true;
		$mail->Username = 'detonabit@gmail.com';
		$mail->Password = 'detonador64';
		$mail->setFrom('detonabit@gmail.com', 'minhaloja');
		$mail->addReplyTo('detonabit@gmail.com', 'minha loja');
		$mail->addAddress($recebe_email, $recebe_nome);
		$mail->Subject = 'Senha de recuperação';
		$mail->msgHTML('sua senha é '.$recebe_senha);

		if (!$mail->send()) {
   			 echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else {
    		header('location: ok2.php');
		}   
  }