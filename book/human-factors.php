<?php $pageTitle='Human Factors'; ?>
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

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="human-factors">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-7" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>7</h2>
					<h2>Human Factors Principles</h2>
					<div class="subheader"><p>Systems that complement how we see, read, think and decide can improve our performance.</p></div>
				</div>
			</div>
		</header>
		<section id="human-factors-engineering" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<h3>What is Human Factors Engineering?</h3>
					</div>
					<p>Human Factors Engineering seeks to improve human performance by designing systems that are compatible with our perceptual, cognitive, and physical abilities. Imagine an EHR that requires a physician to cancel a prescribing task, then navigate through several screens, remember a value, and navigate back to complete the prescription. This EHR taxes the well-known limits of human memory. Over-taxing users’ memory causes them to make errors, especially if they’re interrupted while using the system – a common occurrence in healthcare.</p>
					<p>In contrast, an EHR that allows a physician to see at a glance how well a patient is controlling his diabetes and hypertension gives the physician the situational awareness (and time) he needs to begin to address his patient’s current concerns. The physician can focus attention on understanding the story of the human sitting across the room, instead of on remembering and finding the necessary information to make decisions.</p>
					<p>The Fundamental Theorem of Biomedical Informatics states “that a person working in partnership with an information resource is ‘better’ than that same person unassisted.” Human Factors Engineering involves building this partnership, designing hardware and software that make it as easy as possible for users to do tasks safely and efficiently. An EHR based on sound human factors engineering principles can help clinicians focus on the difficult task of caring for patients, rather than on figuring out how to use or work around the EHR. We must understand the ways people see, read, think and decide so that we can use this information to build systems that enhance people's job performance.</p>

				</div>
			</div>
		</section>

		<section id="how-people-perceive" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>7.1 How People Perceive</h3>
					</div>
					<h5 id="expectations">7.1.1 Our Eyes Have Expectations </h5>
					<p class="spacetop"><strong>Our eyes are drawn to familiar patterns. Sometimes we even see patterns we know and expect instead of what's actually there.</strong></p>
					<p>Your eyes take in data, but your brain 'perceives' this data and parses it into meaningful visual information. Our brains create shortcuts to help us make sense of the estimated 40 million sensory inputs they receive per second. They use our expectations, past experiences, associations, and learned rules of thumb to make guesses about what it is we're looking at. Everyone has seen something at a glance and thought it was a certain object, and then focused on it and realized it was actually something else.</p>
					<div class="example" id="fig-7-1">
						<div class="ex-title">
							<span class="ex-type">Figure 7.1</span>
							<span class="ex-caption">Read the Following Words:</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/thecat.png" title="Read the Following Words">
							<img src="./assets/images/examples/human-factors/thecat.png" class="scale-with-grid" alt="Tae Cat looks like The Cat when the tops of the A's are cut off" /></a>
					</div>
					<p>Most people read this as “The cat,” even though the middle letter in each word is exactly the same, and neither is a perfect H or A. Our perceptual system uses context (the letters around the middle letter) and expectations (predicated on our familiarity with common English words) to allow us to cope with and make sense of imperfect, noisy input. But the same properties that make our perceptual system robust can also lead us astray. For instance, can you name the first drug on this prescription (<a href="#fig-7-2">Figure 7.2</a>)?</p>
					<div class="example" class="fig-7-2">
						<div class="ex-title">
							<span class="ex-type">Figure 7.2</span>
							<span class="ex-caption">Handwritten Prescription <span class="capt-desc">&mdash; Name the first drug on the list <span class="smaller">(from <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC1070756/" target="blank" class="link">Western Journal of Medicine</a>)</span></span></span>
						</div>
						<a href="./assets/images/examples/human-factors/handwritten-prescription.png" class="fancybox" title="Handwritten Prescription - Name the first drug on the list">
						<img src="./assets/images/examples/human-factors/handwritten-prescription.png" class="scale-with-grid" alt="Handwritten Prescription - Name the first drug on the list" /></a>
					</div>
					<p>The cardiologist who prescribed the medication wrote 'Isordil,' but the pharmacist read it as 'Plendil.' After taking the prescribed medication for two days, the patient had a heart attack. Several days after that, he died<sup>1</sup>. In this case, the pharmacist was led astray by the very same perceptual system that enabled him to do his job correctly most of the time. Our perceptual system makes assumptions so automatically that we often don’t even realize that it's doing so.</p>
					<p>Users come to computers with expectations (mental models) based on what they have seen before, and with an in-built tendency to make assumptions about what it is they're seeing. When we scan a screen, we look for digestible chunks: familiar things like navigation bars, buttons and logos. We also tend to look at the center of the screen rather than at the edges, because we expect the edges to display less important things, like logos and tools not relevant to the task at hand. We expect the core components of an interface to be front and center, easy to find.</p>
					<div class="example" class="fig-7-3">
						<div class="ex-title">
							<span class="ex-type">Figure 7.3</span>
							<span class="ex-caption">An Unclear Layout <span class="capt-desc">&mdash; Adding allergies without good ‘workflow’ guidance from the interface</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="fancybox" title="An Unclear Layout - Adding allergies without good ‘workflow’ guidance from the interface">
						<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="An Unclear Layout - Adding allergies without good ‘workflow’ guidance from the interface" /></a>
					</div>
					<div class="example" class="fig-7-4">
						<div class="ex-title">
							<span class="ex-type">Figure 7.4</span>
							<span class="ex-caption">Meeting Our Expectations <span class="capt-desc">&mdash; We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order.</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="fancybox" title="Meeting Our Expectations - We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="scale-with-grid" alt="Meeting Our Expectations - We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order."/></a>
					</div>
					<div class="example" class="fig-7-5">
						<div class="ex-title">
							<span class="ex-title">Figure 7.5</span>
							<span class="ex-caption">A few common affordances <span class="capt-desc">&mdash; 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" title="A few common affordances - 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="scale-with-grid" alt="A few common affordances - 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it." /></a>
					</div>
					<div class="example" class="fig-7-6">
						<div class="ex-title">
							<span class="ex-title">Figure 7.6</span>
							<span class="ex-caption">Disclosure Arrow Affordance <span class="capt-desc">&mdash; In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/Um_Ehr_0010_collapse-affordance.png" title="Disclosure Arrow Affordance - In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information">
							<img src="./assets/images/examples/human-factors/Um_Ehr_0010_collapse-affordance.png" class="scale-with-grid" alt="Disclosure Arrow Affordance - In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information" /></a>
					</div>
					<div class="example" class="fig-7-7">
						<div class="ex-title">
							<span class="ex-title">Figure 7.7</span>
							<span class="ex-caption">Sort Arrow Affordance <span class="capt-desc">&mdash; Here, the arrow indicates the ability to sort the list by different columns.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/Um_Ehr_0011_sort-affordance.png" title="Sort Arrow Affordance - Here, the arrow indicates the ability to sort the list by different columns.">
							<img src="./assets/images/examples/human-factors/Um_Ehr_0011_sort-affordance.png" class="scale-with-grid" alt="Sort Arrow Affordance - Here, the arrow indicates the ability to sort the list by different columns." /></a>
					</div>
					<p>Affordances tell users at a glance that particular elements of the graphical user interface are functional devices. Well-designed affordances also give users an idea of what will happen when they use them.</p>
					
					<h5 id="gestalts">7.1.2 We See in Gestalts</h5>
					<p class="spacetop"><strong>People perceive whole shapes, or gestalts, rather than disconnected forms.</strong></p>
					<p>Gestalt is a German word for form or shape. In English, it has come to have connotations of ‘wholeness’. When you walk into a room, you immediately form an overall sense of what's going on therein and its corresponding emotional tone. Most people understand when they've come in and interrupted a fight, even if they heard none of the previous conversation. When you view a webpage for the first time, you get a similar overall impression of it. You can say pretty quickly whether you think the site looks cluttered or appealing, modern or out of date. Several design elements feed into our gestalt impressions of sites and applications:</p>
					<h5 id="proximity">Proximity</h5>
					<p>The distance between objects determines what we perceive the relationships between those objects to be. If things are close together, we assume that's significant and 'group' them in our minds. If elements in a designed object are grouped together, we assume this was intentional and is meaningful.</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-7-8">
						<div class="ex-title">
							<span class="ex-type">Figure 7.8</span>
							<span class="ex-caption">Our eyes notice the distribution of these dots...</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png" title="Our eyes notice the distribution of these dots...">
							<img src="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png" class="scale-with-grid" alt="Our eyes notice the distribution of these dots..." /></a>
					</div>
				</div>
				<div class="one-helf column">
					<div class="example" id="fig-7-9">
						<div class="ex-title">
							<span class="ex-type">Figure 7.9</span>
							<span class="ex-caption">... and our brains group the closer objects automatically</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png"title="... and our brains group the closer objects automatically">
							<img src="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png" class="scale-with-grid" alt="... and our brains group the closer objects automatically" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p><strong>Example:</strong> The medication reconciliation view below (<a href="#fig-7-10">Figure 7.10</a>) breaks medications into groups. It then places these groups in the same columns. Users can tell there are different groups (columns) at a glance, without having to focus on, read and understand all the information on the chart.</p>
					<div class="example" id="fig-7-10">
						<div class="ex-title">
							<span class="ex-type">Figure 7.10</span>
							<span class="ex-caption">Ambulatory Medication Reconciliation Workflow <span class="capt-desc">&mdash; Items in the center are most alike, and those at the sides are most different. Items in between need clarification.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png" title="Ambulatory Medication Reconciliation Workflow - Items in the center are most alike, and those at the sides are most different. Items in between need clarification.">
							<img src="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png" class="scale-with-grid" alt="Ambulatory Medication Reconciliation Workflow - Items in the center are most alike, and those at the sides are most different. Items in between need clarification." /></a>
					</div>
			
					<h5 id="closure">Closure</h5>
					<p>Our brains fill in visual blanks for us and draw conclusions with less than complete information. This helps us make sense of the world quickly. Sometimes we can draw the wrong conclusions, misleading our users. We need to keep the advantages and shortcomings of this perceptual habit in mind when we design systems. Designers can use our brains' tendency to quickly help users to understand a whole based on a partial picture, but design can also accidentally lead users to unintended and unhelpful 'false' gestalt impressions.</p>
					<p><strong>Example:</strong> Our minds take lines or curves and build objects out of them. This is how we can know we're looking at something that's supposed to represent a person when it's a stick figure. Even though the lines below don't add up into a circle and a rectangle, people can still see and identify both shapes.</p>
					<div class="example" id="fig-7-11">
						<div class="ex-title">
							<span class="ex-type">Figure 7.11</span>
							<span class="ex-caption">Closure</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0003_closure.png" title="Closure">
							<img src="./assets/images/examples/human-factors/UM_EHR_0003_closure.png" class="scale-with-grid" alt="Closure" /></a>
					</div>
					
					<h5 id="similarity">Similarity</h5>
					<p>We perceive visual elements that look <strong>similar</strong> as parts of a group. Designers can indicate that two objects are similar, and thus related, by giving the objects the same sizes, shapes or colors. Interfaces that visually group related items are easier to use than those that don't. As a general rule, items that users must process together should be grouped together, and items that need to be processed separately should not.</p>
					<div class="example" id="fig-7-12">
						<div class="ex-title">
							<span class="ex-type">Figure 7.12</span>
							<span class="ex-caption">Users Perceive That the Blue Dots Are Associated</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png" title="Users Perceive That the Blue Dots Are Associated">
							<img src="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png" class="scale-with-grid" alt="Users Perceive That the Blue Dots Are Associated" /></a>
					</div>
					<p><strong>Example</strong>: In the medication reconciliation interface we looked at earlier, <strong>proximity</strong> marked certain groups of items as categories (columns). Now, when we add color, we create new groups (<a href="#fig-7-13">Figure 7.13</a>). Medications the user approves turn green, and medications the user deselects fade to light gray.</p>
					<div class="example" id="fig-7-13">
						<div class="ex-title">
							<span class="ex-type">Figure 7.13</span>
							<span class="ex-caption">Color creates new groups</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" title="Color creates new groups">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" alt="Color creates new groups" /></a>
					</div>
					
					<h5 id="symmetry">Symmetry</h5>
					<p>Our minds like to make sense of complex visual fields by assigning them a perceived center and attendant <strong>symmetry</strong>.</p>
					<p><strong>Example</strong>: <a href="#fig-7-14">Figure 7.14</a> shows us how our minds like to see two symmetrical diamonds rather than other, equally possible (but less pleasingly symmetrical) shapes.</p>
					<div class="example" id="fig-7-14">
						<div class="ex-title">
							<span class="ex-type">Figure 7.14</span>
							<span class="ex-caption">Symmetry <span class="capt-desc">&mdash; Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png" title="Symmetry - Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes.">
							<img src="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png" class="scale-with-grid" alt="Symmetry - Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes." /></a>
					</div>
					<p><strong>Example</strong>: When we first glance at <a href="#fig-7-15">Figure 7.15</a>, below, we see two columns. In fact a series of individual entries creates the illusion of columns.</p>
					<div class="example" id="fig-7-15">
						<div class="ex-title">
							<span class="ex-type">Figure 7.15</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5 id="figure-ground">Figure / Ground</h5>
					<p>Our brains perceive objects either as figures, in the foreground, or as part of the background. Whatever we're focusing on becomes the figure, and everything else shifts into the background accordingly.</p>
					<p><strong>Example</strong>: In <a href="#fig-7-16">Figure 7.16</a> below, the ampersand is the figure, distinct from the blue rectangle that serves as its ground or background. As the designer intended, users understand the figure to be more important than the ground.</p>
					<div class="example" id="fig-7-16">
						<div class="ex-title">
							<span class="ex-type">Figure 7.16</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png" class="scale-with-grid" alt="&" /></a>
					</div>
					<p><strong>Example</strong>: <a href="#fig-7-17">Figure 7.17</a> below is the classic Edgar Rubin image in which viewers see either two faces or a vase, depending on where they focus their attention. Rubin was a practitioner of gestalt psychology.</p>
					<div class="example" id="fig-7-17">
						<div class="ex-title">
							<span class="ex-type">Figure 7.17</span>
							<span class="ex-caption">Ambiguous Figure/Ground Relationship</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png" title="Ambiguous Figure/Ground Relationship">
							<img src="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png" class="scale-with-grid" alt="Ambiguous Figure/Ground Relationship" /></a>
					</div>
					
					<h5 id="continuity">Continuity</h5>
					<p>In day to day life, our perception combines and relies on all of these components. Alignment creates groupings of items, and these groupings are said to have <strong>continuity</strong>. Our brains expect, and try, to reconcile contours into continuous objects.</p>
					<div class="example" id="gal-7-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.1</span>
							<span class="ex-caption">The Continuity Principle</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 a</span> Though a rectangle 'blocks' parts of this curve...</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png" class="scale-with-grid" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 b</span> ...humans perceive both the curve and the box as whole, uninterrupted entities...</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png" class="scale-with-grid" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 c</span> ...rather than as a box and some line segments.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png" class="scale-with-grid" /></a>
								</div></li>
							</ul>
						</div>
					</div><!--end gallery 7.1-->
					<p><strong>Example</strong>: <a href="#fig-7-18">Figure 7.18</a> demonstrates several of the things we've been talking about. When we look at it, our brains detect the proximity of different medication lists and categories and the similarity of 'selected' and 'deselected' groups of medications. The list also takes advantage of the contrast we perceive between figure and ground. The dark text seems closer to us, and the faded text seems further away.</p>
					<div class="example" id="fig-7-18">
						<div class="ex-title">
							<span class="ex-type">Figure 7.18</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>7.1.3 I Can't See It but I Use It</h5>
					<p><strong>We use our peripheral vision to get a big picture of what we're seeing, and we use that big picture to help us decide what to focus on.</strong></p>
					<p>Our visual system consists of our eyes and the brain systems that work with them. This system does an amazing job of seeking out and providing us with visual information. It does so mostly without our being consciously aware of it. We are barely aware that only the very central part of our vision provides us with a sharp-focused image, detail rich, with color information. The periphery of our vision (outside of the central “peephole”) is fuzzy, and drained of color. That peripheral part of the vision is, however, able to detect features such as motion, edge and contrast. These features guide our brains in making their "visual query" of the views before us.</p>
					<p>Rapid eye movement enables our brains to sample the environment. The task we're trying to accomplish determines the details we unconsciously seek out. If we're looking for a friend, we notice faces in the crowd. If we're trying to find our way through the crowd, we notice the gaps between people.</p>
					<p>Animated ads are effective (and annoying) because our peripheral vision detects motion. We want to ignore the ads, but their design takes advantage of the way vision works. Our eyes are drawn to anything that stands out. Our brains are trying to recognize threats in our environment, and our peripheral vision is always alert to differences and changes.</p>
					<p><strong>Example</strong>: When we look at <a href="#fig-7-19">Figure 7.19</a>, below, our eyes first do a quick visual query. They seek out major landscape elements and the details that will help us accomplish whatever we're using this display to do. What we notice in the scene below will vary depending on whether we're driving, trying to decide whether we need to mow the lawn, or assessing whether the weather will be suitable for a picnic this afternoon.</p>
					<div class="example" id="fig-7-19">
						<div class="ex-title">
							<span class="ex-type">Figure 6.19</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/visualqueries3.png" title="">
							<img src="./assets/images/examples/human-factors/visualqueries3.png" class="scale-with-grid" alt="" /></a>
					</div>
					<p><strong>Example</strong>: When we look at a display like Gallery 7.2 below, we think we see something like the first image. Actually, what we really 'see' at any given instant is something more like the second image. We only 'focus' on a small area at any given moment. Our visual brain first latches onto a preattentive attribute like the red text, and is disproportionately drawn to that element. Then our eyes automatically scan to find the next point of visual interest.</p>
					<div class="example" id="gal-7-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.2</span>
							<span class="ex-caption"></span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">7.2 a</span> We think we see this</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.2 b</span> ...but we actually see this.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									
								</div></li>
							</ul>
						</div>
					</div>
					<p>A peripheral glance tells people where they are and what to expect, and helps us decide what to focus on. We can only truly see what we focus on. The display can only effectively convey that information at any given time.</p>
					<p><strong>Design tip:</strong> Feedback and error messages should pop up near the area people will already be focusing on. While we do use our peripheral vision to orient ourselves and scan for things, we also tend to ignore our peripheral vision when we're trying to focus on the task at hand.</p>
					
					<h5 id="preattentive-attributes">7.1.4 Preattentive Attributes</h5>
					<p class="spacetop"><strong>Little, visual things people notice and understand quickly</strong></p>
					<p>We notice some visual features, such as color, size, shape, orientation, and motion, more quickly than others. We call the things that especially stand out to us <strong>preattentive attributes</strong>. Before we fully process visual information, our minds prompt us to focus on these attributes. Things that stand out from the rest of their environment, as in <a href="#fig-7-20">Figure 7.20</a> below, do so because of their attention-catching preattentive attributes.</p>
					<div class="example" id="fig-7-20">
						<div class="ex-title">
							<span class="ex-type">Figure 7.20</span>
							<span class="ex-caption">How can we use preattentive attributes to facilitate data presentation?</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png" title="How can we use preattentive attributes to facilitate data presentation?">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png" class="scale-with-grid" alt="How can we use preattentive attributes to facilitate data presentation?" /></a>
					</div>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="how-people-think" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>7.2 How People Think</h3>
					</div>
					<h5>7.2.1 The Two Ways People Think</h5>
					<p><strong>Everyone has two modes of thinking. There's a rapid mode that requires little conscious effort, and a slower mode that requires focus.</strong></p>
					<p>If a system is easy to understand and work with, users don't have to engage with it via their 'slow, focused' mode of thinking. They can just use their rapid mode, and can save their mental energy for more important matters. Daniel Kahneman wrote a great book about these modes, and our thinking builds on his work.</p>
					<p>The rapid mode of thinking is automatic and almost effortless. People often don't experience a sense of voluntary control over it. This mode allows us to:
						<ul class="disc">
							<li>see that something is larger than something else</li>
							<li>answer simple computations, like 2+2 = 4</li>
							<li>read words on a billboard</li>
							<li>understand simple sentences</li>
							<li>make rapid and simple associations, such as stereotypes (positive or negative)</li>
							<li>notice preattentive attributes</li>
						</ul></p>
					<p>Our focused mode of thinking is effortful, and allows us to perform more complex mental activities. We associate this mode of thinking with our experiences of agency, choice and concentration: in short, with our 'consciousness'. This mode allows us to:</p>
						<ul class="disc">
							<li>focus on listening to one voice in a noisy room</li>
							<li>recall information, like addresses and phone numbers</li>
							<li>evaluate the validity of a complex argument</li>
							<li>scan for a particular piece of information in a long article</li>
						</ul>
					<p>When creating an application, ask yourself whether you have any opportunities to convert tasks that require focused thinking into tasks that only require rapid thinking. Making the application perform complex calculations, sort information, and concisely present key details can free people up to do the focused thinking that only humans can.</p>
					<p>The Twinlist medication reconciliation prototype, Figure 7.22, makes the focused task of scanning two lists and finding similar drugs into a rapid one. The prototype identifies similar drugs and sort them onto the same row. Twinlist also makes it easy for users to see the differences between similar drugs by highlighting these differences in yellow. A slow, visually and cognitively demanding search task involving two separate lists becomes a matter of brisk perception with Twinlist.</p>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="working-memory" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Working Memory</h3>
					</div>
					<p><strong>Working memory takes work and is limited to four things, try to design without making doctors and patients use working memory.</strong></p>
					<p>Working memory is your memory that you need for less than a minute. This is sometimes called short term memory. This is the type of memory we use when someone tells us a phone number and we have to keep it in our heads till we write it down or punch it into our phone. This type of memory takes focused thinking. </p>
					<p><strong>Design tip</strong>: Try not to ask people to look at information on one page and then remember it and enter it into another field on another page.</p>
					<p>If you ask people to use their working memory, make sure they can finish that working memory task before you have them do anything else, find anything else, tell them anything else, or give them more options. Working memory is easy to interrupt.</p>
					<p>People only keep three to four items at a time in working memory. The way we display bits of information can influence our working memory capability. If we chunk items, we can remember a longer string of digits than if we don’t. For example, a phone number is easier to remember with chunking. Compare these numeric strings:</p>
						<div id="numeric-strings">
							<p><span class="grey">Harder</span> <span class="phoneno">9121889874</span></p>
							<p><span class="grey">Easier </span> <span class="phoneno">912-188-9874</span></p>
							<p><span class="grey"></span><span class="phoneno last">(912) 188-9874</span></p>
						</div>
					<p>It’s much harder to merely dial the phone with the first example. If you have users enter phone numbers, allow them to enter with or without the intervening hyphens or parentheses, but display them in the easier to read formats.When you can’t limit information displayed to only four items, try to offer a chunking method like the phone number example.</p>
					<p><strong>Example</strong>: Here is a visual example of working memory. We can only keep about three to four different items in our working memory. If we add another item, we drop one. </p>
					<div class="example" id="vid-7-1">
						<div class="ex-title">
							<span class="ex-type">Video 7.1</span>
							<span class="ex-caption">Visual Working Memory</span>
						</div>
						<video width="524" height="288" controls>
							  <source src="./assets/images/examples/human-factors/visual-working-memory.mp4"  type="video/mp4; codecs=avc1.42E01E,mp4a.40.2">
							  <source src="./assets/images/examples/human-factors/visual-working-memory.webm" type="video/webm; codecs=vp8,vorbis">
							  <source src="./assets/images/examples/human-factors/visual-working-memory.ogv"  type="video/ogg; codecs=theora,vorbis">
						</video>
					</div>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="cognitive-load" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3 id="">Cognitive Load</h3>
					</div>
					<p><strong>Loads are heavy, even cognitive (mental activity) ones. Help lighten the load.</strong></p>
					<p>Our brains have to manage three types of loads: cognitive, visual, and motor. Cognitive load is the hardest type of load, followed by visual, then motor.</p>
					<p>Here are some considerations for lightening cognitive load:
						<ul class="disc">
							<li>Focused (System 2) thinking causes a greater cognitive load. People can accomplish about ten minutes of focused attention before needing a short break, unless we are particularly interested in the task or in a flow state.</li>
							<li>People can’t truly multi-task. We can only attend to one task at a time. When we think we’re multitasking, we’re actually switching tasks rapidly, but this tires us quickly and can cause mistakes.</li>
							<li>Recognition is easy, remembering is hard. We can recognize complex things like a map of Europe but most of us would likely have a hard time drawing it ourselves.</li>
							<li>Problem solving and calculation are hard, while learning from experience and performing learned actions is easy.</li>
						</ul></p>
					<p><strong>Example</strong>: In the first illustration, we see the mental work a doctor does while reviewing a medication list. This task involves reading the list, recognizing the drug name, remembering if it is used for hypertension, and then recalling from memory if it’s a maximum dose or not for each medication.</p>
					<div class="example" id="fig-7-14">
						<div class="ex-title">
							<span class="ex-type">Figure 7.14</span>
							<span class="ex-caption">Checking for hypertension medications</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/SimpleList_MentalModel.png"><img src="./assets/images/examples/human-factors/SimpleList_MentalModel.png" class="scale-with-grid" /></a>
					</div>
					<p><strong>Example</strong>: In the illustration below, we lighten the cognitive load by sorting the list alphabetically by diagnosis, the physician needs to use much less effort. </p>
					<div class="example" id="fig-7-15">
						<div class="ex-title">
							<span class="ex-type">Figure 7.15</span>
							<span class="ex-caption">Sort by  diagnosis then search for hypertension medications</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0010_sort-condition-mental-effort.png"><img src="./assets/images/examples/human-factors/UM_EHR_0010_sort-condition-mental-effort.png" class="scale-with-grid" /></a>
					</div>
					<p>If the maximum dosage had also been somehow indicated, that would be yet another thing the doctor could recognize rather than have to know, recall, and think about, thus reducing cognitive load even further.</p>
					<div class="example" id="fig-7-16">
						<div class="ex-title">
							<span class="ex-type">Figure 7.16</span>
							<span class="ex-caption">Drug search using auto-completion allows recognition instead of recall.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0010_autocomplete.png"><img src="./assets/images/examples/human-factors/UM_EHR_0010_autocomplete.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section><!--end section review-->

		<section id="chunk">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h5 id="">Everybody Likes a Chunk</h5>
					</div>
					<p><strong>Breaking information down into smaller more digestible chunks help people make sense of things.</strong></p>
					<p>While the human brain is amazing it can only consciously process a small amount of information with focused thinking at a time. So when you are designing interfaces remember break down information into chunks and don’t give someone everything at once.</p>
					<p>One way to do this is to use progressive disclosure. This means give people the information they need at that moment. As they need more information gradually get more and more detailed. This means as designers we have to have a good grasp of what the users task would likely be. This helps us know what the superficial level of knowledge would be and what good second or third levels of detail could be and would be useful to them. The rule of four is good to keep in mind here as is remembering that our mind likes to see things in groups and that if they are close together they belong together. </p>
					<p><strong>Example:</strong> In this list the key essentials of the allergies’ information are broken into four columns of giving the heath care practitioner what they need to know for the task. If they need more information about the allergy the key essentials the practitioner can select an entry for more information.</p>
					<div class="example" id="fig-7-17">
						<div class="ex-title">
							<span class="ex-type">Figure 7.17</span>
							<span class="ex-caption">Allergy List</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_allergies-details.png"><img src="./assets/images/examples/human-factors/UM_EHR_0010_autocomplete.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="goal">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Goal, Execute, and Evaluate!</h5>
					<p><strong>We have a thought cycle that guides our decision making and it is Goal, Execute and Evaluate.</strong></p>
					<p>We all have a thought cycle that we use constantly and at different levels simultaneously.</p>
					<p>We start by forming a goal, e.g., get some food, delete a word for a document, impress our boss with our mad design skills.</p>
					<p>Next we choose and execute actions that we think will help us progress to that goal.</p>
					<p>Finally we evaluate if our actions worked and if we were able to accomplish our goal or at least moved towards it.</p>
					<p>In design this means if we keep goal, execute, and evaluate in mind we can try to provide clear paths to the goal, provide clear choices and place information or tools where a user expects to find them and finally provide feedback or progress information so a user can evaluate how the user is doing and if they definitively accomplished their goal.</p>
				</div>
			</div>
		</section>

		<section id="flow">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Go with the Flow</h5>
					<p><strong>We like to get into flow states where everything else falls away and we stay in the moment, engrossed in what we are doing.</strong></p>
					<p>We have all had those great moments when we just were really having a good time and getting a lot done. Be it at work or probably more often at play, we get into what we are doing to the point that we lose a track of time and get a lot done. These states are called flow states and one thing we all hate is when we are in a flow state and we get interrupted. (Weinschenk 91)</p>
 					<p>Here are some tips to getting end users into flow states:</p>
 					<ul class="disc">
						<li>People like control, having control over an activity will help them get in the flow.</li>
						<li>Distractions interrupt flow, be they distractions on a display or a co-working interrupting</li>
						<li>People also like goals that are challenging but at the same time achievable.</li>
						<li>Break more difficult tasks into stages.</li>
						<li>Give feedback on progress. When people see their progress it helps motivate them</li>
					</ul>
					<div class="example" id="fig-7-18">
						<div class="ex-title">
							<span class="ex-type">Figure 7.18</span>
							<span class="ex-caption">Example: Here a patient is updating their medication list but at the bottom they can see they are on step 2 of 22, giving them a view of their progress helping them get into a flow.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0009_patient_stepmed_not-taking.png">
						<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0009_patient_stepmed_not-taking.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="info_chaos">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<h3>How People Manage Information</h3>
					</div>
 					<h5>Information Chaos</h5>
					<blockquote>Too much information going through my brain, too much information driving me insane - The Police</blockquote>
					<p>The are five things that lead to information chaos: information overload, information underload, information conflict, erroneous information and information scatter. Any one of these things is bad but all five together is really bad, hence it’s called information chaos.</p>
					<p><strong>Information overload</strong> happens when there is too much information for us to make sense of quickly. This is bad because it make us tired and possible even anxious, but it also reduces our situational awareness. This means we can miss really important things that can get us into trouble.</p>
					<p><strong>Information underload</strong> is when we just don’t have enough information to learn anything new or use to make a decision.</p>
					<p><strong>Information conflict</strong> is also rather self explanatory, it happens when something is giving information that conflicts with other information being displayed or we already know.</p>
					<p><strong>Erroneous information</strong> is what happens when the information we find or retrieve just isn’t correct for whatever reason.</p>
					<p><strong>Information scatter</strong> is when someone has the information they need but it is in many different places or in several different formats.</p>
					<p>If a display has one or all of these factors of information chaos in play a doctor could miss something important, like a dangerously high blood pressure reading, and their patient could get into some serious health trouble.</p>
					<div class="example" id="fig-7-19">
						<div class="ex-title">
							<span class="ex-type">Figure 7.19</span>
							<span class="ex-caption">Here is a walkthrough of the factors involved with information chaos.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0011_info-chaos.png">
						<img src="./assets/images/examples/human-factors/UM_EHR_0011_info-chaos.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<h3>Situational Awareness</h3>
					</div>
					<p><strong>It is all about being able to put all the elements of a complex situation into perspective in order to make choices that will impact outcomes or goals.</strong></p>
					<p>Situational awareness is key, especially in crisis situations. This is why the term usually is used in the context of military command and control, emergency services like firefighting and policing as well as situations like air traffic control and ship navigation. Situational awareness is also important in everyday settings like driving a car or getting across a busy street. It is easy to see how situational awareness relates to electronic health records because medical records are often used in a crisis situation like an ER visit or a surgery situation. If a health care provider loses situational awareness because they are having a problem with information flow, it can be a major contributor to mistakes and negative outcomes.  Distractions can decrease situational awareness.  </p>
 					<p>For example, two children arguing in the backseat may be an important situation for the driver of a car to attend to, however it can also make the driver less aware that a large animal has just run onto the road in front of the car.  Similarly, alerts about laboratory values may be important, but if they distract the physician during the process of ordering a medication, the physician may be more likely to make a medication ordering error.</p>
					<p>One frustrating thing about people is we want more than our minds can handle and if things are not well designed a healthcare provider can lose sight of important information and lose situational awareness and make a bad call. Good design is difficult at times but helps people maintain good situational awareness. The goal is to find the right balance of information that helps a user maintain situational awareness without giving too little or too much information to cause problems.</p>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>How we make decisions</h3>
						<p><strong>More often than not we make decisions before we even know we have made a decision.</strong></p>
						<p>While we like to think we are always in charge and using our focused thinking analytical minds actually it is our fast thinking mind, one that is used to habits and rules of thumb that is calling the shots. </p>
						<p>The fast thinking unconscious mind is faster than the conscious focused thinking one, which means people often make decisions without knowing why but will then try to build a narrative or a reason after the fact because we want to have logical reasons for our decision making process.</p>
						<p>Primers tend to kick our fast thinking minds into gear. Primers are things like seeing ratings, or the fear of missing out on a good deal, desires to fit in, associations based in prior experience, or a desire to avoid risk, and many other factors are in play. Often these factors are unknown to us and our fast thinking mind makes reactions that we experience as decisions. This unconscious system can be useful though and it can discover things like risk without us even realizing it. </p>
						<p>Because people respond and act to signals of danger at an unconscious level a good thing to keep in mind is alerts. Alerts that are unwarranted can quickly become associated with being meaningless and then habituated to the point where they are ignored, be they important or not. The reaction to the alert will depend upon if it signals a danger and if it has not been overused to the point where it is now no longer considered a danger and ignored. The thing to keep in mind is there is rarely any conscious thinking happening in the reactions.</p>
						<p>A good takeaway is the fast thinking mind is going to act first and it is going to follow rules of thumb based on past experiences and expectations. It is going to make snap judgments and associations. Our truly more rational mind takes focus and effort to use so we tend to protect it and use it only when we have to. We don’t use it to make decisions unless we must. Good design takes advantage of this and helps to save the focused thinking mind for the decisions medical practitioners have to make, rather than remembering how to use a complicated system or looking for options in an endless dropdown menu.</p>
						<p>Example: Error recovery is great example of how we can protect ourselves from our fast thinking mind from making a mistake. In this example the user has to take two actions to confirm their selection, hopefully allowing them a moment to double check their choice.</p>
						<div class="example" id="fig-7-20">
							<div class="ex-title">
								<span class="ex-type">Figure 7.20</span>
								<span class="ex-caption">Drug Interaction Alert</span>
							</div>
							<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0004_drug-drug-interaction-unselected-annotated.png">
							<img src="./assets/images/examples/drug-alerts/UmEhr_0004_drug-drug-interaction-unselected-annotated.png" class="scale-with-grid" /></a>
						</div>
					</div>
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
							<p class="pagination prev_ch"><a href="./drug-alerts.php"><span class="prev"></span>Drug Alerts</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./design-principles.php">Design Principles<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
		<section class="citations">
			<div class="container">
				<div class="sixteen columns">
					<hr />
					<p>References</p>
					<div class="section_cite">
						<p class="grey"><strong>Our Eyes have expectations</strong></p>
						<p>Kannengiesser, U., & Gero, J. S. (2012). A process framework of affordances in design. Design Issues, 28(1), 50-62.</p>
						<p>Norman, D. A. (1999). Affordance, conventions, and design. interactions, 6(3), 38-43.</p>
						<p>Roth, S. P., Schmutz, P., Pauwels, S. L., Bargas-Avila, J. A., & Opwis, K. (2010). Mental models for web objects: Where do users expect to find the most frequent objects in online shops, news portals, and company web pages?.Interacting with Computers, 22(2), 140-152.</p>
						<p>van Schaik, p. & Ling, J. (2009). The role of context in perceptions of the aesthetics of web pages over time. International Journal of Human-Computer Studies 67(1) 79-89.</p>
						<p>Weischenk, S.M. (2011). 100 things every designer needs to know about people. Berkeley, CA: New Riders. 13-14.</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>We See in Gestalts</strong></p>
						<p>Wolfe, J. M., Kluender, K., R.; Levi, D, M., Bartoshuk, L, M., Herz, R. S., Klatzky, R, L., Lederman, S. J. (2008). Gestalt Grouping Principles <em>Sensation and Perception</em> (2nd ed.). Sunderland, MA: Sinauer Associates. </p>
						<p>Johnson, J (2010). <em>Simple guide to understanding user interface design rules: Designing with the mind in mind.</em> Burlington, MA: Morgan Kaufman.</p>
						<p>Rubin, E. (1921) Visuell Wahrgenommene Figuren : <em>Studien in psychologischer Analyse</em>. Kobenhaven: Gyldendalske boghandel.</p>

						<p class="grey"><strong>Images</strong></p>
						<p><strong>Figure 7.2</strong> <em>Gestalt_closure</em> [SVG file]. (2008). Retrieved January 28, 2014 from: http://en.wikipedia.org/wiki/File:Gestalt_closure.svg</p>
						<p><strong>Figure 7.8</strong> Ruben, E. (psychologist). (1921). <em>Faces-Vase</em> [SVG file], Retrieved January 28,2014 from: http://en.wikipedia.org/wiki/File:Cup_or_faces_paradox.svg</p>

						<p><strong>Gallery 7.2</strong> Few, Stephen (2013): Data Visualization for Human Perception. In: Soegaard, Mads and Dam, Rikke Friis (eds.). <em>he Encyclopedia of Human-Computer Interaction, 2nd Ed</em>. Aarhus, Denmark: The Interaction Design Foundation. Available online at http://www.interaction-design.org/encyclopedia/data_visualization_for_human_perception.html</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>I can’t see it but I use it</strong></p>
						<p>Larson, A., &amp; Loschky, l. (2009). The contributions of central versus peripheral vision to scene gist recognitions. <em>Journal of Vision</em>, 9 (10:6), 1-16.</p>
						<p>Johnson, J (2010). <em>Simple guide to understanding user interface design rules: Designing with the mind in mind.</em> Burlington, MA: Morgan Kaufman.</p>
						<p>Ware, C. (2005). Visual queries: The foundation of visual thinking. <em>In Knowledge and information visualization</em> (pp. 27-35). Springer Berlin Heidelberg.</p>
						<p>Weischenk, S.M. (2011). <em>100 things every designer needs to know about people</em>. Berkeley, CA: New Riders.</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Pre-attentive Attributes</strong></p>
						<p>Atienza, M., Cantero, J. L., &amp; Escera, C. (2001). Auditory information processing during human sleep as revealed by event-related brain potentials. <em>Clinical Neurophysiology</em>, 112(11), 2031-2045.</p>
						<p>Appelbaum, L. G., &amp; Norcia, A. M. (2009). Attentive and pre-attentive aspects of figural processing. <em>Journal of Vision</em>, 9(11), 1-12.</p>
						<p>Egeth, H. E., Yantis, S. (1997). Visual attention: Control, representation, and time course. <em>Annual Review of Psychology</em>, 48, 269-297.</p>
						<p>Few, S. (2009).  <em>Now you see it: Simple visualization techniques for quantitative analysis</em>. Oakland, CA: Analytics Press.</p>
						<p>Kourtzi, Z., &amp; Kanwisher, N. (2000). Cortical regions involved in perceiving object shape. <em>Journal of Neuroscience</em>, 20, 3310-3318.</p>
						<p>Krummenacher, J., Grubert, A., &amp; Müller, H. J. (2010). Inter-trial and redundant-signals effects in visual search and discrimination tasks: Separable pre-attentive and post-selective effects. <em>Vision Research</em>, 50(14), 1382-1395.</p>
						<p>Van der Heijden, A. H. C. (1996). Perception for selection, selection for action, and action for perception. <em>Visual Cognition</em>, 3(4), 357-361.
						<p class="grey"><strong>Images</strong></p>
						<p><strong>Figure 7.10 </strong>Few, S. (2004). Data Presentation: Tapping the power of visual perception. <em>Information Week</em>. Retrieved from: http//www.informationweek.com/software/information-management/data-presentation-tapping-the-power-of-visual-perception/d/d-id/1026932?</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>The Two Ways People Think</strong></p>
						<p>Evans, J., &amp; Frankish, K. (Eds.) (2009). <em>In two minds: Dual processes and beyond</em>. New York, NY: Oxford University Press.</p>
						<p>Evans, J. (2008). Dual-processing accounts of reasoning, judgment, and social cognition. <em>Annual Review of Psychology</em> 59: 255-78.</p>
						<p>Kahneman, D. (2011). <em>Thinking, fast and slow</em>. New York, NY: Farrar, Straus and Giroux.</p>
						<p>Stanovich, K.E. West, R.F. (2000). Individual Differences in Reasoning: Implications for the Rationality Debate. <em>Behavioral and Brain Sciences</em> 23, 655-65.</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Working Memory</strong></p>
						<p>Cowan, Nelson (2008). What are the differences between long-term, short-term, and working memory? <em>Progressive Brain Research</em>. 169 (169): 323–338.</p>
						<p>Cowan, Nelson (2001). "The magical number 4 in short-term memory: A reconsideration of mental storage capacity". <em>Behavioral and Brain Sciences</em> 24: 87–185.</p>
						<p>Engle, R. W., Tuholski, S. W., Laughlin, J. E., Conway, A. R. (September 1999). "Working memory, short-term memory, and general fluid intelligence: a latent-variable approach". <em>Journal of Experimental Psychology: General</em> 128(3): 309–31.</p>
						<p>Revlin, Russell (20013). <em>Human cognition: Theory and practice</em>. New York, NY: Worth Publishers.</p>
						<p>Towse, J. N., Hitch, G. J., Hutton, U. (April 2000). "On the interpretation of working memory span in adults". <em>Memory &amp; Cognition</em> 28 (3): 341–8</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Cognitive Load</strong></p>
						<p>DeLeeuw, K.E., &amp; Mayer, R.E. (2008). "A comparison of three measures of cognitive load: Evidence for separable measures of intrinsic, extraneous, and germane load". <em>Journal of Educational Psychology</em> 100 (1): 223–234.</p>
						<p>Paas, F., Renkel, A., &amp; Sweller, J. (2004). Cognitive load theory: Instructional implications of the interaction between information structures and cognitive architecture. <em>Instructional Science</em> 32: 1–8.</p>
						<p>Paas, F., Tuovinen, J.E., Tabbers, H.K., &amp; Van Gerven, P.W.M. (2003). "Cognitive load measurement as a means to advance cognitive load theory". <em>Educational Psychologist</em> 38 (1): 63–71.</p>
						<p>Plass, J.L., Moreno, R., &amp; Brünken, R., ed. (2010). <em>Cognitive Load Theory</em>. New York: Cambridge University Press.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Everybody Likes a Chunk</p>
						<p>Keller, J. M. (1987). Development and use of the ARCS model of instructional design. Journal of instructional development, 10(3), 2-10.</p>
						<p>Cowan, Nelson (2001). "The magical number 4 in short-term memory: A reconsideration of mental storage capacity". Behavioral and Brain Sciences, 24: 87–185.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Goal Execute and Evaluate</p>
						<p>Card, S. K., Moran, T. P., & Newell, A. (Eds.). (1986). The psychology of human-computer interaction. CRC Press.</p>
						<p>Norman, D. A. (1988). The Design of Everyday Things. New York, Doubleday/Currency Ed.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Go with the Flow</p>
						<p>Csikszentmihalyi, M. (1997). Flow and the Psychology of Discovery and Invention. Harper Perennial, New York.</p>
						<p>Csikszentmihlyi, M. (2008). Flow: The Psychology of Optimal Experience. New York: Harper and Row.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Information Chaos</p>
						<p>Beasley, J. W., Wetterneck, T. B., Temte, J., Lapin, J. A., Smith, P., Rivera-Rodriguez, A. J., & Karsh, B. T. (2011). Information chaos in primary care: implications for physician performance and patient safety. The Journal of the American Board of Family Medicine, 24(6), 745-751.</p>
						<p>Misra, S., & Stokols, D. (2012). Psychological and health outcomes of perceived information overload. Environment and behavior, 44(6), 737-759.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Situational Awareness</p>
						<p>Banbury, S., & Tremblay, S. (Eds.). (2004). A cognitive approach to situation awareness: theory and application. Ashgate Publishing, Ltd..</p>
						<p>Bolstad, C. A., Cuevas, H., Gonzalez, C., & Schneider, M. (2005, May). Modeling shared situation awareness. In Proceedings of the 14th Conference on Behavior Representation in Modeling and Simulation (BRIMS), Los Angles, CA.</p>
						<p>Endsley, M. R. (1995). Toward a theory of situation awareness in dynamic systems. Human Factors: The Journal of the Human Factors and Ergonomics Society, 37(1), 32-64.</p>
						<p>Iyengar, S. (2010). The art of choosing. Hachette Digital, Inc..</p>
						<p>Iyengar, S. S., & Lepper, M. R. (2000). When choice is demotivating: Can one desire too much of a good thing?. Journal of personality and social psychology,79(6), 995.</p>
					</div>
					<div class="section_cite">
						<p class="grey">How We Make Decisions</p>
						<p>Kahneman, D. (2011). Thinking, fast and slow. New York, NY: Farrar, Straus and Giroux.</p>
						<p>Weischenk, S.M. (2011). 100 things every designer needs to know about people. Berkeley, CA: New Riders.</p>
					</div>
				</div>
			</div>
		</section>
	</section>
	

</div><!--end wrapper-->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
			$( '#cbp-fwslider-4' ).cbpFWSlider();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				
				helpers : {
					title : {
						type : 'outside'
					}
				},
				
				afterLoad : function() {
					if (this.group.length > 1){
						this.title = (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				}
			});
		});
	</script>
</body>
</html>