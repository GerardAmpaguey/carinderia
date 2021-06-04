<?php 
define("TITLE" , "Contact Us");
include('includes/header.php'); 

?>
<div id="contact">
	<h1>Message us!</h1>
	<?php
	function has_header_injection($str){
		return preg_match("/[\r\n]/",$str);
	} ?>
	<?php 
		if (isset($_POST['contact_submit'])){
			$name = $_POST['name'];
			$email = trim($_POST['email']);
			$message = $_POST['message'];


			if (has_header_injection($name) || has_header_injection($email)) {
				die();
			}
			if (!$name || !$email || !$message){
				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				exit;

			}
			$to = "webdesignerampagueyg@gmail.com";

			$subject = "$name sent you a message, via resto website";

			$message = "Name: $name\r\n";
			$message = "Email: $email\r\n";
			$message = "Message: \r\n$message";
			$message = wordwrap($message, 72);

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: $name <$email>\r\n";
			$headers .= "X-Priority: 3\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";

			mail($to, $subject, $message, $headers);

		?>

		<h5>Thank you for contacting Us!, well be with you as soon as possible</h5>
		<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>

	<?php } else {?>


	
	<form method="post" action="" id="contact-form">
		<label for="name">Full Name</label>
		<input type="text" name="name" id="name">
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<label for="message">Your message</label>
		<textarea id="message" name="message"></textarea>

		<input type="submit" class="button next" name="contact_submit" value="Send Message">
	</form>
	<?php } ?>
</div>



<?php include('includes/footer.php'); ?>