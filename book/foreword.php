<?php $pageTitle='Foreword'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>EHR Style Guide | <?php echo $pageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="foreword">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
				
	<section id="foreword-ch" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>Foreword</h2>
					<div class="subheader"><p>This book is dedicated to the development community working tirelessly to computerize the world of medicine, and to the patients and physicians who will benefit.</p></div>
				</div>
			</div>
		</header>
		<section class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>In the 1960s, the medical field began to take advantage of computing technology.  Doctors realized that access to a patient's up-to-date information and medical history could be useful if not vital asset to their work.</p>
					<p>The Mayo Clinic in Rochester, Minnesota and the Medical Center Hospital of Vermont were two of the first clinics to start utilizing Electronic Health Record systems (EHRs). While evolving medical informatics systems promise to transform healthcare, this process takes the enormous combined effort of designers, analysts, software engineers, usability specialists, and medical professionals.  </p>
					<p>Today the functionality, design and implementation of EHRs have attracted large amounts of attention.  These components have become subfields of study in and of themselves. Every day teams create and implement new designs, and the field is continuing to grow. Yet, while many currently available EHRs offer a wide range of functionalities, users also report significant usability issues. The challenge facing the EHR community is that of bridging the gaps between design, functionality, and what medical practitioners need to do when providing care.</p>
					<p>This book aims to encourage the design of useful and usable EHRs by:
						<ol>
							<li>providing a window into what medical practitioners need,</li>
							<li>explaining some of the science behind how the human mind processes information, and</li> 
							<li> providing design examples.</li>
						</ol></p>
					<p>We hope you will enjoy reading the book and playing with our interactive prototypes.</p>
					<p class="quote_author">Jeff Belden, MD <br/>Columbia, MO</p>
				</div>
			</div>
		</section>
		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./about-this-book.php">About this Book<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>

</div><!--end wrapper-->
</body>
</html>