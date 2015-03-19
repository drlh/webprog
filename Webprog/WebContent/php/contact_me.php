<?php
// Prüfe, ob Felder leer sind
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = $email_address;
$email_subject = "Website Contact Form:  $name";
$email_body = "Sie haben eine neue Nachricht Ihres Kontaktformulars.\n\n\n\nName: $name\n\nEmail: $email_address\n\nFestnetz: $phone\n\nNachricht:\n$message";
$headers = "From: noreply@web334.c20.webspace-verkauf.de\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>