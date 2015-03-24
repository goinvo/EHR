<?php $pageTitle='Health IT Usability'; ?>
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
<body class="health-it-usability">
	<!--php include './nav.php';-->
	<nav class="main" role="navigation">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="health-it-usability">
						<a href="./design-principles.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
						<a href="./health-it-usability.php"> <span class="ch-name">Health IT Usability</span></a> 
						<a href="./authors.php"><span class="next"></span><span class="next-text">Next</span></a>
						<div class="section-nav">
							<ul>
								<li><a href="./health-it-usability.php#usability">9.1 Usability</a></li>
								<li><a href="./health-it-usability.php#methodologies">9.2 Methodologies</a></li>
								<li><a href="./health-it-usability.php#recommended-reading">9.3 Recommended Reading</a></li>
							</ul>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-8" class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>9</h2>
					<h2>Health Information Technology<br/> and Usability</h2>
					<div class="subheader"><p>Work smarter, not harder.</p></div>
				</div>
			</div>
		</div>
		<section id="usability" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>9.1 Usability</h3>
					</div>
					<p>In layman’s terms usability refers to how easy or intuitive an interface is to use. Successful designers go beyond this vague notion of “user friendliness” and have a thorough understanding of their user’s community and the tasks they need to accomplish. They also use methodologies validated during <a href="http://www.measuringusability.com/blog/usability-history.php" target="blank" class="link">decades of research</a> on human computer interaction.</p>
					<p>The International Standards for Human Computer Interaction (HCI) and usability (i.e., ISO 9241-11) define usability as the “effectiveness, efficiency, and satisfaction of a user performance within a specific context, such as physical and social environment.” But usability alone is not enough, an interface must also have good utility. Good utility means the interface provides the features needed to complete users’ tasks. Successful applications combine good utility and good usability.</p>
					<p>Health Information Technology (Health IT) usability issues are similar to the information technology usability issues of other life-critical systems such as air traffic control or nuclear power plants. Users in all of these fields are experts in their domain, but they need rapid, error free information technology performance to do their jobs effectively.</p>
					<p>Usability problem areas in an interface design might be indicated by workarounds, redundancies, or slow task completion, all of which could possibly lead to general user burnout. Health IT applications with usability problems are more than just annoying to use, they can cause serious patient harm (e.g. wrong medication or dangerous dosage, wrong treatment, missed results, wrong patient selection leading to a patient not receiving treatment and another receiving unintended treatment, etc.).</p>
					<p>There is an art as well as a science to good interface design. Donald Norman’s seminal book: <em>The Design of Everyday Things</em> (initially named <em>The Psychology of Everyday Things</em>), highlighted the importance of balancing the imperatives of efficiency and aesthetics in the design process.</p>
					<p>The 5 measures of usability are as follows:</p>
					<ul class="disc">
						<li>Learnability: How easy is it for first time users to accomplish basic tasks using this system? How easily can users discover and access the system's more advanced features?</li>
						<li>Efficiency: How quickly can users perform tasks using this system?</li>
						<li>Memorability: If physicians stop using the system for some time, how easily can they re-establish their former proficiency with the system?</li>
						<li>Errors: How many errors do users make while interacting with the system? How severe are these errors, and how easily can users correct them?</li>
						<li>Satisfaction: How pleasant do users find their experience of interacting with the system?</li>
					</ul>
					<p>The human factors chapter covers the large body of evidence from many different sources that illustrate the importance of usability. If an interface is difficult to use, people will simply not use it or experience a decline in productivity when they are forced to use it.</p>
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
					<p>Development methodologies such as contextual design help developers by offering validated processes with predictable schedules. Ethnographic, or user group, observation can guide task analysis and complement user participatory design processes. Writing scenarios help developer teams to build a common understanding of design goals. These scenarios can also help plan usability tests. Logs of current Health IT system usage can provide valuable data about task frequencies and sequences that lead to design refinements. These methods will provide the developers with valuable information about how the users go about their tasks and how frequently they perform various tasks. Armed with this information, the developers will be able to refine their designs.</p>
					<p>Specific guidance for EHR design and evaluation is becoming more and more available. For example there is now a <a href="http://www.nist.gov/manuscript-publication-search.cfm?pub_id=909701" class="link" target="_blank" >NIST publication</a> that summarizes the rationale for an Electronic Health Record (EHR) Usability Protocol (EUP) and outlines a three-step process. These three steps consist of (1) EHR Application Analysis, (2) EHR User Interface Expert Review, and (3) EHR User Interface Validation Testing. The <a href="https://sbmi.uth.edu/nccd/turf/" target="blank" class="link">TURF Usability Toolkit</a> developed at the University of Texas can help create, organize, and analyze usability of EHRs. Other Health IT and general usability and design resources are provided at the end of the chapter.</p>
					<p>Usability evaluations provide developers with subjective and objective data for improving the user interfaces. For practical results, 5 to 8 people participating in a pilot study using most methods can already provide valuable feedback and suggestions for improvements. A group of sixteen to twenty participants will start to consistently report similar issues with the design. At this point, the developers can study these results and refine the design accordingly. The developers can run several testing cycles to make sure they address all the program's significant problems.</p>
					<p>Other methodologies for evaluating or creating designs and evaluation include:</p>
					<div id="methodologies-table">
						<table class="sidebar-table">
							<thead>
								<tr>
									<th>Method</th>
									<th>Description</th>
									<th>Purpose</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Card Sorting</td>
									<td>A categorization method wherein users sort cards depicting various concepts into groups. </td>
									<td>Card sorting helps developers organize a program's content. It helps them design better overall information architecture and better menus. It can also help physicians and programmers work together to effectively label a program's various functions.</td>
								</tr>
								<tr>
									<td>Cognitive Walkthrough</td>
									<td>A team of evaluations walk through a paper or working prototype, discussing the usability issues they encounter as they go.</td>
									<td>This process helps identify additional application functions necessary for the tasks in a workflow process. </td>
								</tr>
								<tr>
									<td>Exit Interview (Retrospective Think Aloud)</td>
									<td>After a prior usability test, a moderator asks a user questions about how the system performed.</td>
									<td>Provides meaningful qualitative information, as well as highlighting what's working, what's not, and why.</td>
								</tr>
								<tr>
									<td>Focus Group</td>
									<td>A moderator guides a discussion about the application being developed with a group of users.</td>
									<td>Focus groups help developers understand the factors that affect individuals' relationship to the application’s needs and design.</td>
								</tr>
								<tr>
									<td>Heuristic Evaluation (Expert Review)</td>
									<td>Usability and design experts examine the product and determine whether it meets industry standards.</td>
									<td>Experts who know key factors of good design and can quickly identify trouble areas, even subtle ones, that other methods might miss.</td>
								</tr>
								<tr>
									<td>Paper Prototyping</td>
									<td>Low fidelity usability testing of product concept made from paper or some simple tool.</td>
									<td>Paper prototyping has a high value in the iterative design process. A design can be worked and reworked over and over again, especially when combined with cognitive walkthroughs, to quickly design a prototype.</td>
								</tr>
								<tr>
									<td>Survey or Questionnaire</td>
									<td>A survey or questionnaire asks specific questions about an application’s effectiveness or collects information about user demographics, preferences, and experiences with the tool.</td>
									<td>Surveys can provide developers with feedback about a variety of design issues throughout the product's lifecycle.</td>
								</tr>
								<tr>
									<td>Think Aloud (Concurrent)</td>
									<td>Participants in testing express their thoughts on the application while executing set tasks. Think alouds are also used in an exit interview when the user is shown a recording of their session and asked to express their thoughts in retrospect.</td>
									<td>This process can help gain insight into the thought flows of actual users as well as help answer questions about why users are performing tasks a certain way.</td>
								</tr>
								<tr>
									<td>Usability Testing/Task Performance</td>
									<td>Presents representative end-users with scenarios or specific tasks, designed to cover the major functionality of the software system and to simulate expected real-life usage patterns.</td>
									<td>This process determines if the design works for the intended task or has gulfs between the user’s expectations of the design and the developer's concept of functionality.</td>
								</tr>
								<tr>
									<td>Field Testing</td>
									<td>Researchers evaluate products in the contexts in which those products would normally be used.</td>
									<td>People use things differently in different settings. Collecting data in the field can provide new insights that are not always discoverable in a lab or test center.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section><!--end section methodologies-->
		
		<section id="recommended-reading" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>9.3 Recommended Reading</h3>
					</div>
					<h4>9.3.1 Usability and EHR</h4>
					<p><strong>Health Information Management Systems Society (HIMSS)</strong>
						<br/><a href="http://himss.org/usability" target="blank" class="link">EHR Usability Basics</a></p>
					<p><strong>HIMSS</strong> is a global, cause-based, not-for-profit organization that focuses on improving healthcare through improving and distributing information technology (IT). This site includes resources related to EHR usability evaluation and design.</p>
					<p><strong>National Institute of Standards and Technology</strong>
						<br/><a href="http://www.nist.gov/healthcare/usability/" target="blank" class="link">Health Information Technology / Usability</a></p>
					<p>This site summarizes NIST's work on Health IT. It contains links to selected publications, and to records of NIST's conference proceedings. See in particular:
					<br/><a href="http://www.nist.gov/manuscript-publication-search.cfm?pub_id=907313" target="blank" class="link">(NISTIR 7741) NIST Guide to the Processes Approach for Improving the Usability of Electronic Health Records</a></p>
					<p><a href="http://www.nist.gov/manuscript-publication-search.cfm?pub_id=909701" target="blank" class="link">(NISTIR 7804) Technical Evaluation, Testing and Validation of the Usability of Electronic Health Records</a></p>
					<p><strong>Strategic Health IT Advanced Research Projects (SHARP)</strong>
						<br/><a href="http://www.healthit.gov/policy-researchers-implementers/strategic-health-it-advanced-research-projects-sharp" target="blank" class="link">HealthIT.gov</a></p>
					<p>SHARP's research works to address problems that impede the adoption of Health IT. See in particular: <a href="https://turf.shis.uth.tmc.edu/turfweb/" target="blank" class="link">TURF EHR Usability Toolkit</a></p>
					<p><a href="http://dl.acm.org/citation.cfm?id=2029976&amp;picked=prox" target="blank" class="link">Special Section of ACM Interactions</a> (Nov/Dec 2011) 
						<br/>Edited by Harry Hochheiser and Ben Shneiderman, including</p>
						<ul>
							<li>Hochheiser, H., &amp; Shneiderman, B. (2011). Electronic medical records: usability challenges and opportunities. <em>ACM Interactions</em>, 18(6), 48-49.</li>
							<li>Douglas, G. P., Landis-Lewis, Z., &amp; Hochheiser, H. (2011). Simplicity and usability: lessons from a touchscreen electronic medical record system in Malawi. <em>ACM Interactions</em>, 18(6), 50-53.</li>
							<li>Swanson, A., &amp; Lind, S. (2011). Usability testing EHRs: Examples from the front lines. <em>ACM Interactions</em>, 18(6), 54-58.</li>
							<li>Shneiderman, B. (2011). Tragic errors: usability and electronic health records. <em>ACM Interactions</em>, 18(6), 60-63. (<a href="http://www.cs.umd.edu/hcil/sharp/TragicErrors-EHR-Usability-ACMinteractions-11-2011.pdf" target="blank" class="link">PDF</a>)</li>
						</ul>
					<p><a href="http://www.usability.gov" class="link" target="blank">Usability.gov</a> This is a valuable general resource on usability methods and principles.</p>

					<h4>9.3.2 Usability in General</h4>
					<p>Norman, D. (2013). <em>The Design of Everyday Things: Revised and Expanded Edition</em>. (Originally published: <em>The Psychology of Everyday Things</em>). New York, NY: Basic Books</p>
					<p>Shneiderman, S. B., &amp; Plaisant, C. (2010). <em>Designing the User Interface</em> (4th ed.). Reading, MA: Addison-Wesley Publ. Co.</p>
					<p>Rogers, Y., Sharp, H., &amp; Preece, J. (2011). <em>Interaction Design: Beyond Human-Computer Interaction</em>. Hoboken, NJ: John Wiley &amp; Sons.</p>
					<p>Dumas, J., Redish, J. (1999). <em>A Practical Guide to Usability Testing</em>. Norwood, NJ: Ablex. </p>
					<p>Gould, J. D., &amp; Lewis, C. (1985). Designing for Usability: Key Principles and What Designers Think. <em>Communications of the ACM</em>, 28(3), 300-311.</p>
					<p>Card, S. K., Moran, T. P., &amp; Newell, A. (Eds.). (1986). <em>The Psychology of Human-Computer Interaction</em>. Boca Raton, FL: CRC Press.</p>
					<p>Rubin, J., &amp; Chisnell, D. (2008). <em>Handbook of Usability Testing: How to Plan, Design, and Conduct Effective Tests</em>. Hoboken, NJ: John Wiley &amp; Sons.</p>
					<p>Krug, S. (2014). <em>Don't Make Me Think, Revisited: A Common Sense Approach to Web Usability</em>. Berkeley, CA: New Riders.</p>

					<h4>9.3.3 Design</h4>
					<p>Weischenk, S.M. (2011). <em>100 Things Every Designer Needs to Know about People</em>. Berkeley, CA: New Riders.</p>
					<p>Few, S. (2009). <em>Now You See It: Simple Visualization Techniques for Quantitative Analysis</em>. Oakland, CA: Analytics Press.</p>
					<p>Ware, C. (2005). Visual Queries: The Foundation of Visual Thinking. <em>In Knowledge and Information Visualization</em>, (pp. 27-35). Springer Berlin Heidelberg.</p>
					<p>Johnson, J (2010). <em>Simple Guide to Understanding User Interface Design Rules: Designing with the Mind in Mind</em>. Burlington, MA: Morgan Kaufman.</p>
					<p>Williams, R. (2003). <em>The Mac is Not a Typewriter</em>. San Francisco, CA: Peachpit Press.</p>
					<p>Williams, R. (2008). <em>The Non-Designer's Design Book</em>. San Francisco, CA: Peachpit Press.</p>
				</div>
			</div>
		</section><!--end section terminology-->
		
		<div class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
				</div>
			</div>
			<nav class="footer" role="navigation">
				<div class="container">
					<div class="sixteen columns">
						<ul>
							<li class="health-it-usability">
							<a class="prev-ch" href="./design-principles.php"><span class="prev"></span><span class="ch-name">Design Principles</span></a> 
							<a class="next-ch" href="./authors.php"><span class="next"></span><span class="ch-name">Authors</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php include './footer.php'; ?>

					</div>
				</div>
			</div>
		</section>

	</section>
</div><!--end wrapper-->
</body>
</html>