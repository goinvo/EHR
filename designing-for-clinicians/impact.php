<?php $pageTitle='Impact'; ?>
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

	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/layout.css">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	 <script>
	 function onSubmit(token) {
		 document.getElementById("demo-form").submit();
	 }
	</script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="impact-pg">

<div class="wrapper">
	<?php include './header.php'; ?>

	<section class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>Impact Stories</h2>
					<div class="subheader">Stories about Inspired EHRs: Designing for Clinicians</div>
				</div>
			</div>
		</div>

		<section class="section" id="impact-sect">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>

					<div id="impact-stories">

						<div class="impact">
							<p>"I sent this around to our User Experience team here, and there was a lot of discussion and appreciation for the work you’ve done."</p>
							<p class="quote-author">&mdash; Janet Campbell - <em>Epic Software Developer</em></p>
						</div>
						<hr>
						<div class="impact">
							<p>"We have already referenced your design for the allergies list. Your human factors and design principle sections has convinced a lot of my bosses to go in a new direction with design."</p>
							<p class="quote-author">&mdash; Xue Lee - <em>Marshfield Clinic User Experience Designer</em></p>
						</div>
						<hr>
						<div class="impact">
							<p>"With your permission, I'd like to link to your GitHub repo and homepage.  Your work has been invaluable to my team. We are actually building a product which will make your work invaluable to a lot of developers, so linking to your stuff will be great."</p>
							<p class="quote-author">&mdash; Devin Goodman - <em>Doctrly startup, an API to allow developers to easily create EHR applications</em></p>
						</div>
						<hr>
					</div>
					<div id="contact-area">
						<h3>Share your story</h3>
						<p>We want to hear how <em>Inspired EHRs</em> has helped you or team.</p>
						<form method="post" action="impact.php">
							<label for="name">Your Name</label>
							<input type="text" name="name" id="name" required />

							<label for="email">Your Email</label>
							<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" required />

							<label for="message">Tell Us Your Story</label><br />
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
								$subject = 'Impact story about Inspired EHRs: Designing for Clinicians';
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
