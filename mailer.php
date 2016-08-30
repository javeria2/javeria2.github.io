
<?php 
	
	//get form field values
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"), array(" "," "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);
	$reason = $_POST["reason"];

	//handle errors 
	// if(empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	header("Location: http://sanchayjaveria.herokuapp.com/index.php?success=-1#form");
	// 	exit;
	// }

	//set the recipient email address
	// $recipient = "javeria2@illinois.edu";

	//set mail subject 
	$subject = "[PORTFOLIO MSG] New message from $name";

	//build email's content 
	$email_content = "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Message: $message\n";

	//build email header
	// $email_headers = "From: $name <$email>";

	//send the email 
	// mail($recipient, $subject, $email_content, $email_headers);

	//redirect with success code 
	// header("Location: http://sanchayjaveria.herokuapp.com/index.php?success=1#form");

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sanchay.javeria@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Sanchay09!";
//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress('sanchay.javeria@gmail.com', 'Sanchay Javeria');
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = $email_content;

$mail->Body = $email_content;

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>
