<?php $pageTitle='Design Principles'; ?>
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
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="design-principles">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-8" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>9</h2>
					<h2>Health Information Technology and Usability</h2>
					<div class="subheader"><p>Work smarter, not harder.</p></div>
				</div>
			</div>
		</header>
		<section id="usability" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>9.1 Usability</h3>
					</div>
					<p>In layman’s terms usability refers to how easy or intuitive an interface is to use. Successful designers go beyond this vague notion of “user friendliness” and have a thorough understanding of their user’s community and the tasks they need to accomplish. They also use methodologies validated during decades of research on human computer interaction.</p>
					<p>The International Standards for Human Computer Interaction (HCI) and usability (i.e., ISO 9241-11) define usability as the “effectiveness, efficiency, and satisfaction of a user performance within a specific context, such as physical and social environment.” But usability alone is not enough, an interface also must have good utilit. Good utility means the interface provides the features needed to complete users’ tasks. Successful applications combine good utility and good usability.</p>
					<p>Health Information Technology (Health IT) usability issues are similar to the information technology usability issues of other life-critical systems such as air traffic control or nuclear power plants.  Users in all of these fields are experts in their domain, but they need rapid, error free information technology performance to do their jobs effectively.</p>
					<p>Usability problem spots with an interface design might be indicated by workarounds, redundancies, or slow task completion, all of which could possibly lead to general user burnout. Health IT applications with usability problems are more than just annoying to use, they can cause serious patient harm (e.g. wrong medication or dangerous dosage, wrong treatment, missed results, wrong patient selection leading to a patient not receiving treatment and another receiving unintended treatment, etc.).</p>
					<p>There is an art as well as a science to good interface design. Donald Norman’s seminal book: <em>The Design of Everyday Things</em> (i.e. initially named <em>The Psychology of Everyday Things</em>), highlighted the importance of balancing the imperatives of efficiency and aesthetics in the design process.</p>
					<p>The 5 measures of usability are as follows:</p>
					<ul class="disc">
						<li>Learnability: How easy is it for first time users to accomplish basic tasks using this system? How easily can users discover and access the system's more advanced features?</li>
						<li>Efficiency: How quickly can users perform tasks using this system?</li>
						<li>Memorability: If physicians stop using the system for some time, how easily can they re-establish their former proficiency with the system?</li>
						<li>Errors: How many errors do users make while interacting with the system? How severe are these errors, and how easily can users correct them?</li>
						<li>Satisfaction: How pleasant do users find their experience of interacting with the system?</li>
					</ul>
					<p>The human factors chapter covers the large body of evidence from many different sources that illustrate the importance of usability. If an interface is difficult to use, people will either not use it all or be less productive when forced to.</p>
				</div>
			</div>
		</section><!--end section usability-->
		
		<section id="methodologies" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>9.2 Methodologies</h3>
					</div>
					<p>Usability is an increasingly important consideration in organizational and product planning. The good news is that there are many methodological tools that have been developed by researchers to aid designing and evaluating the usability of computer systems in general. More recently researchers have begun developing specific guidance for EHRs in particular.</p>
					<p>Development methodologies such as contextual design help developers by offering validated processes with predictable schedules. Ethnographic, or user group,  observation can guide task analysis and complement user participatory design processes. Writing scenarios help developer teams to build a common understanding of design goals. These scenarios can also help plan usability tests. Logs of current Health IT system usage can provide valuable data about task frequencies and sequences that lead to design refinements. These methods will provide the developers with valuable information about how the users go about their tasks and how frequently they perform various tasks. Armed with this information, the developers will be able to refine their designs.</p>
					<p>Specific guidance for EHR design and evaluation is becoming more and more available. For example there is now a <a href="http://www.nist.gov/manuscript-publication-search.cfm?pub_id=909701" class="link" target="blank" >NIST publication</a> that summarizes the rationale for an Electronic Health Record (EHR) Usability Protocol (EUP) and outlines a three-step process. These three steps consist of (1) EHR Application Analysis, (2) EHR User Interface Expert Review, and (3) EHR User Interface Validation Testing. The <a href="https://turf.shis.uth.tmc.edu/turfweb/" target="blank" class="link">TURF Usability Toolkit</a> developed at the University of Texas can help create, organize, and analyze usability of EHRs. Other Health IT and general usability and design resources are provided at the end of the chapter.</p>
					<p>Key ideas:</p>
						<ul class="disc">
							<li>Visual: Remove all extraneous noise and ornamentation. Achieve visual simplicity before adding flourishes for decoration or emphasis.</li>
							<li>Informational: Watch out for repetitious, proximate words and symbols in your design. Consolidate these where possible.</li>
							<li>Behavioral: Pick a primary method for performing an action and feature it prominently. Controls and interactions that duplicate the behavior can be hidden one level deeper.</li>
						</ul>
				</div>
			</div>
		</section><!--end section removing-complexity-->
		
		<!--<section id="direct-manipulation" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Direct Manipulation</h3>
					</div>
					<p><strong>Second hand information is never as reliable as first hand experience.</strong></p>
					<p>Products that suffer from complex interfaces often will find at the root of the problem a large amount of extraneous redundancy. This redundancy cuts across the board and is not limited in scope. It generally interferes at all levels of the interface: the visual, informational and behavioral aspects of the product. It’s extra visual line noise, repetitive informational symbols and too many controls ways to perform the same action all visible at the same time. Imagine if you will attempting to drive a car with three dashboards, four steering wheels, and highway signs that were consistently duplicated on both sides of the road.</p>
					<p>A significant amount of complexity can be removed from the product through the simple task of flattening. So much that often times true innovative design cannot be accomplished until a product’s interface has been sufficiently flattened.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>Visual: Remove all extraneous line noise and ornamentation. First achieve visual simplicity before decorating with flourishes.</li>
							<li>Information: Always check the screen for words and symbols that have been repeated in proximity of each other. Then consolidate them.</li>
							<li>Behavioral: Pick a primary method for performing an action and feature it prominently. Controls and interactions that duplicate the behavior be hidden one level deeper.</li>
						</ul>
				</div>
			</div>
		</section>--><!--end section direct-manipulation-->
		
		<section id="terminology" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.3 Terminology</h3>
					</div>
					<p><strong>Always ask, 'What is this?' about your chosen terminology until you are sure of the final answer.</strong></p>
					<p>Marketing is meant to sell, and in order to do so it generates saleable names. These names and this process aren't the best means of denoting terminology inside a functional interface. As much as marketing managers want to control the design of a product, their skill set, as it's currently understood, doesn't serve the product or the user well in this capacity.</p>
					<p>Generally speaking, terminology should be as uncomplicated and natural as common language used in everyday conversation.</p>
					<p>Don't try to be clever when it comes to terminology. There's no need to construct complex neologisms that would prompt the use of a dictionary. Just call things what they are. It's really that simple.</p>
					<p>Just call things what they are. It’s really that simple.</p>
					<p>Key ideas:</p>
						<ul class="disc">
							<li>The interface is no place for marketing labels. Call things what they are.</li>
							<li>Use industry standard language when possible. For example, designers know that “leading” is the measurement between two baselines in body copy. To refer to “leading” as “line height” will simply confuse the target audience.</li>
							<li>If you use a term in the interface that you can't easily define in one sentence or less, chances are you've misused the term.</li>
						</ul>
				</div>
			</div>
		</section><!--end section terminology-->
		
		<section id="emphasis" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.4 Emphasis</h3>
					</div>
					<p><strong>When everything is important, nothing is important.</strong></p>
					<p>If the design treats every feature, control and piece of data in the software application as vitally important, the end product won't be very useful. Contrast and emphasis allow users to make sense of what would otherwise be a swamp of features.</p>
					<p>Designers and developers must regularly ask themselves (and the users) how important given features are in relation to one another.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>Screens in an EHR should have a single focus that acts as a visual anchor. This point doesn't have to be semantically important to the user, it just has to make the layout comprehensible.</li>
							<li>Create boundaries and limit the scope of the application to the user task at hand. Limit the number of emphasized options or controls a given screen displays. Three is a good baseline to shoot for, while more than five is too many.</li>
							<li>Establish consistent rules about what makes controls or features high priority and then stick to those rules. For example, to determine any control or feature as high priority, it must be used by 75% of the user base at least 25% of the time. Any other feature would not be considered a high priority and should be dropped or placed in a second tier menu.</li>
						</ul>
				</div>
			</div>
		</section><!--end section emphasis-->
		
		<section id="typography" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.5 Typography</h3>
					</div>
					<p><strong>When in doubt, follow the rule of two.</strong></p>
					<p>One of the easiest problems to fix in almost any design is the poor application of basic typographical rules.</p>
					<p>Words are the functional equivalent of icons. When you read a body of text, you are not parsing individual letters, like “d - e - s - i - g - n.” You are actually seeing a concise symbol that is parsed as a single object, “design.”</p>
					<p>An inconsistent jumble of typefaces distracts users. It's the typographical equivalent of wearing several clashing fabrics. Limit yourself to no more that two types and six to eight fonts throughout the application. </p>
					<p>“Type” is defined as a font face like Helvetica or Georgia. “Font” is defined as the combination of the font face, color, size, and variant (italic, bold, etc). For example 11pt Helvetica colored as #333 and 11pt Helvetica Italic colored as #333 are considered two different fonts, just as they would be considered different fonts if they were different shades of blue, or if one was 11pt and the other was 18pt.</p>
					<p>Once your type is under-control, you can choose the optimal spots to use fonts to add emphasis.</p>
					<p>Key ideas:</p>
						<ul class="disc">
							<li>As a starting point, use no more than two types in the design of the product.</li>
							<li>Before deviating from the ‘no more than eight fonts’ rule, first force yourself to solve the design problem within the rule's constraints. </li>
						</ul>
				</div>
			</div>
		</section><!--end section typography-->
		
		<section id="color" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.6 Color</h3>
					</div>
					<p><strong>When used effectively, color informs, and even calms the user.</strong></p>
					<p>Where type communicates, color provides context. The use of color should be constrained like the use of type. Just like its typographical counterpart, an application's color palette must be considered judiciously.</p>
					<p>Developers must carefully avoid making extraneous or random additions. Color, after all, has a direct, visceral effect on the user that type lacks.</p>
					<p>Just like it’s typographical counterpart, a color palette must be applied judiciously, carefully avoiding extraneous or random additions.</p>
					<p>Key ideas:</p>
						<ul class="disc">
							<li>Define the product’s color palette. Pick a color system that also serves the needs of the product at a functional level, rather than that solely serves a marketing or branding agenda.</li>
							<li>Picking a base color is a good place to start. From there pick up to three complementary colors and one highlight color. It is also a good idea to define your levels of black and white.</li>
							<li>Before deviating from your defined color palette, force yourself to solve the design problem within your defined constraints.</li>
						</ul>
				</div>
			</div>
		</section>
				
		<section id="dark-side-of-color" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.6The Dark Side of Seeing Color </h3>
					</div>
					<p><strong>Color has it uses, but if one is not careful, color can become useless.</strong></p>
					<p>Color is useful beyond just having things look pleasing to the eye, it can create distinctions and be used to draw attention to things we want people to look at. However color has it limits as a communication tool and it’s important to keep these limitations in mind if you want to use color effectively.</p>
					<p>The first thing to keep in mind is that 9% of men and 0.5% percent of women are color blind. Color blind people can see color, but they can’t see the differences between some colors the way most people can. There are different types of color blindness but the most common one makes it hard to see the difference between reds, yellows, and greens.</p>
					<p>Another tricky element to color is that different cultures can have different associations for the same color. So while red can mean bad, danger, or stop to many Western users, in some Asian cultures red is associated with happiness or good fortune. Designers need to take into account the cultural context of likely users, and to use color in a way that doesn't unduly inconvenience color-blind users.</p>
					<p>Some colors don’t play well together. In combinations clashing colors can make things hard to look at and difficult to read.  For example red and blue or red and green overlapping each other cause this effect but there are many colors that are opponent colors and clash. It would be a good idea to consult a color guide when choosing your colors.</p>
					<p>Converting your design into gray scale can be useful to check if your color differences are strong enough to be noticeable. The color differences that most color blind people have a hard time seeing are discernible to them even in color if the differences are detectable once the design has been converted  grey scale. This also helps make sure your color differences are strong enough for non color blind people to detect.</p>
					<p>Color is useful, but don’t let it stand alone. Use other cues to complement it.</p>
					<p>Key ideas:</p>
						<ul class="disc">
							<li>Avoid subtle color differences. Our eyes have evolved to see strong contrasts. A trick is to convert a project to grayscale, if it’s too hard to see the difference between your colors in grayscale it’s a good bet the colors are not different enough to avoid causing confusion.</li>
							<li>Keep in mind that color displays are not all created equal on the hardware side. The display capacity of the monitor screen, for example, can affect an application's appearance. Video card quality can also have an effect.</li>
							<li>Colors have natural pairs, but watch out for clashing colors and color blindness.</li>
							<li>When used sparingly color can work to draw the eye where you want it to go. When overused, color loses its effect.</li>
						</ul>
				</div>
			</div>
		</section><!--end section color-->
		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fleft" id="prevCh">
							<p class="pagination prev_ch"><a href="./human-factors.php"><span class="prev"></span> Human Factors</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./health-it-usability.php">Health IT Usability<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>

		<section class="citations">
			<div class="container">
				<div class="sixteen columns">
					<hr />
					<div class="disclaimer">
						<p>The designs in this book were created by our team and reviewed by a national panel of clinical and human factors experts, but have not been empirically tested against existing designs.</p>
					</div>
					<hr />
					<p>References</p>
					<div class="section_cite">
						<p class="grey"><strong>Quote</strong></p>
						<p>Crawford, S. (2014, May 27). Chipp Kidd. <em>Inkbot Design</em>. Retrieved from http://inkbotdesign.com/chip-kidd/</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>The Dark Side of Seeing Color</strong></p>
						<p>Johnson, J (2010). <em>Simple Guide to Understanding User Interface Design Rules: Designing with the Mind in Mind</em>. Burlington, MA: Morgan Kaufman.</p>
						<p>Weischenk, S.M. (2011). <em>100 Things Every Designer Needs to Know about People</em>. Berkeley, CA: New Riders.</p>
					</div>
				</div>
			</div>
		</section>

	</section>

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
	
</div><!--end wrapper-->
</body>
</html>