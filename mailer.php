
<?php 
	
	//get form field values
	// $name = strip_tags(trim($_POST["name"]));
	// $name = str_replace(array("\r","\n"), array(" "," "), $name);
	// $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	// $message = trim($_POST["message"]);
	// $reason = $_POST["reason"];

	//handle errors 
	// if(empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	header("Location: http://sanchayjaveria.herokuapp.com/index.php?success=-1#form");
	// 	exit;
	// }

	//set the recipient email address
	// $recipient = "javeria2@illinois.edu";

	//set mail subject 
	// $subject = "[PORTFOLIO MSG] New message from $name";

	//build email's content 
	// $email_content = "Name: $name\n";
	// $email_content .= "Email: $email\n\n";
	// $email_content .= "Message: $message\n";

	//build email header
	// $email_headers = "From: $name <$email>";

	//send the email 
	// mail($recipient, $subject, $email_content, $email_headers);

	//redirect with success code 
	// header("Location: http://sanchayjaveria.herokuapp.com/index.php?success=1#form");


	require_once'vendor/autoload.php';

	$mail = new PHPMailer;
	$mail->SMTPAuth = true;

	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'dev.sanchay.javeria@gmail.com';
	$mail->Password = 'Kratos09';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"), array(" "," "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);
	$reason = $_POST["reason"];

	$subject = "[PORTFOLIO MSG] from $name. ($reason).";

	$email_content = "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Message: $message\n";


	$mail->From = $email;
	$mail->FromName = $name;
	$mail->addReplyTo($email, $name);
	$mail->addAddress('dev.sanchay.javeria@gmail.com','Sanchay Javeria');
	$mail->Subject = $subject;
	$mail->Body = $email_content;
	$mail->AltBody = $email_content;

	var_dump($mail->send());
?>
