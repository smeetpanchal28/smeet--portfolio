<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'smeet.panchal@somaiya.edu';
	
	$email_subject = "New Form";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"User Message: $message.\n";

	