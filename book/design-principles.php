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
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

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
					<div class="subheader"><p></p></div>
				</div>
			</div>
		</header>
		<section id="mental-model" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Mental Model</h3>
					</div>
					<p><strong>If you don’t know where you are, you cannot get where you want to go.</strong></p>
					<p>Software design begins with a deep understanding of the purpose that the product fills for users. While this understanding is important in order to design successful interfaces, it is perhaps more important in framing the product properly in the user’s mind.</p>
					<p>This is called a mental model.</p>
					<p>People’s understanding of the world is based on a very complicated, integrated and contextually-dependent worldview. Even though each person has a unique understanding, clear patterns emerge based on social, cultural and environmental factors. Each product that a person uses or interaction they experience fits into their view and understanding of the world. Indeed, each of these things conforms to a specific mental model in the mind of each person. Based on their past experiences and perspective, that mental model will define how they think and feel about this thing, as well as how they use it.</p>
					<p>It is thus imperative that a software product is intentionally designed to fit a specific mental model with its users. If it is successfully designed within that structure, the product will be increasingly usable and desirable. More, this mental model will also inform the initial and ongoing interface design, serving as a baseline for all of the design decisions that are eventually made. It is key to user understanding and fundamental to the product design road map.</p>
					<p>Key Ideas:</p>
					<ul class="disc">
						<li>Establishing the proper mental model is fundamental to driving the product design process.</li>
						<li>Mental models are typically expressed in the form of metaphor; for example, the desktop metaphor used by modern operating systems represents a very specific - and intentional - mental model.</li>
						<li>Simplicity is the hallmark of a strong mental model: users should intuitively understand the model they are presented</li>
					</ul>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="removing-complexity" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Removing Complexity</h3>
					</div>
					<p><strong>"Complexity increases at an exponential rate as a factor of the number of items presented."</strong></p>
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
		</section><!--end section preattentive-attributes-->
		
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
		</section>--><!--end section preattentive-attributes-->
		
		<section id="terminology" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Terminology</h3>
					</div>
					<p><strong>Always ask, 'What is this?' until you are given the final answer.</strong></p>
					<p>The purpose of marketing is to sell, which makes the method by which marketing determines salable names inappropriate for determining terminology inside of a functional interface. As much as marketing managers want to control the design of a product, their job as defined does not serve the product nor the user well.</p>
					<p>Generally speaking, terminology should be no more complicated than common language in everyday conversation.</p>
					<p>Create terms without any attempt at cleverness, complex word construction or by combining too many words into a single term that would prompt the use of a dictionary.</p>
					<p>Just call things what they are. It’s really that simple.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>Avoid marketing labels in the interface; call things what they are at the mundane object level.</li>
							<li>Always use industry standard language when possible. For example, designers know that “leading” is the measurement between two baselines in body copy. To refer to “leading” as “line height” will simply confuse the target audience.</li>
							<li>If you can’t answer the question, “what is this” in a single sentence with regard to a term in the interface, it is likely you have misused the term.</li>
						</ul>
				</div>
			</div>
		</section><!--end section terminology-->
		
		<section id="emphasis" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Emphasis</h3>
					</div>
					<p><strong>When everything is important, nothing is important.</strong></p>
					<p>If one treats every feature, every control or every piece of data in a software application as the most important thing that must be addressed or promoted, the end result will make the overall product less useful across the board.</p>
					<p>Without contrast, nothing can be ascertained. Without proper emphasis, a product is reduced to a morass of features that require a user to traverse it like a mouse searching desperately for that piece of cheese inside a maze.</p>
					<p>One must constantly question and ask themselves just how important one feature is in comparison to every other feature in the design of any product.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>There should always be a single focus on the screen acting as a visual anchor, even if that point is not the primary concern of the user.</li>
							<li>Create boundaries and scope. Limit emphasized options or controls up to three and no more than five.</li>
							<li>Pick an agreed upon measurement to act as an acid test. Do not deviate from it. For example, determine that for any control or feature to be considered high priority, it must be used by 75% of the user base at least 25% of the time.</li>
						</ul>
				</div>
			</div>
		</section><!--end section emphasis-->
		
		<section id="typography" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Typography</h3>
					</div>
					<p><strong>When in doubt, follow the rule of three.</strong></p>
					<p>One of the easiest problems to fix in almost any design is poor application of basic typographical rules.</p>
					<p>Words are the functional equivalent of icons. When you read a body of text, you are not parsing individual letters, like “d - e - s - i - g - n.” You are actually seeing a concise symbol that is parsed as a single object, “design.”</p>
					<p>When type is set with excessive unevenness, it’s the equivalent of stuttering. So when in doubt, follow the rule of limiting yourself to no more than three fonts.</p>
					<p>Only once you have type under control, can you pick the optimal spots to break this rule.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>As a starting point, use no more than three fonts in the design of the product.</li>
							<li>A 'font' is defined as the font face, the font color and the font variant. Font size is often considered as well. For example, 11pt Helvetica colored as #333 and 11pt Helvetica Italic colored as #333 are considered two different fonts.</li>
							<li>Before deviating from the rule of no more than three fonts, first force yourself to solve the design problem within the constraints.</li>
						</ul>
				</div>
			</div>
		</section><!--end section typography-->
		
		<section id="color" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Color</h3>
					</div>
					<p><strong>When used effectively, color elucidates as well as calms the user.</strong></p>
					<p>Color follows much of the same constraints as type, with the exception that color gets to the core emotional impact of the product in a more direct, visceral way that type does not.</p>
					<p>Where type speaks, color punctuates. Where type provides communication, color provides context.</p>
					<p>Just like it’s typographical counterpart, a color palette must be applied judiciously, carefully avoiding extraneous or random additions.</p>
					<p>Key Ideas:</p>
						<ul class="disc">
							<li>Define a product color palette. Be aware enough, to pick a color system that also serves the needs of a software product at a functional level.</li>
							<li>A good place to start is to pick a base color, up to three compliments, one highlight color and a defined level of black and white.</li>
							<li>Before deviating from the color palette, first force yourself to solve the design problem within the constraints.</li>
							<li>... RG colorblind</li>
						</ul>
						
					<h5 id="dark-side-of-color">The Dark Side of Seeing Color </h5>
					<p class="spacetop"><strong>Color has it uses, but if one is not careful, color can become useless.</strong></p>
						<p>Color is useful beyond just having things look pleasing to the eye, it can create distinctions and be used to draw attention to things we want people look at. The drawbacks of color are important to keep in mind if one is to use color in an effective way.</p>
						<p>The first thing to keep in mind is that nine percent of men and one half percent of women are color blind. Color blind people can see color, but they cannot see the differences in some colors they way most of us can. There are different types of color blindness but the most common one makes it hard to see the difference between reds, yellows, and greens (Weinschenk 23).</p>
						<p>Another tricky element to color is that different cultures have different associations with the same color. So while red can mean bad, danger, or stop to many users, in some cultures red is associated with happiness or good fortune. So design needs to take into account the cultural context of likely users, as well as the portion of the population that is color blind...</p>
						<p>Some colors do not play well together and when put together can make things hard and tiring to look at and read.  Red and blue or red and green overlapping each other cause this effect but there are many colors that are opponent colors and clash.</p>
						<p>Here are some tips for working with color:</p>
							<ul class="disc">
								<li>Color is useful but don’t let it stand alone, use other cues to complement it.</li>
								<li>Avoid subtle color differences as our eyes are designed more to find strong contrasts. A trick is convert a project to greyscale, if its to hard to see the difference in grey scale its a good bet the colors are not different enough to avoid causing confusion (Johnson 61).</li>
								<li>Keep in mind that there is variation among color displays depending on a variety of factors, for example the display capacity of the monitor screen.</li>
								<li>Our eyes have built in color opponents that are coupled together. Red and green are paired as are blue and yellow, black and white is the last pair. All other colors have to use two channels at the same time for us to see it making these six color the easiest to see. One drawback is that the red green channel is the one with is not working in most color blind people. But it is still useful to know that these six colors are the six that are easiest for the human eye to identify.</li>
								<li>Color can work to draw the eye when used sparingly, but when overused loses its effect.</li>
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
							<p class="pagination prev_ch"><a href="./human-factors.php">Back to Human Factors</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./acknowledgements.php">Continue to Acknowledgements</a></p></div>
					</div>
				</div>
			</div>
		</footer>
		<section class="citations">
			<div class="container">
				<div class="sixteen columns">
					<hr />
					<p>Citations</p>
					<div class="section_cite">
						<p class="grey"><strong>The Dark Side of Seeing Color</strong></p>
						<p>Johnson, J (2010). <em>Simple guide to understanding user interface design rules: Designing with the mind in mind.</em> Burlington, MA: Morgan Kaufman.</p>
						<p>Weischenk, S.M. (2011). <em>100 things every designer needs to know about people</em>. Berkeley, CA: New Riders.</p>
					</div>
				</div>
			</div>
		</section>
	</section>

</div><!--end wrapper-->
</body>
</html>