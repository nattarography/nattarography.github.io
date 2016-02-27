<?php

if(isset($_GET['submit'])) {
	$to = "nattaro13@gmail.com";
	$subject = "Nattarography: Enquiries";
	$name_field = $_GET['name'];
	$email_field = $_GET['email'];
	$message = $_GET['message'];
	 
	$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
	 
	echo "Data has been submitted to $to!";
	mail($to, $subject, $body);
} else {
	echo "blarg!";
}
?>