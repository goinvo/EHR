<?php $pageTitle='Feedback'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Inspired EHRs | <?php echo $pageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	 <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="feedback-pg">

<div class="wrapper">
	<?php include './header.php'; ?>

	<section class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>Feedback</h2>
					<div class="subheader">for Inspired EHRs: Designing for Clinicians</div>
				</div>
			</div>
		</div>

		<section class="section" id="acknowledgements-sect">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>We'd love to hear what you have to say! Send us an email with your feedback!</p>
					<div id="contact-area">
						<form method="post" action="feedback.php">
							<label for="name">Your name</label>
							<input type="text" name="name" id="name" required />

							<label for="email">Your email</label>
							<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" required />

							<label for="message">Let us know what you think</label><br />
							<textarea name="message" rows="20" cols="20" id="message" required></textarea>

							<input type="text" name="blank" style="display: none;">

							<input type="submit" name="submit" value="Submit" class="button g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'  data-action='submit' />

						</form>

						</div>
						<?php
							//form data
							$name = Trim(stripslashes($_POST['name']));
							$email = Trim(stripslashes($_POST['email']));
							$message = Trim(stripslashes($_POST['message']));
							$blank = Trim(stripslashes($_POST['blank']));
							$to = 'inspiredehrs@goinvo.com';
							//$from = $email;
							$from = 'inspiredehrs@goinvo.com';
							$subject = 'Feedback for Inspired EHRs: Designing for Clinicians';
							$formok = true;


							$body = "From: " . $name . "\n";
							$body .= "Email: " . $email . "\n \n";
							$body .= "Message: \n" . $message . "\n";
							if(!empty($blank)){
								$body .= "This message made it past our meager spam filter: ";
								$body .= $blank;

							}

							$headers = "From:" . $from . "\r\n";
							$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";



							if($_POST['submit']){
								if(empty($name)){
									$formok = false;
									echo "<p>You have not entered a name.</p>";
								}

								//validate email address is not empty
								if(empty($email)){
									$formok = false;
									echo "<p>You have not entered a valid email address.</p>";
								//validate email address is valid
								}

								//validate message is not empty
								if(empty($message)){
									$formok = false;
									echo "<p>You have not entered a message.</p>";
								}

								if(!empty($blank)){
									$formok = false;
									echo "<p>Sorry, your message looks like spam, so it was not sent.</p>";
								}

								if ($formok == true && mail($to, $subject, $body, $headers)) {
									echo "<p>Thanks for your email. We'll get back to you ASAP</p>";
								} else {
									echo "<p>There was an issue, try sending again.</p>";
								}

							}
						?>
					</div>

				</div>
			</div>
		</section>

		<?php include './footer.php'; ?>

					</div>
				</div>
			</div>
		</section>

	</section>
</div><!--end wrapper-->
</body>
</html>
