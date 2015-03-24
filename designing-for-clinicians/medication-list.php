<?php $pageTitle='Medication List'; ?>
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
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/Slider/component.css" >
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/jquery.fancybox.css" >
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="medication-list">
	<!--php include './nav.php';-->
	<nav class="main" role="navigation">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="medication-list">
						<a href="./about-this-book.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
						<a href="./medication-list.php"><span class="ch-name">Medication List</span></a> 
						<a href="./medication-reconciliation.php"><span class="next"></span><span class="next-text">Next</span></a>
						<div class="section-nav">
							<ul>
								<li><a href="./medication-list.php#simple-list">2.1 The Simple List</a></li>
								<li><a href="./medication-list.php#interactive-table">2.2 The Interactive Table</a></li>
								<li><a href="./medication-list.php#timeline">2.3 The Medication Timeline</a></li>
								<li><a href="./medication-list.php#summary">2.4 Summary</a></li>
							</ul>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="wrapper">
	<?php include './header.php'; ?>
	
	<section id="ch-2" class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<hr class="print-only" />
					<h2>2</h2>
					<h2>Medication List</h2>
					<div class="subheader"><p>Successful medication management is a key part of a patient’s health care</p></div>
				</div>
			</div>
		</div>
		<section id="medication-lists" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Medication lists record information about all the drugs a patient is currently receiving and their prescribed dosages. Medication lists come in many forms, but this chapter will only focus on three: <strong>simple lists</strong>, <strong>interactive lists</strong>, and <strong>medication timelines</strong>. We’ll offer a few tips and challenges along the way.</p>
					<div class="example" id="gal-2-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.1</span>
							<span class="ex-caption"></span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">2.1 a</span> Simple List <span class="capt-desc">&mdash; Helps physicians with a variety of tasks, such as making treatment decisions or e-prescribing.</span></div>
									<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" title="Gallery 2.1 a - Simple List - Helps physicians with a variety of tasks, such as making treatment decisions or e-prescribing.">
										<img src="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="scale-with-grid" alt="A simple medication list" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">2.1 b</span> Simple List <span class="capt-desc">&mdash; Also ideal for mobile which patients can access easily.</span></div>
									<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-list/SimpleListMobile.png" title="Gallery 2.1 b - Simple List - Also ideal for mobile which patients can access easily">
										<img src="./assets/images/examples/medication-list/SimpleListMobile.png" class="scale-with-grid" alt="Simple lists are also good for mobile" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.1 c</span> Interactive List <span class="capt-desc">&mdash; Contains more details about the medications and helps physicians with tasks such as making treatment decisions or e-prescribing</span></div>
									<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-list/UM_EHR_0000_table.png" title="Gallery 2.1 c - Interactive List - Contains more details about the medications and helps physicians with tasks such as making treatment decisions or e-prescribing.">
										<img src="./assets/images/examples/medication-list/UM_EHR_0000_table.png" class="scale-with-grid" alt="An interactive table as a medication list" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.1 d</span> Medication Timeline <span class="capt-desc">&mdash; Harnesses the power of information visualization and allows physicians to understand changes in medications over time.</span></div>
									<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Gallery 2.1 d - A Medication Timeline - Harnesses the power of information visualization and allows physicians to understand changes in medications over time.">
										<img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" alt="A medication timeline" /></a>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="simple-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>2.1 <a href="../simple-list/" target="_blank">The Simple List</a></h3>
					</div>
					<p>The simple list displays bare-bones basic information. It’s made to be read quickly, scanned at a glance. It’s easy to scan visually to see the name, strength, and dosing of the medication. The list is alphabetical, which makes it easy to search for and locate particular items. It gives the user, usually a physician, a broad overview of the patient’s medical history and their related medications. A physician quickly scanning the simple list can make initial observations such as, <em>“There are twenty-four medications here, but only two prescription medications for high blood pressure.”</em> Good design can make such tasks easy; bad design can make them much harder.</p>
					<p>We use the term “patient” to apply to either patients themselves, caregivers, or family members acting on their behalf. Similarly, we use the term “physician” to apply to physicians proper or other healthcare professionals with prescribing authority.</p>
					<div class="scenario" id="exam-room">
						<h4>A Common Scenario &mdash; Going into the Exam Room</h4>
						<p>Dr. Barnes, a general internist is about to go into the exam room to see her patient Mr. Martin, a 60-year-old man with ten chronic diseases (diabetes, high blood pressure, high cholesterol, knee arthritis, depression, insomnia, etc.) who is taking seventeen medications. The physician notes that the patient’s blood pressure is about ten points too high. She plans to ask the patient if he has been taking his blood pressure at home and what the results of any such tests have been.</p>
					</div>
					<p>In this scenario, the physician needs to have an overall awareness of the patient’s medications, chronic problems, latest vital signs, and relevant lab test results fresh in her mind when the face-to-face visit begins. (“Is he taking insulin? Is he on any high-risk drugs like warfarin?”) Armed with this background, the physician is able to give her full attention to the patient telling his story, and she won’t have to keep glancing away from him and back at the EHR to be reminded of the medications. Giving full attention to his story shows the patient that she’s listening to and cares about what he has to say. Establishing context will allow our physician to attend to the practicalities and the emotional tone of this encounter, and to frame this visit in relation to a bigger picture that includes the patient's past and current data, his story.</p>
					<div class="quicktip" id="situational-awareness">
						<div class="sidebar cf">
							<h4>Situational Awareness</h4>
							<p class="preview">Situational awareness is having all the background information you need to make effective decisions while simultaneously<span class="elipsis">... <a class="a">Read more</a></span></p>
							<div class="qt-content show">
								<p>Situational awareness is having all the background information you need to make effective decisions while simultaneously being aware of what is currently happening around you and anticipating what will happen in the near future. For physicians managing chronic diseases during ambulatory visits, situational awareness consists of taking in a broad overview of key information about patients before walking into the exam room. Upon entering the exam room, the physician can then be mindful of and attuned to the patient sitting before them and the unfolding of their conversation.</p>
								<p>If Dr. Barnes enters the exam room half-prepared due to time pressure or information chaos, then she’ll struggle to listen to the patient’s concerns. <a href="./human-factors.php#info_chaos">Information chaos</a><span class="print-only"> (See Information Chaos in the Human Factors chapter)</span> comprises information overload, underload, scatter, conflict, and erroneous information. Instead, she’ll search through the EHR while the patient speaks, frantically trying to fill the gaps in her knowledge. The patient will sense the physician’s distraction, and may feel that he’s not being heard, that he is being left out of decisions that concern his body and wellbeing. The physician may miss something important, telling details about what the patient says because she is distracted.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>Look at <a href="#fig-2-1">Figure 2.1</a> and<a href="#fig-2-2"> Figure 2.2</a>. As you can probably tell, one list looks cleaner than the other. Such simplicity makes it easy for people using this list to see the names of the drugs the patient is taking, which allows a quick overview. Given that it uses plain language like “twice daily,” instead of Latin abbreviations like “b.i.d.,” the list below would meet the needs of both physicians and patients.</p>
					<div class="print-only page-break"></div>
				</div>

				<div class="one-half column">
					<div class="example" id="fig-2-1">
						<div class="ex-title">
							<span class="ex-type">Figure 2.1</span>
							<span class="ex-caption">Before: An Awful Medication List<br/> &nbsp;</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-list/EHR_SimpleList_Before.png" title="Figure 2.1 - Before: An Awful Medication List">
							<img src="./assets/images/examples/medication-list/EHR_SimpleList_Before.png" class="scale-with-grid" alt="A medication list that is difficult to read" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-2-2">
						<div class="ex-title">
							<span class="ex-type">Figure 2.2</span>
							<span class="ex-caption">After: Simple Medication List Makeover</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-list/EHR_SimpleList_After.png" title="Figure 2.2 - After: Simple Medication List Makeover">
							<img src="./assets/images/examples/medication-list/EHR_SimpleList_After.png" class="scale-with-grid" alt="A simple medication list that's easier to scan" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p>Patients can also use this list. Patients can easily show this list to other physicians, dentists, emergency room staff, or their caregivers. Patients filling up weekly medication reminder boxes might, however, need a more detailed list &mdash;perhaps one that illustrates the contents of each compartment of their box, and more clearly differentiates the time of day at which they should take each dose of medication.</p>
					<p>A physician or nurse would expect a progress note from a previous visit, a dashboard overview, or a visit summary from an outside EHR to make use of this simple format. It’s a quick snapshot, intended to be taken in at a glance. A physician doing a more complex task, like e-prescribing, might prefer an interactive display with more information, such as the interactive table or the medication timeline.</p>
					<p>In this context, the physician just needs to quickly see the medications’ names. Avoid the temptation to add extraneous detail here. Concise lists are easier to read. Physicians don’t need to see the medications’ quantities, start dates, or the number of refills in a given prescription to perform this task. If the list uses a brand name, be sure to include the product’s generic name as well. Dealing with brand, generic, and compound names can be a challenge (see the following note).</p>
					<div class="quicktip" id="brand-generic">
						<div class="sidebar cf">
							<h4>Challenge: Handling Brand and Generic Names</h4>
							<p class="preview">This can get tricky. We’ll admit right now: there may not be one correct answer to the problem of whether to show the brand name<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>This can get tricky. We’ll admit right now: there may not be one correct answer to the problem of whether to show the brand name, the generic name, or both names by default in medication lists. It depends on the context, and the people in the conversation. The EHR can offer easy access to both the generic and the brand names of all relevant drugs. But several factors complicate the question of the form this access could take.</p>
								<p>Here are a few considerations.</p>
								<p>Ideally, both names would be available on demand at just the right time. Sometimes it may be appropriate to display both generic and brand name &mdash;for example “furosemide (Lasix) 20 mg.” For consistency, sort alphabetically by the generic name. But if you’re working with a printed list, then you might have to choose a single method of display. People often prefer to use brand names in conversation because the generic names may be difficult to remember or pronounce, even for for physicians. Say these three times fast:</p>
									<ul class="disc">
										<li>adalimumab &mdash; Humira</li>
										<li>ondansetron &mdash; Zofran</li>
										<li>furosemide &mdash; Lasix</li>
									</ul>
								<p>The problems are compounded by the fact that some medications have many confusing non-interchangeable brand names. Diltiazem, for example, may be available as:</p>
									<ul class="disc">
										<li>Cardizem</li>
										<li>Cardizem LA</li>
										<li>Cardizem CD</li>
										<li>Cartia XT</li>
										<li>Dilacor XR</li>
										<li>etc., etc.</li>
									</ul>
								<p>When discussing medications with patients, physicians need to be aware of the name of the drug as the patients know it. Patients may be more familiar with a particular version of a drug’s name because it is what is written on the medication container dispensed by their pharmacy, or because that version of the name is easier to recall or pronounce. When speaking with patients, physicians might find it helpful to refer to drugs by both names (“Your furosemide, also called Lasix”). Having both names displayed, especially for less common drugs may decrease mental effort.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>We can make medication lists easier to read by <strong>emphasizing</strong> the names of drugs and <span class="grey">de-emphasizing</span> everything else. Physician’s eyes need to notice the names and strengths more than they need to take in the whole line of text. Dosage instructions such as “take 1 tablet daily,” while important in some contexts, are secondary pieces of information. One method of denoting that these instructions are of secondary importance is to use gray text. The difference between this gray text and the rest won’t be extreme, and thus won’t be visually jarring, but it <strong>will</strong> be immediately apparent to the human brain’s <a href="./human-factors.php#how-people-perceive" target="_blank">visual processing system<span class="print-only"> (See How People Perceive in the Human Factors chapter)</span></a>. Compared with this light gray text, the black medicine names will possess the “<a href="./human-factors.php#preattentive-attributes" target="_blank">preattentive attributes</a>"<span class="print-only"> (See Preattentive Attributes in the Human Factors chapter)</span> our brains readily detect and flag as important.</p>
					<div class="example" id="gal-2-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.2</span>
							<span class="ex-caption">Making Added Emphasis to Text Just Right</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">2.2 a</span> Too jarring</div>
									<div class="ex-item"><p><span class="jarring">lisinopril 20 mg</span> 1 tablet daily</p></div>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">2.2 b</span> Too subtle</div>
									<div class="ex-item"><p>lisinopril 20 mg <span class="dark-grey darker">1 tablet daily</span></p></div>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">2.2 c</span> Invisible to color-blind users</div>
									<div class="ex-item"><p><span class="red">lisinopril 20 mg</span> 1 tablet daily</p></div>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">2.2 d</span> Just right</div>
									<div class="ex-item"><p><strong>lisinopril 20 mg</strong> <span class="dark-grey lighter">1 tablet daily</span></p></div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>On the other hand, sometimes a <a href="./design-principles.php#dark-side-of-color">deliberately jarring</a><span class="print-only"> (See The Dark Side of Seeing Color in the Design Principles chapter)</span> type style alerts the user to pay attention. Some EHRs use <strong>tall man lettering</strong> to differentiate look-alike and/or sound-alike drug names that might otherwise be easily (and dangerously) confused. Tall man lettering capitalizes the parts of a word that separate it from its near-doppelgangers: hydrALAzine vs. hydrOXYzine. This unusual, seemingly “incorrect” capitalization says to the user, “Hey, pay attention here, the part I’ve emphasized is really important.” HydrALAzine is a blood pressure medication, hydrOXYzine is an antihistamine. Small differences matter.</p>
					<div class="print-only page-break"></div>
					<div class="quicktip" id="preattentive-attributes">
						<div class="sidebar cf">
							<h4>Preattentive Attributes</h4>
							<p class="preview">Preattentive attributes are the little visual things people unconsciously notice and understand quickly, so quickly that we have only<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Preattentive attributes are the little visual things people unconsciously notice and understand quickly, so quickly that we have only noticed it at an unconscious level. Try this little exercise, which can help you understand what sort of things we’re talking about.</p>
								<p><strong>How many fives do you find in each rectangle below?</strong></p>
								<img src="./assets/images/examples/medication-list/findthe5s.png" class="scale-with-grid" alt="Find the fives in a grid of numbers" />
								<p>It’s much easier to spot the fives in the right-hand figure because our brain perceives the bold characters without our conscious volition.</p>
								<p>When processing visual information, our brains combine very basic attributes (shape, size, orientation, motion) into “objects” that have some meaning to us (face, pole, box). This happens very quickly, below the level of our conscious awareness. Some features stand out more readily and are noticed more quickly than others. Those features are called <a href="./human-factors.php#preattentive-attributes" target="_blank">preattentive attributes</a><span class="print-only"> (See Preattentive Attributes in the Human Factors chapter)</span>.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>Alphabetize the list. Readers expect a list of text items to be alphabetical. This helps them find particular names quickly in long lists. “Are they taking warfarin?” Just jump to the “w” section to check.</p>
					<p>Reduce visual noise. If a visual element doesn’t add data or improve the perception or processing of information, try leaving it out. See <a href="#fig-2-3"> Figures 2.3</a> and <a href="#fig-2-4">2.4</a>.</p>
					<div class="print-only page-break"></div>
				</div>
				<!--Gal 2-1 Reduce Noise-->
				<div class="one-half column">
					<div class="example" id="fig-2-3">
						<div class="ex-title">
							<span class="ex-type">Figure 2.3</span>
							<span class="ex-caption">Before: The Frame Creates Visual Noise</span>
						</div>
						<a href="./assets/images/examples/medication-list/SimpleList_Noisy.png" class="fancybox" data-fancybox-group="gallery-4" title="Figure 2.3 - Before: The Frame Creates Visual Noise">
							<img src="./assets/images/examples/medication-list/SimpleList_Noisy.png" class="scale-with-grid" alt="A simple list as a table with thick borders" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-2-4">
						<div class="ex-title">
							<span class="ex-type">Figure 2.4</span>
							<span class="ex-caption">After: Cleaner, Data Takes Center Stage</span>
						</div>
						<a href="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="fancybox" data-fancybox-group="gallery-4" title="Figure 2.4 - After: Cleaner, Data Takes Center Stage">
							<img src="./assets/images/examples/medication-list/SimpleList_ReduceNoise.png" class="scale-with-grid" alt="A cleaner simple list with clear information hierarchy" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p>Borders don’t add information, and removing gridlines can make your data less visually noisy (and thus easier to read).</p>
					<p>Now, let’s move on to the interactive table.</p>
				</div>
			</div>
		</section> <!--end section simple-list-->
		
		<section id="interactive-table" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>2.2 <a href="../medication-list/" target="_blank">The Interactive Table</a></h3>
					</div>
					<p>The interactive table allows users to sort, filter, and otherwise adjust their displays to meet the needs of the tasks at hand. This table is the standard workhorse of an EHR, and may sometimes be the only view available. The table is sufficiently flexible and powerful to adapt to fit a variety of tasks, but it can also be complex and may require more effort to learn and use than a simple list. Interactive lists help with a variety of tasks, such as making treatment decisions or e-prescribing. The list might even be able to draw on other data stored in the EHR, such as diagnoses, lab values or vital signs. Of our three examples, this list displays the most information and can provide the best support for cognitively intense tasks.</p>
					<p><a href="#int-2-1">Interactive 2.1</a> shows an example of an Interactive Table. By default, such tables are sorted alphabetically by medication name. Physicians can sort columns of data to gain new insight into the medications and have support for various functions of medication renewals. Not all columns need to be sorted, however. For example, a physician would not find it helpful to sort by the instructions or quantity prescribed, but would find it useful to sort the list by drug names (allowing the physician to scan alphabetically, looking for a specific name), by dates (starting, renewal due, etc), diagnoses, and prescriber names.</p>
					<!--Fig 2-2 Interactive TAble Figure-->
					<div class="print-only page-break"></div>
					<div class="example" id="int-2-1">
						<div class="ex-title">
							<span class="ex-type">Interactive 2.1</span>
							<span class="ex-caption">Interactive Table Prototype &mdash; <a href="../medication-list/" target="_blank" class="button">Try it out!</a></span>
						</div>
						<a href="../interactive-table/interactive-table.html" target="_blank">
							<img src="./assets/images/examples/medication-list/UM_EHR_0000_table.png" class="scale-with-grid" alt="Interactive table as a medication list" /></a>
						<div class="print-only">
							<p>Try it out: <a>InspiredEHRs.org/medication-list/</a></p>
							<p>Download the code: <a>github/goinvo/ehr</a></p>
						</div>
					</div>
					<div class="scenario" id="high-bp">
						<h4>Returning to the Clinical Scenario &mdash; Blood Pressure (BP) Too High</h4>
						<p>Upon entering the room, Dr. Barnes learns that Mr. Martin has been exercising regularly and eating a healthy diet. He is on seventeen medications. He is tolerating them well, and taking them consistently. His blood pressure is about 10 points too high today, however, and it has been similarly elevated when he measured it at home. Dr. Barnes wants to adjust his blood pressure medications to achieve better control.</p>
						<p>Dr. Barnes turns to the interactive medication list and sorts the medications by diagnosis. She can readily see that the patient is already on three medications for blood pressure. With some effort, she determines that all three medications are at their maximum dose. The patient will have to begin taking an additional blood pressure medication. She thinks prescribing lisinopril is the obvious next step, but given that this decision does seem so obvious, our physician wonders if there’s some hidden reason why the patient isn’t on lisinopril already.</p>
					</div>
					<p>Here’s the mental task for our physician (see <a href="#fig-2-5">Figure 2.5</a>):</p>
						<ul class="disc">
							<li>Review the medication list.</li>
							<li>Identify medications for treating high BP (antihypertensives) that the patient is taking.</li>
							<li>Determine if the patient is already taking the maximum dose of each of these medications.
							<ul>
								<li>If one or more of the current medications is not at the maximum dose, consider whether that medication’s dosage could be increased (this may be preferable because it won’t cost the patient a new co-pay, increase their potential drug interactions, or increase the number of pills the patient has to take).</li>
								<li>If all the BP meds are at their maximum dose, then the physician must select an additional medication and add it to the treatment plan.</li>
							</ul></li>
						</ul>
						<p>Juggling these considerations can be a lot of mental work. Fortunately, you can make the job much easier.</p>
				
					<div class="print-only page-break"></div>
					<div class="example" id="fig-2-5">
						<div class="ex-title">
							<span class="ex-type">Figure 2.5</span>
							<span class="ex-caption">The <a href="./human-factors.php#cognitive-load" target="_blank">Cognitive Load</a><span class="print-only"> (See Cognitive Load in the Human Factors chapter)</span> on Physicians Adjusting Blood Pressure Medications</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" title="Figure 2.5 - The cognitive load on physicians adjusting blood pressure medications">
						<img src="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" class="scale-with-grid" alt="Physician has to look at each medication, dose, and condition" /></a>
					</div>
					<p>You can reduce the risk of error (missing one medication in the list) and decrease required mental effort (<a href="./human-factors.php#cognitive-load" target="_blank">cognitive load</a>)<span class="print-only"> (See Cognitive Load in the Human Factors chapter)</span> by using smart design features.</p>
					<p>We have several suggestions for improving medication lists. Follow <a href="https://sbmi.uth.edu/dotAsset/3fc9f186-7608-4b57-9ade-64a90e5916e0.pdf" target="_blank">Effective Table Design guidelines</a><span class="print-only"> (http://tinyurl.com/puxl2y3)</span>. For example, make sure table headers remain visible all the time and don’t scroll out of view. The most important columns can be on the left (in this case, drug names). Make sure long names (like those of compound drugs) don’t get truncated without leaving some visual indication that this is what happened, and make sure the entire names are quickly accessible. You can read more about table design at the <a href="https://sbmi.uth.edu/nccd/index.htm" target="_blank" class="link">SHARP-C website</a>.</p>
					<p><strong>Allow users to sort the medication list by associated diagnosis.</strong> Humans’ limited working memory can only hold three to four compound and complex items, like medications with associated strengths and daily dosing instructions, at a given time.</p>
				
					<div class="quicktip">
						<div class="sidebar cf">
							<h4>Working Memory</h4>

							<p class="preview">Working memory, or short term memory, enables us to recall manageable chunks of information<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Working memory, or short term memory, enables us to recall manageable chunks of information &mdash;say phone numbers we’re in the process of writing down or punching into our phones &mdash;that we need for less than a minute. We have to focus on something to keep it in our short term memory.</p>
								<p>Asking people to look at information on one page and then remember it and use it on another page strains their short term memory. When designing interfaces, keep this in mind. Ask yourself if you can present information in a way that will allow users to focus on remembering the elements of their own tasks, rather than on engaging with your system. Try to avoid having the user get information on one page and then needing to remember it in order to use it on another page.</p>
								<p><a href="./human-factors.php#working-memory" target="_blank">Read more on Working Memory in the Human Factors chapter.</a></p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>Sorting by diagnosis is only possible when previous physicians or providers have entered the information about the diagnoses that prompted a patient’s prescriptions. Currently physicians aren’t required to always give this information, and many don't because they don't see an obvious benefit to doing so. However with an EHR that effectively sorts by diagnoses, entering this information once for each medication will prevent a lot of unnecessary mental work in the future. When a physician prescribes a new medication, the system will present a list of the patient's current diagnoses or chronic problems. The physician can merely pick one or more of these from this list as applicable, or add a new diagnosis or chronic problem. This is essentially the same work physicians already have to do when sending out lab and imaging orders.</p>
					<p>Sorting by diagnosis does, however, present designers and developers with additional challenges. Sorting medications that are associated with more than one diagnosis will be a design challenge. How might they represent medications associated with multiple diagnoses? How might an EHR deal with different providers' ontologies for diagnoses in the context of a health information exchange? A family physician might describe a condition as "chronic low back pain," while the orthopedic surgeon might call the same problem "lumbar spondylosis."</p>
					<div class="example" id="gal-2-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.3</span>
							<span class="ex-caption">Easing Mental Work <span class="capt_desc">&mdash; How many current medications for hypertension? Which medication was previously used for hypertension?</span></span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">2.3 a</span> Sorted by Condition</div>
									<a class="fancybox" data-fancybox-group="gallery-5" href="./assets/images/examples/medication-list/UM_EHR_0001_sort-condition.png" title="Sorted by Condition">
									<img src="./assets/images/examples/medication-list/UM_EHR_0001_sort-condition.png" class="scale-with-grid" alt="Interactive table sorted by Condition" /></a>
									
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.3 b</span> Filtered by Condition</div>
									<a class="fancybox" data-fancybox-group="gallery-5" href="./assets/images/examples/medication-list/Um_Ehr_0002_condition-focus.png" title="Filtered by Condition">
									<img src="./assets/images/examples/medication-list/Um_Ehr_0002_condition-focus.png" class="scale-with-grid" alt="Interactive table filtered by Condition" /></a>
								</div></li>
							</ul>
						</div>
					</div>

					<p>Make <strong>dose range information</strong> available <strong>with a click or a tap</strong> by linking the medication name to reference information about that medication. Drug product information databases include information about the recommended dose range for each indication or diagnosis. The maximum dose might be higher for heart failure than it is for hypertension.</p>
					<p>Make that same dose range information available at a glance by using an <strong>icon or simple color scheme</strong>. A simple color scheme in which light gray represents a low dose, darker gray a higher dose, solid black a maximum dose, and red a dose over the recommended maximum would reveal relative dosages in a way that elegantly meets physicians’ needs. No clicks, no reading, and no math necessary.</p>
					
					<!--Fig 2-6 Lisinopril details-->
					<div class="example">
						<div class="ex-title" id="fig-2-6">
							<span class="ex-type">Figure 2.6</span>
							<span class="ex-caption">Shading Displays Information about the Maximum Dose</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0009_lisinopril.png" title="Figure 2.6 - Shading Displays Information about the Maximum Dose">
						<img src="./assets/images/examples/medication-list/UM_EHR_0009_lisinopril.png" class="scale-with-grid" alt="Shading Displays Information about the Maximum Dose" /></a>
					</div>
					<div class="print-only page-break"></div>
					<p>In any standard EHR table view, that maximum dose indicator could be added with a single small icon for each medication, shown here. This display would also help the patient better understand their medication. By creating visual designs like this that work equally well for physicians, nurses, and patients, we can make the EHR and associated care processes more understandable and transparent for patients.</p>
					<div class="quicktip" id="max-dose">
						<div class="sidebar cf">
							<h4>Challenge: Identifying the "Maximum Dose"</h4>
							<p class="preview">Some medications have different minimum and maximum dose ranges depending on the diagnosis. For example, for lisinopril the<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Some medications have different minimum and maximum dose ranges depending on the diagnosis they’re prescribed for. For example, 10 to 40 mg of lisinopril can be taken daily for hypertension, but a patient can take 5 to 40 mg daily for heart failure. The maximum dose for gabapentin is 3600 mg daily for partial seizures or neuropathic pain, and 1800 mg daily for post-herpetic neuralgia. For gabapentin, the maximum dose must be adjusted downward for reduced renal function and, as renal function declines, the maximum allowable dose drops from 1400 mg to 700 mg, and then to 300 mg daily. For patients on dialysis, however, the maximum dose of gabapentin is just 300 mg daily. Development teams will need to check with their pharmaceutical database provider to learn if data about maximum doses is available as discrete data rather than textual data. An EHR that signals maximum doses and provides information about patient characteristics that supports dosage adjustments can help physicians make safe decisions.</p>
								<p>For pediatric dosing, age and weight introduce further variables in maximum dose calculations. Some drug dosages should be based on the surface area of a patient’s body (a function of weight and height). An EHR that provides this information in applicable cases will provide effective clinical decision support to providers.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>In the examples below (<a href="#fig-2-7">Figure 2.7</a> and<a href="#fig-2-8"> 2.8</a>), we refer to the medication timeline (described in detail later in the chapter) embedded in the table view. It uses the same color scheme described earlier (light gray text represents a low dose, darker gray a higher dose, solid black a maximum dose, and red a dose over the recommended maximum).</p>
					<div class="print-only page-break"></div>
					<div class="example">
						<div class="ex-title" id="fig-2-7">
							<span class="ex-type">Figure 2.7</span>
							<span class="ex-caption">List with a Column for the "Maximum Dose" Icon</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0007_dose-max.png" title="Figure 2.7 - List with a Column for the 'Maximum Dose' Icon">
						<img src="./assets/images/examples/medication-list/UM_EHR_0007_dose-max.png" class="scale-with-grid" alt="Medication table with a row of grey and dark squares to denote whether dose is max" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example">
						<div class="ex-title" id="fig-2-8">
							<span class="ex-type">Figure 2.8</span>
							<span class="ex-caption">Mini-Timeline <span class="capt-desc">&mdash; Shows maximum dose information for each medication</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0008_timeline.png" title="Figure 2.8 - Mini-timeline shows maximum dose information for each medication">
						<img src="./assets/images/examples/medication-list/UM_EHR_0008_timeline.png" class="scale-with-grid" alt="A mini timeline in the medication table can indicate dose information and start/end dates" /></a>
					</div>
					<div class="print-only page-break"></div>
					<h4>Try It Out</h4>
					<p>We’ve made an interactive prototype you might like to try out. Imagine a few clinical tasks (we've listed some suggestions below) and, as you work through them, compare this prototype to the tools in your existing EHR and see the difference our changes make in your user experience. Try timing yourself doing a task on the prototype and a friend or colleague doing the same task in your current EHR. Is one tool more accurate for you?</p>
					<p>For this prototype, assume “today” is September 18, 2013.</p>
					<div class="example" id="int-2-2">
						<div class="ex-title">
							<span class="ex-type">Interactive 2.2</span>
							<span class="ex-caption">Interactive Table Prototype &mdash; <a href="../medication-list/" target="_blank" class="button">Try it out!</a></span>
						</div>
						<a href="../interactive-table/interactive-table.html" target="_blank" title="Interactive 2.2 - Interactive Table Prototype">
							<img src="./assets/images/examples/medication-list/UM_EHR_0000_table.png" class="scale-with-grid" alt="Interactive Table Prototype" /></a>
						<div class="print-only">
							<p>Try it out: <a>InspiredEHRs.org/medication-list/</a></p>
							<p>Download the code: <a>github/goinvo/ehr</a></p>
						</div>
					</div>
					<h4>Try these tasks:</h4>
						<ol>
							<li>Is the patient taking insulin?</li>
							<li>Is the patient taking any medication for diabetes? How many?</li>
							<li>Is the patient taking any medication for high blood pressure (hypertension)? How many?</li>
							<li>Could we safely increase the dose on any of those high blood pressure medications? If so, which ones?</li>
							<li>For which medications is Dr. Barnes responsible?</li>
						</ol>
				</div>
			</div>
			<!--Interactive 2-1 Interactive Table-->
		</section><!--end section interactive list-->

		<section id="timeline" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>2.3 <a href="../timeline/timeline.html" target="_blank">The Medication Timeline</a></h3>
					</div>
					<p>Physicians working with people who have many complex, chronic conditions (diseases), and managing many interventions, such as medications, laboratory tests, occasional procedures, and many visits with multiple health care providers at home, offices, and hospitals, yearn for a timeline that can help them manage all this complex data. Juggling all that data takes a tremendous amount of mental effort (cognitive load). A physician seeking to understand a patient's history with even a single medication may have to dig through progress notes, medication list tables, and years' worth of prescription renewals. The physician might then have to do the whole thing over again to understand the patient's history with a second or third medication.</p>
					<p>A medication timeline harnesses the power of information visualization to:</p>
						<ol>
							<li>Provide a chronological overview of the patient’s medication history.</li>
							<li>Enable physicians to zoom in on and filter the list.</li>
							<li>Reveal details on demand.</li>
						</ol>
					<p>The overview provides context and perspective, and may enable the user to make salient discoveries. ("Wow, all this patient's meds were changed six months ago.") The timeline visualization helps harness our fast thinking mind, which can quickly make sense of the start and stop images, rather than relying on our slow thinking mind to read dates and make calculations. Zooming and filtering can provide answers to preliminary questions or hunches. Physicians can drill down to seek more specific details, such as the exact dates of medication changes, or related facts that could influence the medical chain of events.</p>
					<div class="scenario">
						<h4>Returning to the Clinical Scenario &mdash; What Happened Before Today?</h4>
						<p>Dr. Barnes had determined that Mr. Martin’s blood pressure was too high, and that it would be necessary to prescribe an additional drug. She wondered why lisinopril was not already on this patient’s medication list, since it would normally be among the first three drugs she used for hypertension. So, turning to the medication timeline, she explores the patient’s medication history by toggling from the “Active Medications” view to the “Active &amp; Inactive Medications” view. She sees (<a href="#fig-2-9">Figure 2.9</a> below) that lisinopril had once been prescribed, but that the patient had only taken it for a few months. She wonders why. Doing a search of the chart, she finds a phone note reporting that the patient developed a persistent dry cough, which had resolved when he stopped taking lisinopril. There was no other record of that adverse effect in the chart, so Dr. Barnes added lisinopril to the allergy list, with “cough” as an “adverse effect.” If her EHR supports the function, she might also write “cough” in the comment field associated with lisinopril under the “reason for stopping” column.</p>
					</div>
					<div class="example" id="fig-2-9">
						<div class="ex-title">
							<span class="ex-type">Figure 2.9 </span>
							<span class="ex-caption">Show All Medications (Active &amp; Inactive)<span class="capt-desc"> &mdash; Lisinopril had been stopped.</span> <a href="../timeline/" class="button" target="_blank">Try it out!</a></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0007_lisinopril-stopped.png" title="Figure 2.9 - Show All Medications (Active and Inactive) - Lisinopril had been stopped">
							<img src="./assets/images/examples/medication-list/UM_EHR_0007_lisinopril-stopped.png" class="scale-with-grid" alt="Show All Medications and see what had been stopped" /></a>
						<div class="print-only">
							<p>Try it out: <a>InspiredEHRs.org/timeline/</a></p>
							<p>Download the code: <a>github/goinvo/ehr</a></p>
						</div>
					</div>
					<p>Dr. Barnes now considers prescribing amlodipine to control the patient’s high blood pressure, but wonders about the patient’s adherence to the medications he’s already on. Zooming in on the medication timeline, she finds that the patient was three weeks late refilling his Coreg, but had been embarrassed to admit to it. The patient had just requested a refill last night and planned to pick it up from the pharmacy after the visit today. Coreg’s relatively high co-pay made the patient hesitant to refill his prescription in a timely manner. With this brought to her attention, the physician discussed less expensive alternatives in the beta-blocker class. Together they selected metoprolol XL 200 mg daily. You can read more about why patients might not be taking their medication as prescribed in <a href="./medication-reconciliation.php">Chapter 3, Medication Reconciliation</a>.</p>
				

					<div class="example" id="fig-2-10">
						<div class="ex-title">ing
							<span class="ex-type">Figure 2.10 </span>
							<span class="ex-caption">Zoom in to See Granular Details like Gaps in Medication Adherence</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0008_zoom-in.png" title="Figure 2.10 - Zoom in to See Granular Details like Gaps in Medication Adherence">
							<img src="./assets/images/examples/medication-list/UM_EHR_0008_zoom-in.png" class="scale-with-grid" alt="Zoom in to See Granular Details like Gaps in Medication Adherence" /></a>
					</div>

					<p>A timeline offers a complete overview. At the top level, a timeline conveys details about when a patient starts and stops taking a medication, when that medication's dose changes, whether that change is an increase or decrease, and whether the dosage taken is the maximum one.</p>
					<p>In the straightforward timeline presented in <a href="#gal-2-4">Gallery 2.4</a>, each bar represents the history of a single medication (e.g. citalopram started at 10 mg, and the dosage progressively increased to 40 mg daily). The physician can adjust the timescale to give a wider or narrower view of the patient’s medication history. Solid black represents the maximum dose of that particular medication, with shades of gray representing progressively lower doses (lighter means lower). This design presents the user with a wealth of information at a glance.</p>
					<p>Highly usable EHR designs can accommodate large medication lists. Patients with an array of complex problems can have 15 to 20 medications on their active list, and ideally physicians dealing with challenging cases such as these won't have to scroll to view all of a patient's medications at once.</p>
					<p>All instances of a medication (e.g. citalopram) will occur in the same timeline, even if they involve different tablet strengths (10 mg, 20 mg, or 40 mg) or occur at distinct points in time (say, an eight month course four years ago, and another course for the past twelve months).</p>
					
					<div class="example" id="gal-2-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.4</span>
							<span class="ex-caption">Medication Timeline</span>
						</div>
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">2.4 a</span> Medication Timeline Showing Drug Dosages for "Today"</div>
									<a class="fancybox" data-fancybox-group="gallery-6" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Gallery 2.4 a - Medication Timeline Showing Drug Dosages for 'Today'">
									<img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" alt="Medication Timeline Showing Drug Dosages for Today" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">2.4 b</span> How to Read the Timeline</div>
									<a class="fancybox" data-fancybox-group="gallery-6" href="./assets/images/examples/medication-list/UM_EHR_0010_notated.png" title="Gallery 2.4 b - How to Read the Timeline">
									<img src="./assets/images/examples/medication-list/UM_EHR_0010_notated.png" class="scale-with-grid" alt="How to Read the Timeline" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.4 c</span> Special Cases <span class="capt-desc">&mdash; PRN (as needed) medications and medications with no fixed maximum dose</span></div>
									<a class="fancybox" data-fancybox-group="gallery-6" href="./assets/images/examples/medication-list/UM_EHR_0011_notated-2.png" title="Gallery 2.4 c - Special Cases - PRN (as needed) medications and medications with no fixed maximum dose">
									<img src="./assets/images/examples/medication-list/UM_EHR_0011_notated-2.png" class="scale-with-grid" alt="PRN medications have no fixed maximum dose" /></a>
								</div></li>
							</ul>
						</div>
					</div>
					<p>The medication timeline we illustrate incorporates some innovative interface usability features predicated on cognitive science. The efficient “high-level overview” shows the timeline for a patient’s complete list of medications in a single view. This tool will eliminate the need for the user to try and hold all these disparate pieces of information in her working memory, or to make written notes just to keep track of the details scattered across several EHR views. A physician looking at this visualization will pick up on <a href="./human-factors.php#preattentive-attributes" target="_blank">preattentive attributes</a><span class="print-only"> (See Prattentive Attributes in the Human Factors chapter)</span> such as color, length, and <a href="./human-factors.php#proximity" target="_blank">proximity</a><span class="print-only">(See Proximity in the Human Factors chapter)</span>, and will be able to discern patterns in these far more easily than she might see them in text or numerical data.</p>
					<p>Our physician will also be able to zoom in on areas of interest and explore them in more detail. The EHR can provide her with explanations, dose details, and even adherence information if pharmacy refill data or patient-reported adherence data is available. This will further assist our physician to confirm hunches and develop new questions to pursue.</p>
					<p>The EHR can also display any episodic medications a patient has been prescribed, such as PRN medications for pain, nausea, asthma exacerbations, etc. In <a href="#gal-2-5">Gallery 2.5</a>, these are represented by a white bar. The EHR will display that a patient has used these medications by means of additional visual cues. An EHR might indicate pharmacy dispense events with a square or dot, and patient reports of medication use with a small vertical hash mark.</p>
					<p>EHR filtering can be capable of showing only active medications, discontinued medications, or both, as needed. This will help physicians answer other questions that arise during their inquiries (“Why was this medication stopped last December, and what made the patient switch to this alternative medication?”).</p>
					<p>For the timeline, we used monochrome (grayscale) to convey most information. EHRs with specific color schemes could adapt our black scheme for conveying a maximum number to a “darkest blue” or “darkest green”. We used color sparingly, to alert physicians to issues such as dosages over the recommended maximum dose. In general, it’s a good idea to design in monochrome first. You can then add color sparingly to convey meaning in a way that won’t distract the user. Remember that some users will not perceive color. In our example, we combined color and cross hatching when we needed to indicate a maximum dose to make sure that no one missed crucial information due to this quite common disability. You can make sure you’ve designed for maximum accessibility by printing your design in grayscale and checking that all the information it is supposed to convey is still visible.</p>
					<p>Above all, the text must be legible. On our timeline, the drug names are left-justified, which makes them easier to read. The dose, displayed in either black or white, contrasts with the background. Experienced, dexterous users can comfortably manually zoom in on our timeline, but even absolute beginners can use the buttons that allow them to quickly zoom in on commonly-used, useful time periods (such as “the last three months” or “the last year”).</p>
					<p>Our medication timeline aims to accommodate every conceivable user: physicians, nurses, patients, caregivers, pharmacists, mental health professionals, health coaches, and all other medical specialists. It can accommodate long lists of medications. A dozen medications can be quite common. Twenty medications would not be surprising. Thirty medications, sadly, may not be rare. The medication timeline handles the visual burden with ease. It’s a tool for data visualization, whose mantra is “overview first, then zoom and filter, then details-on-demand.” Let’s look at <a href="#gal-2-5">Gallery 2.5</a> to demonstrate how.</p>
					<div class="print-only page-break"></div>
					<div class="example" id="gal-2-5">
						<div class="ex-title">
							<span class="ex-type">Gallery 2.5</span>
							<span class="ex-caption">Medication Timeline</span>
						</div>
						
						<div id="cbp-fwslider-5" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">2.5 a</span> Instructions on How to Read the Timeline</div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0001_tutorial.png" title="Gallery 2.5 a - Instructions on how to read the timeline">
									<img src="./assets/images/examples/medication-list/UM_EHR_0001_tutorial.png" class="scale-with-grid" alt="Instructions on how to read the timeline" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 b</span> Active Medications in the Timeline</div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Gallery 2.5 b - Active Medications in the Timeline">
									<img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" alt="Active Medications in the Timeline" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 c</span> Grab the Scrubber <span class="capt-desc">&mdash; Drag it across the timeline to look at more details about certain dates.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0002_drag.png" title="Gallery 2.5 c - Grab the Scrubber - Drag it across the timeline to look at more details about certain dates">
									<img src="./assets/images/examples/medication-list/UM_EHR_0002_drag.png" class="scale-with-grid" alt="Drag scrubber to look at more details about certain dates" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 d</span> Dragging the Scrubber Further Back in Time <span class="capt-desc">&mdash; Medications not yet prescribed appear as grayed out names, and the labels disappear.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0003_drag2.png" title="Gallery 2.5 d - Dragging the Scrubber Further Back in Time - Medications not yet prescribed appear as grayed out names, and the labels disappear">
									<img src="./assets/images/examples/medication-list/UM_EHR_0003_drag2.png" class="scale-with-grid" alt="Drag Scrubber Back in time. Medications not yet prescribed grayed out names and labels disappear" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 e</span> Show All Medications <span class="capt-desc">&mdash; Active medications are at the top, inactive medications are at the bottom.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0004_show-all.png" title="Gallery 2.5 e - Show All Medications - Active medications are at the top, inactive medications are at the bottom">
									<img src="./assets/images/examples/medication-list/UM_EHR_0004_show-all.png" class="scale-with-grid" alt="Active medications are at the top, inactive medications are at the bottom" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 f</span> Tap on a Medication Line to See More Details</div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0005_hover.png" title="Gallery 2.5 f - Tap on a Medication Line to See More Details">
									<img src="./assets/images/examples/medication-list/UM_EHR_0005_hover.png" class="scale-with-grid" alt="Tap on a Medication Line to See More Details" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 g </span>Expanding a Bar Reveals Details that Influenced a Patient’s History with a Medication <span class="capt-desc">&mdash; Such as their reason for discontinuing it. Access other details (pharmacy, prescriber, etc) by linking a drug timeline to that drug in the interactive table.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" title="Expand a Bar to Reveal Details on a Patient’s History with a Medication">
									<img src="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" class="scale-with-grid" alt="Click to expand a bar"/></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">2.5 h </span>Back to Where We Started</div>
									<a class="fancybox" data-fancybox-group="gallery-7" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Gallery 2.5 h - Back to Where We Started - Active medications in the timeline">
									<img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" alt="Active medications in the timeline" /></a>
								</div></li>
							</ul>
						</div>
					</div>

					<p>See the Timeline in action in this short demo video.</p>
					<div class="example" id="vid-2-1">
						<div class="ex-title">
							<span class="ex-type">Video 2.1</span>
							<span class="ex-caption"><a href="http://vimeo.com/99496442" class="link" target="_blank">Watch the Demo Video of the Timeline Prototype</a> <span class="capt_desc">(4:29)</span></span>
						</div>
						<iframe class="video scale-with-grid" src="http://player.vimeo.com/video/99496442?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;" width="750" height="423"></iframe>
					</div>
					<div class="print-only page-break"></div>
					<h4>Try It Out</h4>
					<p>We’ve made an interactive prototype timeline you might like to try out. Imagine a few clinical tasks (we've listed some suggestions below) and, as you work through them, compare this prototype to the tools in your existing EHR and see the difference our changes make in your user experience. Try timing yourself doing a task on the prototype and a friend or colleague doing the same task in your current EHR. Is one tool more accurate for you?</p>
					<p>Note that this is an early prototype with known limitations we hope to address in future versions of the book (e.g. improved zooming, better labels for the time axis, customizable use of color, access to notes and details about reason for changes, filters, etc.) </p>
					<p>For this prototype, assume "today" is September 18, 2013.</p>
					<div class="example" id="int-2-3">
						<div class="ex-title">
							<span class="ex-type">Interactive 2.3</span>
							<span class="ex-caption">Medication Timeline Prototype <a href="../timeline/" class="button" target="_blank">Try it out!</a></span>
						</div>
							<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" title="Interactive 2.3 - Try Our Medication Timeline Prototype">
							<img src="./assets/images/examples/medication-list/UM_EHR_0000_Annotated-Timeline.png" class="scale-with-grid" alt="Try our medication timeline prototype" /></a>
						<div class="print-only">
							<p>Try it out: <a>InspiredEHRs.org/timeline/</a></p>
							<p>Download the code: <a>github/goinvo/ehr</a></p>
						</div>
					</div>

					<h4 id="timeline-tasks">Try These Tasks</h4>
					<ol>
						<li>Navigate so that you can see the starting date, September 18, 2013, by dragging the gray shaded area (the scrubber) in the bottom timeline. (We set a current date of September 18th so our prototype will work both now and for years to come).</li>
						<li>What medication did the patient start taking most recently? About when did he start taking it?</li>
						<li>Which medication did the patient stop taking most recently?</li>
						<li>Drag the scrubber at the bottom of the frame until you can see a 5-year timeline.</li>
						<li>Which drugs did the patient stop taking, and then start taking again?</li>
						<li>Try dragging the list of medication names on the right side of the frame towards the left. Notice that some names disappear. Only the drugs and the dosages the patient was taking at the point in time you’ve moved the scrubber to will show up on the list.</li>
					</ol>
					<h4>Future Directions for Medication Timeline</h4>
					<p>Our timeline doesn’t yet provide all the answers. We haven’t attempted to address the data needs of complex regimens like chemotherapy, or the variables involved in pediatric dosing. Other clinical tasks really demand a historical view that integrates other clinical data. For example, warfarin anticoagulation management requires details about prior warfarin dose changes, other medication changes, and prothrombin time (also known as protime, or PT or INR) lab results. Insulin management requires physicians to be able to simultaneously view recent blood glucose results, hemoglobin A1c results, diet and activity details, and sometimes other details about exceptions to the patient’s usual condition or activities.</p>
					<p>A graphical display of laboratory values to accompany the timeline may help physicians even more. An ideal timeline for cases such as these would allow physicians to see what medication changes, if any, preceded a rise in laboratory markers of liver injury, or how a blood pressure medication affected electrolytes and kidney function. This type of display could enhance patients’ safety and quality of care by presenting information in a way that makes currently obscure patterns and phenomena crystal clear for the user.</p>

					<div class="quicktip" id="medication-list-tasks">
						<div class="sidebar cf">
							<h4>Different Medication List Designs Address Different Users’ Tasks</h4>
							<p><span class="a">Read more</span></p>
							<div class="qt-content show">
								<p><strong>For Prescribers</strong></p>
								<table class="sidebar-table" id="prescribers">
									<thead>
										<tr>
											<th>User Tasks</th>
											<th colspan="3">Capabilities</th>
										</tr>
										<tr>
											<td></td>
											<th>Simple List</th>
											<th>Interactive Table</th>
											<th>Medication Timeline</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Scan the list quickly</strong></td>
											<td>●</td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Manage treatment decisions</strong> <br /><span>(Big picture overview to guide decisions)</span></td>
											<td>●</td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Renew medications</strong> <br /><span>(For when to renew and for making adjustments)</span></td>
											<td></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Perform medication reconciliation</strong> <br /><span>(Comparing two or more lists at transitions of care)</span></td>
											<td></td>
											<td>● <br /><span>but see later chapter</span></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Review time course</strong></td>
											<td></td>
											<td></td>
											<td>●</td>
										</tr>
										<tr>
											<td><strong>Manage temporary changes</strong>
												<p>Brief courses (steroid bursts or intermittent treatment such as chemotherapy)</p>
												<p><strong>Adjustments around procedures</strong> (adjustments &amp; temporary medications needed around the time of surgery)</p>
											</td>
											<td></td>
											<td>● <br /><span>If sort by "expected stop date"</span></td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Recall tried &amp; failed medication courses</strong> <br /><span>(What was effective, what wasn't, and why?)</span></td>
											<td></td>
											<td></td>
											<td>● <br /><span>But only if the details are recorded by the users</span></td>
										</tr>
										<tr>
											<td><strong>Assess adherence</strong> <br /><span>(Are refills on time? Are doses taken as planned?)</span></td>
											<td></td>
											<td></td>
											<td>● <br /><span>Depends on additional data, such as dispense data or patient reporting</span></td>
										</tr>
									</tbody>
								</table>
								<h4>For Patients</h4>
								<table class="sidebar-table" id="patients">
									<thead>
										<tr>
											<th>User Tasks</th>
											<th colspan="2">Capabilities</th>
										</tr>
										<tr>
											<td></td>
											<th>Simple List</th>
											<th>Interactive Table</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><strong>Scan or remember the list</strong></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Share the list with others</strong></td>
											<td>●</td>
											<td></td>
										</tr>
										<tr>
											<td><strong>Restock the <a href="http://en.wikipedia.org/wiki/Pill_organizer" class="link" target="_blank">pill organizer</a></strong> <br /><span>(Shows which pills go in which slots of those little weekly boxes)</span></td>
											<td></td>
											<td>● <br /><span>barely</span></td>
										</tr>
										<tr>
											<td><strong>Remember daily doses</strong> <br /><span>(Reminds users about daily and less frequent doses and "less than daily" doses. Enables users to check items off the list when they’ve taken them)</span></td>
											<td>●</td>
											<td>●</td>
										</tr>
										<tr>
											<td><strong>Remember pharmacy refills</strong> <br /><span>(Helps users coordinate trips to the pharmacy and ask their doctors for renewals)</span></td>
											<td></td>
											<td>● <br /><span>Would need data from pharmacy, or from bottle</span></td>
										</tr>
										<tr>
											<td><strong>Update list at end of doctor visit</strong> <br /><span>(Creates a final list that takes into account all the changes to the medication list that have been made during a given clinical encounter)</span></td>
											<td></td>
											<td>●</td>
										</tr>
									</tbody>
								</table>
							</div><!--end qt-content-->
						</div><!--end sidebar-->
						<div class="tip"></div>
					</div><!--end quicktip-->
				</div>
			</div>
		</section><!--end section timeline-->

		<section id="summary" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>2.4 Summary</h3>
					</div>
						<ol>
							<li>When designing EHR tools, consider the user and the task they’ll be performing. This will help you decide what functions and details a physician needs when using a particular medication list view.</li>
							<li>Use <a href="./human-factors.php#preattentive-attributes" target="_blank">preattentive attributes</a><span class="print-only"> (See Preattentive Attribute in the Human Factors chapter)</span> (like color, size, shape and alignment) to draw the user’s attention to the salient details.</li>
							<li>Design in monochrome first, then add color sparingly and meaningfully where it can add information without distracting the user.</li>
							<li>Remember that humans have very limited <a href="./human-factors.php#working-memory" target="_blank">working memory</a><span class="print-only"> (See Working Memory in the Human Factors chapter)</span>, especially for complex or compound items like medications and dosages. Where possible, put information directly in view. Eliminate the need for physicians to remember details from one step to the next in a task sequence.</li>
							<li>Enhance users’ situational awareness by giving them an overview of all the key details.</li>
							<li>Reduce users' <a href="./human-factors.php#cognitive-load" target="_blank">cognitive load</a><span class="print-only"> (See Cognitive Load in the Human Factors chapter)</span>. Do the math for them. Design to minimize repetitive reading. Present the information directly instead of requiring the user to recall it.</li>
							<li>Remember the data visualization mantra: overview first, then zoom and filter, then details-on-demand.</li>
							<li>Design to accommodate large medication lists. Remember that it’s not uncommon for some patients to have 15-20 medications on their active list. Try to design lists that don’t require users to scroll to see all the medications at once.</li>
						</ol>
				</div>
			</div>
		</section><!--end timeline section-->
		
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
							<li class="medication-list">
								<a class="prev-ch" href="./about-this-book.php"><span class="prev"></span><span class="ch-name">About this Book</span></a> 
								<a class="next-ch" href="./medication-reconciliation.php"><span class="next"></span><span class="ch-name">Medication Reconciliation</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php include './footer.php'; ?>

		
					</div>
					<hr />
					
					<div class="section_cite">
						<h6>References</h6>
						<ol>
							<li>Profile photo in interfaces by <a href="https://www.flickr.com/photos/pedronchi/" target="_blank">pedronchi</a></li>
						</ol>
					</div>
				</div>
			</div>
		</section>

	</section>
</div><!--end wrapper-->
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
			$( '#cbp-fwslider-4' ).cbpFWSlider();
			$( '#cbp-fwslider-5' ).cbpFWSlider();

			var destination = document.URL;
			var index = destination.indexOf('#');
			
			if(index >= 0) {
				var navHeight = $('nav.main').height() + 40;
				destination = destination.substring(index);
				destination = $(destination).offset().top;
				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination-navHeight}, 500);
			}
			
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				
				helpers : {
					title : {
						type : 'inside'
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



