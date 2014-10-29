<?php
define("TITLE", "Contact Us | Luke's Diner ");
include('includes/header.php');
//
?>
<div id="contact">
<hr>
<h1>Get in touch with us!</h1>
<?php
//Check for header injections
function headercheck($str)
{
	return preg_match("/[\r\n]/", $str);
}
if(isset($_POST['contact_submit']))
{
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = $_POST['message'];
	// check to see if $name or $email have header injections
	if(headercheck($name) || headercheck($email))
	{
		die();
	}
	if(!$name || !$email || !$message)
	{
		echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go Back and try again.';
		exit;
	}
	
	//add recipient email to a variable
	$to = "youremail@gmail.com";
	$subject = "$name sent you a message via contact form";
	$message = "Name: $name\r\n";
	$message.= "Email: $email\r\n";
	$message.= "Message: \r\n$message";
	
	//check checkbox
	if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe')
	{
		//add new line to message var
		$message.= "\r\n\r\nPlease add $email to the amiling list.\r\n";
	}
	$message = wordwrap($message, 72);
	//mail headers
	$headers = "MIME-VERSION: 1.0\r\n";
	$headers.= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers.= "From: $name <$email> \r\n";
	$header.= "X-Priority: 1\r\n";
	$headers.= "X-MSMail-Priority: High\r\n";
	//send
	
	mail($to, $subject, $message, $headers);

?>
	<!--Show success message after sending-->
	<h5>Thanks for contacting Luke's Diner!</h5>
	<p><a href="index.php" class="button block">&laquo: Go to the Home page</a></p>
<?php } else { ?>
<form method="post" action="" id="contact-form">
	<label form="name">Your name</label>
	<input type="text" id="name" name="name">
	
	<label form="email">Your email</label>
	<input type="email" id="email" name="email">
	
	<label form="message">Your message</label>
	<textarea id="message" name="message"></textarea>
	
	<input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
	<label for="subscribe">Subscribe to newsletter</label>

	<input type="submit" class="button next" name="contact_submit" value="Send Message">
</form>
<?php } ?>
<hr>
</div>

<?php include('includes/footer.php'); ?>