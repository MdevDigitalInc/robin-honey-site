<?php
require_once('../../../wp-load.php');

//user posted variables
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
//$human = $_POST['message_human'];

// $name = "";
// $company_name = "";
// $email = "";
// $phone = "";
// $message = "";

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



$message_body = "From: ".$name."<".$email."> \r\n".
"Company Name: ".$company_name."\r\n".
"Phone Number: ".$phone."\r\n \r\n".
"Message Body: \r\n".$message;


//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
'Reply-To: ' . $email . "\r\n";

if (empty($errors)) {
	$sent = wp_mail($to, $subject, strip_tags($message_body), $headers);

	echo'{"response":"Your message has been successfully sent.","status": 1}';

}else{

	$json=json_encode($errors,JSON_FORCE_OBJECT);

	echo'{"response":"There was an error.",
	"errors":'.$json.',
	"status": 0
	}';
}

	// echo'{"response":"there was an error.",
	// "errors": {
	// 	"name": "'.$name.'name is invalid '.$json.'",
	// 	"email": "email is invalid"
	// },
	// "status": 0
	// }';

?>