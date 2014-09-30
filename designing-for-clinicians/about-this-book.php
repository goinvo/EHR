<?php $pageTitle='About this Book'; ?>
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
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="about-this-book">
	<!--php include './nav.php';-->
	<nav class="main">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="about-this-book">
						<a href="./foreword.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
						<a href="./about-this-book.php"><span class="ch-name">About this Book</span></a> 
						<a href="./medication-list.php"><span class="next"></span><span class="next-text">Next</span></a></li>
				</ul>
			</div>
		</div>
	</nav> 
	
<div class="wrapper">
	<?php include './header.php'; ?>
				
	<section id="about-ch" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>1</h2>
					<h2>About This Book</h2>
				</div>
			</div>
		</header>
		<section class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Goal</h3>
					<p>Our goal in writing this book is to <strong>inspire</strong> useful and usable Electronic Health Record (EHR) interface design by providing clinical scenarios and insights with examples of interactive designs, guided by basic design principles.</p>

					<h3>Illustrative, Not Prescriptive</h3>
					<p>While meaningful use criteria influenced the choice of the book topics, we and our supporters (California HealthCare Foundation and SHARP-C Project) want this book to be clinically relevant, illustrative, and inspirational &mdash;but <strong>not prescriptive</strong>. We hope our design examples will inspire our readers to improve their own EHR designs.</p>

					<h3>Audience</h3>
					<p>This book is written for <strong>anyone who develops and implements health IT applications</strong>, but particularly for electronic health record (EHR) vendor teams who want to learn more about human factors and design. Designers who want to learn about the needs of EHR users, medical informatics students, and EHR users who want to learn more about design principles might also benefit from reading this book.</p>

					<h3>Focus</h3>
					<ol>
						<li><strong>Clinical focus</strong>: This book focuses on <strong>ambulatory adult care</strong>. Our examples especially emphasize the needs of <strong>primary care</strong> practitioners.</li>
						<li><strong>EHR functionality focus</strong>: Our design examples seek to address five specific areas: medication list, medication reconciliation, allergy list, e-prescribing and drug alerts.</li> 
					</ol>
					<p>We hope that future books will address other clinical needs and the many other elements that EHR designs require to be useful and usable, so they can be carefully implemented and seamlessly integrated into healthcare organizations.</p>
					
					<h3>Book Overview</h3>
					<p>The next five chapters each focus on a specific EHR functionality (medication list, medication reconciliation, allergy list, e-prescribing and drug alerts).  Basic clinical needs and usability issues are discussed, with simple descriptions of how humans typically see, read, pay attention, think, remember, and decide when using EHR user interfaces. </p>
					<p>Each chapter starts with one or more <strong>clinical scenarios</strong>. This brings a human perspective and will help readers empathize with EHR users and their struggles. Each chapter includes many <strong>design examples</strong>. We present simple examples with annotated figures (either single images or galleries showing a series of images). The more elaborate design examples use interactive prototypes that give readers a hands-on experience and video demonstrations. Finally, each chapter ends with a summary of the important points covered therein.</p>
					<p>Those five chapters use plain language and are accessible for all readers. In addition they provide <strong>links to related principles</strong> found in the last three chapters for the benefit of those who wish to learn more.</p>
					<p>The book’s last three chapters cover <strong>principles of design</strong>, <strong>human factors</strong>, and <strong>health IT usability</strong>. They aim to provide readers with a basic understanding of relevant information about how the human brain works and fundamental principles of visual design to suggest steps developers can take to create usable user interfaces. The content herein provides an introduction to the subject, but we also offer recommendations for those interested in reading further.</p>
					<p>All patients and physicians mentioned in the book are fictitious. The designs in this book were created by our team and reviewed by a national panel of clinical and human factors experts, but have not been empirically tested against existing designs.</p>
					
					<h3>How to Use This Book</h3>
					<p>This book’s chapters can be read in any order. Nevertheless, we encourage you to read them in the order our layout proposes. Chapter 2 (Medication List), for example, introduces basic concepts that are reused in subsequent chapters.</p>
					<div class="print-only page-break"></div>
					<h3>Tell Us What You Think</h3>
					<p>You can email us at <a href="mailto:feedback@inspiredEHRs.org?Subject=EHR%20feedback" target="_top">feedback@inspiredEHRs.org</a>. We welcome your comments. Please let us know what subjects you would like us to cover next. We will post the helpful examples or insights you send our way to Jeff Belden’s blog at <a href="http://toomanyclicks.com/">TooManyClicks.com</a>.</p>

				</div>
			</div>
		</section>

		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
				</div>
			</div>
			<nav class="footer">
				<div class="container">
					<div class="sixteen columns">
						<ul>
							<li class="about-this-book">
				<a class="prev-ch" href="./foreword.php"><span class="prev"></span><span class="ch-name">Foreword</span></a> 
				<a class="next-ch" href="./medication-list.php"><span class="next"></span><span class="ch-name">Medication List</span></a></li>
			</ul>
					</div>
				</div>
			</nav>
		</footer>
		<?php include './footer.php'; ?>
		
					</div>
				</div>
			</div>
		</section>
		
	</section>
</div><!--end wrapper-->
</body>
</html>