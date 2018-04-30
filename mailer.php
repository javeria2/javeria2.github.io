
<?php //get form field values
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"), array(" "," "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);
	$reason = $_POST["reason"];
	
	//set the recipient email address
	$recipient = "sanchay@sanchayjaveria.com";

	//set mail subject 
	$subject = "[PORTFOLIO MSG] New message from $name";

	//build email's content 
	$email_content = "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Reason: $reason\n\n";
	$email_content .= "Message: $message\n";

	//build email header
	$email_headers = "From: $email";
	$email_headers .= " $name". "\r\n";
	$email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	//send the email 
	mail($recipient, $subject, $email_content, $email_headers);
	echo "<meta http-equiv=\"REFRESH\" content=\"1;url=http://www.sanchayjaveria.com/index.php?success=1#form\">"?>