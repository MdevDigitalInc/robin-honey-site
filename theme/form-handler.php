<?php
require_once('../../../wp-load.php');

//user posted variables
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$errors = [];

if( $name ===""){

	$errors['name']= "The name field is required!";

}

if( $email ===""){

	$errors['email']= "The email field is required!";

}

if( $message ===""){

	$errors['message']= "The message field is required!";

}

//php mailer variables
//$to = get_option('admin_email');
$to = "dorian@mdev.digital";
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
'Reply-To: ' . $email . "\r\n";

$message_body = "From: ".$name."<".$email."> \r\n".
"Company Name: ".$company_name."\r\n".
"Phone Number: ".$phone."\r\n \r\n".
"Subject: ".$subject."\r\n \r\n".
"Message Body: \r\n \r\n".$message;

if (empty($errors)) {
	$sent = wp_mail($to, $subject, stripslashes(strip_tags($message_body)), $headers);

	echo'{"response":"Your message has been successfully sent.","status": 1}';

}else{

	$json=json_encode($errors,JSON_FORCE_OBJECT);

	echo'{"response":"There was an error.",
	"errors":'.$json.',
	"status": 0
	}';
}

?>