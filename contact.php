<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Ink Supplier Company</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Ink Supplier Company</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<h2>Contact Us</h2>
		<p>Have a question or comment? Fill out the form below and we'll get back to you as soon as possible.</p>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required>
			
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
			
			<label for="message">Message:</label>
			<textarea name="message" id="message" required></textarea>
			
			<input type="submit" name="submit" value="Send">
		</form>
		
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
	</main>
	
	<footer>
		<p>&copy; 2023 Ink Supplier Company</p>
	</footer>
</body>
</html>
