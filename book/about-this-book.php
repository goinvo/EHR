<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>EHR Style Guide</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="about-this-book">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
				
	<section id="about-ch" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>1</h2>
					<h2>About this Book</h2>
				</div>
			</div>
		</header>
		<section class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Who should read this book</h3>
					<p>This book is written for anyone who develops or implements health IT applications, but particularly for electronic health record (EHR) vendor teams. We offer clear explanations with visual and interactive examples designed to illustrate and inspire useful and usable EHR interface design.</p>

					<h3>How to use this book</h3>
					<p>You can read the chapters in any sequence you prefer. We suggest starting with Chapter 2, The Medication List, because the Medication List is fundamental to some of the subsequent chapters in the book. In the final two chapters (Design Principles and Human Factors Principles), you can gain a basic understanding of how the human brain works and review some of the fundamental principles of visual design as they affect your work in software development. We also link to sections of the final two chapters from within the earlier chapters.</p>

					<h3>What are the elements in the book?</h3>
					<p>Chapters 2 - 6 present 7 basic elements of EHR functionality (Medication Lists, Medication Allergy Lists, Medication Reconciliation, CPOE, ePrescribing, Clinical Decision Support, and Drug-Drug Interaction and Drug-Allergy Alerts). </p>
					<p>You can read basic descriptions of safety-related usability issues and guidelines. We focus on usability and how humans see, read, think, pay attention, remember, and decide. We use <strong>clinical scenarios</strong> to bring a human perspective to your understanding, helping you empathize with the user (physician, nurse, or patient) and their struggles. The book is rich with <strong>visual examples</strong> and annotated illustrations (singly or in collections) with examples of not-so-good design, suggested enhancements, and examples you can aspire to. We have also built interactive <strong>prototypes</strong> to let you dynamically explore the interface and clinical data. </p>

					<p>We write in plain language to make this accessible to anyone, but provide deeper dives (Quick Tips) with more technical content for those who wish to learn more. The content is based on solid science of human factors engineering, brain science (cognitive science), learning technology, and data visualization. We offer a few recommended readings at the end.</p>

					<h3>What is a Quick Tip?</h3>
					<p>Quick Tips are more detailed explanations of important concepts in more technical language, showing additional examples, and sometimes referring to additional learning resources including primary sources. They occur in pop-overs, so readers can easily skip over the content if they only need a more basic understanding of a chapter.</p>

					<h3>How can I give feedback?</h3>
					<p>In our early drafts, we are asking select volunteer readers to review the book and offer us feedback about what works, what doesn’t work, and what we can do differently to improve the reader’s experience. To be among that group, sign up <a href="https://docs.google.com/forms/d/1Mn_KXhFjRvsG8JkEZOQYKaut63RjBV86U6u_xLgjdzk/viewform" target="blank">here</a>. We’ll invite you to review the next draft and leave comments and suggestions about specific sections or book elements.</p>

					<h3>Where can I find more?</h3>
					<p>Within the text, we link to other usability resources from the usability and design community at large, and to other resources from the federally-funded <a href="https://sbmi.uth.edu/nccd/" target="blank">SHARP-C</a> project to promote EHR usability.
					<br/>The most relevant resources are: 
						<ul>
							<li><a href="https://sbmi.uth.edu/nccd/SED/Briefs/" target="blank">Safety Enhanced Design Briefs</a></li>
							<li><a href="https://sbmi.uth.edu/nccd/ehrusability/" target="blank">EHR Usability website</a></li>
						</ul>
					</p>

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
						<div class="fleft" id="prevCh">
							<p class="pagination prevCh"><a href="./index.php">Go back to Table of Contents</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./medication-list.php">Continue to Medication List</a></p></div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	

</div><!--end wrapper-->
</body>
</html>