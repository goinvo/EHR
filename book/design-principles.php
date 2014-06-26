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
					<h2>8</h2>
					<h2>Design Principles</h2>
					<div class="subheader"><p>Design is a response to specific problem. You are given a problem and then you let the problem itself tell you what your solution is.</p><p class="quote_author">Chipp Kidd</p></div>
				</div>
			</div>
		</header>
		<section id="mental-model" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.1 Mental Models</h3>
					</div>
					<p><strong>If you don’t know where you are, you can’t get where you want to go.</strong></p>
					<p>Good software design starts with a deep understanding of what users need the product to do. In other words they need to understand the products utility. Understanding a product's ultimate utility sounds simple, but what is truely helpful to a designer is understanding a product's utility and the users mental model of what that utility should be. A mental model is an explanation of someone's thought process about how something works in the real world, including where it fits into their workflow.</p>
					<p>People's understanding of the world is predicated on their worldview: a complicated, integrated and contextually-dependent construct, an estuary where a person's unique experience of the world meets the social, cultural and environmental factors that condition their existence. A person's worldview is not just a lens that colors their perceptions, it is the means by which that individual perceives and understands the world. A person's worldview determines how that person will experience your product. They won't just be looking at the system in isolation, they'll bring with them a mental model of what this system is. The model will have developed out of their past experiences and their perspective, and it will define how they think about and use your product.</p>
					<p>Software products must thus not only function well, they must successfully engage with users' mental models of the types of products they're supposed to be. Users will find a product that meets their expectations in this regard usable and desirable. Users' mental models are the fundamental starting point of the product design roadmap, and they'll serve as the baseline for developers' design decisions throughout the product's lifecycle.</p>
					<p>Key ideas:</p>
					<ul class="disc">
						<li>Establishing the proper mental model is fundamental to driving the product design process.</li>
						<li>Mental models are typically expressed in the form of metaphor. The desktop metaphor used by modern operating systems represents a very specific and intentional mental model.</li>
						<li>Simplicity is the hallmark of a strong mental model. Users should intuitively understand the model they are presented</li>
					</ul>
				</div>
			</div>
		</section><!--end section mental-model-->
		
		<section id="removing-complexity" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>8.2 Removing Complexity</h3>
					</div>
					<p><strong>Complexity increases at an exponential rate as a factor of the number of items presented.</strong></p>
					<p>Extra visual noise, repetitive information and symbols, and having too many controls for the same action (possibly all of which are visible at the same time) can all cause redundancy. Redundancy can be good at times, like having an emergency break in a car, but it literally means the state of being no longer needed or useful.  Redundancy in an interface is often unhelpful, add valueless complexity, and can interfere with an interface’s utility on visual, informational and behavioral levels.</p>
					<p>Imagine attempting to drive a car with three dashboards and four steering wheels down a highway with road signs that have been duplicated on both sides of the road. The engineers involved may have thought they were giving the driver extra resources, but it would be an understatement to say that their attempts to facilitate the user have ultimately made things harder on him.</p>
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