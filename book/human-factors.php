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
					<div class="subheader"><p>How humans see, read, think, and decide affects how they act. Keeping that in mind, we can cater to their inner processors for optimal performance on a human level.</p></div>
				</div>
			</div>
		</header>
		<section id="how-people-perceive" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>How People Perceive</h3>
					</div>
					<h5 id="expectations">Our Eyes have Expectations</h5>
					<p class="spacetop"><strong>Our eyes are drawn to familiar patterns, we perceive what we know and expect, sometimes in place of what is actually there. </strong></p>
					<p>What your eyes see is not what your brain interprets. Our brains create shortcuts to help us make sense of the estimated 40 million inputs a second it is trying to make sense of and prioritize. It uses past experiences and associations and rule of thumb to make guesses about what we are seeing. One easy real world example of this is the double take. Everyone has seen something at a glance and thought it was one thing and then focused on it and realized it was actually something else.</p>
					<p>Due to this natural mental wiring, users come to computers with expectations based on what they have seen before. We all have a mental model of what we expect to see and where we expect to see it. When we scan a screen we look for digestible chunks, familiar things like navigation bars, buttons and logos. We also tend to look at the center of the screen rather than the edges because the edges tend to have things less important to the task at hand like logos and tools, not the core of what we are doing or trying to find.</p>
					<div class="example" class="fig-7-1">
						<div class="ex-title">
							<span class="ex-type">Figure 7.1</span>
							<span class="ex-caption">Example 1: Here is a layout for adding allergies without taking into account that we expect an order or flow.</span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png" class="fancybox">
						<img src="./assets/images/examples/allergy-list/AfibAlgorithm.png" class="scale-with-grid" alt="" /></a>
					</div>
					<div class="example" class="fig-7-2">
						<div class="ex-title">
							<span class="ex-type">Figure 7.2</span>
							<span class="ex-caption">Example 2: This layout is for the same task of adding an allergy but is laid out in a way we have all seen before, with tasks listed in order from top to bottom.</span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="fancybox">
						<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" alt="" /></a>
					</div>
					<p>Other things we expect and look for are affordances. Affordances are design features that tell people that they can take action with the object. This is why many options and choices are shaded to look like buttons. The appearance of an area that looks like a button creates in the user the idea that they can click their mouse on it and something will happen.  Blue or underlined hyperlinks are another good example of an affordance, though this one is going away in some cases where developers have chosen to go with an expectation rather than an affordance. </p>
					<div class="example" class="fig-7-3">
						<div class="ex-title">
							<span class="ex-type">Figure 7.3</span>
							<span class="ex-caption">Example 3: Below we can see a few common affordances. The first is making a choice look like a button so the user knows that if they select it will do something. The second is a small image, this one is a calendar letting the user know if selected a full calendar will open.</span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="fancybox">
						<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" alt="" /></a>
					</div>
					<div class="example" id="gal-7-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.1</span>
							<span class="ex-caption">Example 4</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/human-factors/UM_EHR_0010_collapse-affordance.png" class="fancybox" data-fancybox-group="gallery-1" >
									<img src="./assets/images/examples/human-factors/UM_EHR_0010_collapse-affordance.png" class="scale-with-grid" /></a>
									<div class="caption">Here the we can see the same affordance, an arrow, used as a disclosure widget in two different ways. In the first image the arrow lets the user know that they can expand or collapse an entry for more information.</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/human-factors/UM_EHR_0011_sort-affordance.png" class="fancybox" data-fancybox-group="gallery-1">
									<img src="./assets/images/examples/human-factors/UM_EHR_0011_sort-affordance.png" class="scale-with-grid" /></a>
									<div class="caption">Here in the second image the arrow affordance allows access to choices to sort the list differently. The key to affordances is they inform the user at a glance that there is a functionality to a particular part of the graphical user interface.</div>
								</div></li>
							</ul>
						</div>
					</div>
					<h5 id="gestalts">We See in Gestalts</h5>
					<p class="spacetop"><strong>Our visual system is wired to perceive whole shapes or gestalts rather than disconnected forms.</strong></p>
					<p>Gestalt is a German word for form or shape. In English, it refers to wholeness. When you walk into a room, you get an overall sense of what’s going on and the emotional tone of the room. When you view a web page for the first time, you also get a similar overall sense of wholeness about the site: whether it’s appealing, whether it looks modern or out of date, and whether it looks clean or cluttered. Here are some of the elements that add to the overall Gestalt of a design.</p>
					<h5 id="proximity">Proximity</h5>
					<p>One way our minds like to see in gestalts is via proximity. Distance between objects determines how we perceive them. If things are close together we group them. Not only do we group them, but when it comes to designs, we tend to think they are grouped for a reason.</p>
					<div class="example" id="gal-7-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.2</span>
							<span class="ex-caption">Example 1</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png"><img src="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png" class="scale-with-grid" /></a>
									<div class="caption">Our eyes notice this</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png" class="scale-with-grid" /></a>
									<div class="caption">...and our brain groups the objects automatically</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p><strong>Example 2:</strong> Here in this medication reconciliation view, the medications are broken into groups, and these groups are placed in the same column. With a glance one can tell there are different groups (columns) without focusing to read what those groups are because each medication in each list is close to its similar category.</p>
					<div class="example" id="fig-7-4">
						<div class="ex-title">
							<span class="ex-type">Figure 7.4</span>
							<span class="ex-caption">Ambulatory Medication Reconciliation workflow</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png"><img src="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png" class="scale-with-grid" /></a>
					</div>
			
					<h5>Closure</h5>
					<p>Another way we perceive in gestalts is through <strong>closure</strong>. Our brain will fill in visual blanks and make short cuts. This helps us make sense of the world quickly, but we need to keep it in mind when designing. If used well and with purpose, this closure can help the user see the gestalt we want them to see. Sometimes unintended gestalts can be created and these gestalts should be avoided. </p>
					<p><strong>Example:</strong> Here is a classic example of how our minds take lines or curves and build objects out of them, even though there is no circle or rectangle, we see a circle and a rectangle.</p>
					<div class="example" id="fig-7-5">
						<div class="ex-title">
							<span class="ex-type">Figure 7.5</span>
							<span class="ex-caption">Closure</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0003_closure.png"><img src="./assets/images/examples/human-factors/UM_EHR_0003_closure.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>Similarity</h5>
					<p><strong>Similarity</strong> is another way our brains perceive groups. Visual elements that look alike are perceived as belonging to a group. You can group things by size, shape, or color – and color is particularly strong. In your designs, by grouping visual elements this way, you can make the interface simpler and easier to use.</p>
					<p><strong>Example 1</strong>: We perceive the red dots in this image as belonging to a group.</p>
					<div class="example" id="fig-7-6">
						<div class="ex-title">
							<span class="ex-type">Figure 7.6</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png"><img src="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png" class="scale-with-grid" /></a>
					</div>
					<p><strong>Example 2</strong>: Proximity has already distinguished the proximal groups as categories but now the use of color creates a new group. There are now green medications for approved choices, normal ones that have yet to be selected or deselected, and faded medications for the medications deselected. That is <strong>similarity</strong> grouping in action.</p>
					<div class="example" id="fig-7-7">
						<div class="ex-title">
							<span class="ex-type">Figure 7.7</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png"><img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>Similarity</h5>
					<p>Our minds also like to reduce complex things by giving things <strong>symmetry</strong>. We tend to take complex images and simplify them around a perceived center.</p>
					<p><strong>Example 1</strong>:  Here we see who our minds like to see two symmetrical diamonds rather than see other shapes.</p>
					<div class="example" id="fig-7-8">
						<div class="ex-title">
							<span class="ex-type">Figure 7.8</span>
							<span class="ex-caption">Symmetry: The human visual system tries to resolve complex scenes into combinations of simple, symmetrical shapes.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png"><img src="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png" class="scale-with-grid" /></a>
					</div>
					<p><strong>Example 2</strong>:  Take a look at the example below. At first glance we see two columns rather than a series of individual entries, which are creating the illusions of columns. </p>
					<div class="example" id="fig-7-9">
						<div class="ex-title">
							<span class="ex-type">Figure 7.9</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png"><img src="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>Figure / ground</h5>
					<p><strong>Figure / ground</strong> is the gestalt principle that explains how we like to perceive things in two main planes, the figure, which becomes the foreground and everything else, which becomes the background. Whatever is the focus of our attention becomes the figure and everything else shifts into the background.</p>
					<p><strong>Example 1</strong>: In the first example, the figure (ampersand) is seen as separate from the ground or background (the blue background). This is the kind of design to emulate. The figure clearly seems more important than the ground.</p>
					<div class="example" id="fig-7-10">
						<div class="ex-title">
							<span class="ex-type">Figure 7.10</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png"><img src="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png" class="scale-with-grid" /></a>
					</div>
					<p><strong>Example 2</strong>: Here is an example of an ambiguous figure/ground relationship. This example is the classic from gestalt psychologist Edgar Rubin where we can see both faces and a vase in the same image depending on where we put our attention.</p>
					<div class="example" id="fig-7-11">
						<div class="ex-title">
							<span class="ex-type">Figure 7.11</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png"><img src="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>Continuity</h5>
					<p>In the real world we combine all of these principles at the same time which affects how we perceive. </p>
					<p><strong>Continuity</strong> is the term for groupings of objects created by their alignment. Our brains expect to see a contour as a continuous object.</p>
					<div class="example" id="gal-7-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.3</span>
							<span class="ex-caption">Example 1</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png"><img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png" class="scale-with-grid" /></a>
									<div class="caption">Though parts of this curve is blocked by a rectangle boxing it in</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png" class="scale-with-grid" /></a>
									<div class="caption">...humans perceive the curve as this</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png" class="scale-with-grid" /></a>
									<div class="caption">...and not this</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p><strong>Example 2</strong>: The following example uses several of the gestalt principles, symmetry in space allocation for the lists, proximity for the medication lists source and category groupings, and similarity for selected and deselected medications. Figure and ground is also in play, note how the dark text seems closer to us and the faded text further away. </p>
					<div class="example" id="fig-7-12">
						<div class="ex-title">
							<span class="ex-type">Figure 7.12</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png"><img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<hr />
					
					<h5>I Can't See it but I Use it</h5>
					<p><strong>We use our peripheral vision to get a big picture of what we are seeing and use it to help decide what to focus on.</strong></p>
					<p>Our visual system (the eyes and the brain systems that work with them) do an amazing job of seeking and providing visual information mostly without our conscious awareness. We are barely aware that only the very central part of our vision provides sharp-focused detail rich with color information, and that the periphery of our vision (outside of the central “peephole”) is fuzzy and bereft of color. However, that peripheral part of the vision is able to detect features such as motion, edge, and contrast that guide our brain in it’s “visual query” of the view before us. </p>
					<p>Our brain makes rapid eye movement to sample the environment, seeking out details determined by what we are trying to accomplish. We see what we need to see. If we are looking for a friend, we see faces in the crowd. If we are finding our way through the crowd, we see the openings.</p>
					<p>Because the peripheral part of our vision detects motion, we find those animated ads so annoying. Although we may wish to ignore them, we are designed to notice them. Our eyes are drawn to things that stand out or draw contrast to the norm.  Our brains recognize threats in an environment, and it’s our peripheral vision that is on the lookout for those big differences.</p>
					<p><strong>Example 1</strong>: Our eyes do a quick visual query seeking out visual elements and creating meaningful details that help us accomplish our basic goals. What we notice in the scene below will be different depending on whether we are driving, deciding whether we need to mow the lawn, or assessing whether the weather will be suitable for a picnic 2 hours from now.</p>
					<p><strong>Example 2</strong>: When looking at the display below, we think we instantly see this, but we don’t. But what we really see at any instant is more like the next image. We only have a small area in focus at any moment. Our visual brain sees red text (the preattentive attribute) and is drawn to it more than the rest of the scene. Then the eye automatically scans to the next point of interest.</p>
					<div class="example" id="gal-7-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.4</span>
							<span class="ex-caption">Example 2</span>
						</div>
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption">We think we see this</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption">...but we don't. We see this.</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>A good thing to keep in mind is that a peripheral glance is what tells people where they are and what to expect. It also helps us decide what to focus on. Only our focused vision communicates what the display is really about and we can only really 'see' what we are focused on.</p>
					<p><strong>Design tip:</strong> It is a good idea to provide feedback or error messages near where people are already focusing. While we use our peripheral vision to orient ourselves and look for things to draw our attention, we also try to ignore it when we are already focused on something else. </p>
					
					<hr/>
					
					<h5 id="preattentive-attributes">Preattentive Attributes</h5>
					<p class="spacetop"><strong>The little things people notice visually and understand quickly, so quickly that we have only noticed it at an unconscious level.</strong></p>
					<p>We notice some visual features more quickly than others. Examples include color, size, shape, orientation, and motion. We call these things that stand out to us <strong>preattentive attributes</strong>. It is our fast thinking mind that is making sense of everything in our visual field at an unconscious level that make preattentive attributes work. This fast thinking subconscious part of our minds either tells us what to focus on or gives us options of what to focus on. Things that are different or stand out from the rest of the environment (examples below) are all in play with preattentive attributes. </p>
					<p><strong>Example</strong>: Here are visual preattentive attributes</p>
					<div class="example" id="fig-7-13">
						<div class="ex-title">
							<span class="ex-type">Figure 7.13</span>
							<span class="ex-caption">Preattentive attributes of visual perception most applicable to data presentation</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png"><img src="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="how-people-think" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>How People Think</h3>
					</div>
					<h5>The Two Ways People Think</h5>
					<p><strong>Everybody has two modes of thinking, a fast one and one that takes focus. When you lower complexity you help people use the fast one and save energy for the focused one.</strong></p>
					<p>Have you ever driven yourself home when you really want to drive yourself to the market but you were so busy thinking about other matters you only caught yourself as you pulled into your street or driveway? This is a good example of our two systems of thinking. It’s no surprise that the human brain is an amazing thing with many complex processes. We can characterize these many processes as two systems or different modes of thinking; system 1, fast thinking and system 2, focused thinking. Daniel Kahneman wrote a great book about these systems and we are using his ideas here.</p>
					<p>The fast thinking system operates automatically and quickly, takes little to no effort, and doesn’t even have a sense of voluntary control. This is the system that lets us...</p>
						<ul class="disc">
							<li>see that something is larger than something else</li>
							<li>answer simple computations like 2+2 = 4</li>
							<li>read words on a billboard</li>
							<li>understand simple sentences</li>
							<li>make rapid and simple associations like stereotypes</li>
							<li>take advantage of preattentive attributes</li>
						</ul>
					<p>The focused thinking system switches our attention to mental activities that take more mental effort. It is effort thinking that we often think of as our experience of agency, choice and concentration. This is the system that lets us...</p>
						<ul class="disc">
							<li>focus on listening to one voice in a noisy room</li>
							<li>recall information like addresses and phone numbers</li>
							<li>check the validity of a complex argument</li>
							<li>look for one particular piece of information in a long article</li>
						</ul>
					<p>When creating an application it's helpful to ask yourself, “Are there opportunities to convert slow thinking tasks into fast thinking mode?” Make the application perform the complex calculations, do the rank-ordering, and concisely present the key information so that people can have the energy to do the focused thinking that only the human can do.</p>
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