<?php 
	// code for sending contact form data via email 
	if(isset($_POST['submit'])) {
		$to = "youremail@example.com"; // replace with your email
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subject = "New Message from Ink Supplier Company Contact Form";
		$headers = "From: $name <$email>";
		
		if(mail($to, $subject, $message, $headers)) {
			echo "<p>Thank you for your message!</p>";
		} else {
			echo "<p>There was an error sending your message. Please try again later.</p>";
		}
	}
?>
