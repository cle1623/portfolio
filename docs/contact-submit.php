<?php

$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$comments = $_POST['inputComments'];

$to = "cvo.media@gmail.com";

$email_message = 'Name: ' . $name . '\n';
$email_message .= 'Email: ' . $email . '\n';
$email_message .= 'Message: ' . $comments;

$subject = $name . ' has sent you a message through Mousefolio';

mail($to,$subject,$email_message,
"From: " . $_POST['inputEmail'] . "\n" .
"MIME-Version: 1.0\n" .
"Content-type: text/html; charset=iso-8859-1"); 

header( 'Location: test.php#contact' ) ;

?>