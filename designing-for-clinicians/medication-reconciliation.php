<?php $pageTitle='Medication Reconciliation'; ?>
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
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/jquery.fancybox.css?v=2.1.5" />
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="medication-reconciliation">
	<!--php include './nav.php';-->
	<nav class="main" role="navigation">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="medication-reconciliation">
						<a href="./medication-list.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
						<a href="./medication-reconciliation.php"><span class="ch-name">Medication Reconciliation</span></a> 
						<a href="./allergy-list.php"><span class="next"></span><span class="next-text">Next</span></a>
						<div class="section-nav">
							<ul>
								<li><a href="./medication-reconciliation.php#inpatient">3.1 Inpatient Medication Reconciliation</a></li>
								<li><a href="./medication-reconciliation.php#ambulatory">3.2 Ambulatory Medication Reconciliation</a></li>
								<li><a href="./medication-reconciliation.php#summary">3.3 Summary</a></li>
							</ul>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-3" class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>3</h2>
					<h2>Medication Reconciliation</h2>
					<div class="subheader"><p>Exploit human factors principles to facilitate this difficult but important task.</p></div>
				</div>
			</div>
		</div>
		<section id="medication-reconciliation" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Medication reconciliation is the comparison and combining of two or more medication lists. It usually involves a conversation between the patient and a health care professional, and can occur in many different situations. In this chapter, we will explore medication reconciliation scenarios and EHR designs that might be facilitated in inpatient and ambulatory settings. The first section focuses on one example of medication reconciliation in an <strong>inpatient</strong> setting. It describes a functional prototype called “Twinlist” and illustrates how Twinlist could be used when a patient is being discharged from the hospital. The second section focuses on medication reconciliation in the <strong>ambulatory</strong> setting, and focuses on the patient's role in annotating and correcting their EHR medication list at the very beginning of visits.</p>
				</div>
			</div>
		</section>
		
		<section id="inpatient" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>3.1 Inpatient Medication Reconciliation</h3>
					<p>Consider this inpatient clinical scenario:</p>
					<div class="scenario"><h4>Inpatient Clinical Scenario &mdash; A Patient with Chest Pain Is Discharged from the Hospital</h4>
						<p>Mr. Jones is a 74-year-old, married businessman, now retired. He’s being treated for coronary artery disease (he received a stent at age 70), constipation, diabetes, hyperlipidemia, GERD, hypertension, and mild dementia. His primary care physician, Dr. Barnes, sent Mr. Jones to the hospital Monday morning after his wife insisted he go to the clinic because he was having trouble breathing and was rubbing his chest. He had been doing fine until sometime the previous night. His wife said he had seemed quite well Sunday afternoon, when two of their sons came over to watch the game with him. They made it “a little tailgate party, hot dogs with sauerkraut and everything."</p>
						<p>Examining Mr. Jones, the hospital physician found moderate pulmonary congestion, but no EKG changes. He tested negative for Troponin. Because of his past medical history and the strong history of Myocardial infarction (MI) in his family, he was admitted and treated. By Wednesday afternoon, Mr. Jones is ready to leave and can be discharged from the hospital. One of the medical house officers is discharging Mr. Jones and as part of this process, reconciling his medications.</p>
					</div>
					<h4>3.1.1 A Prototype for Medication Reconciliation</h4>
					<p>In this scenario, the physician discharging the patient has to actively compare two lists:</p>
						<ol>
							<li>The list of medications the patient was taking at home (e.g. recorded by an intake nurse when the patient arrived at the hospital, or obtained from a different EHR system)</li>
							<li>The list of medications on the last day of the patient’s hospital stay</li>
						</ol>
					
					<p>Our physician will then decide which medications could be continued after the patient is discharged and which should be stopped.</p>
					<p>Let’s watch a short video about a prototype called “Twinlist,” an award-winning demonstration of a proposed medication interface.</p>
					<div class="example" id="vid-3-1">
						<div class="ex-title">
							<span class="ex-type">Video 3.1</span>
							<span class="ex-caption"><a href="http://www.youtube.com/watch?v=YXkq9hQppOw&amp;feature=youtu.be" class="link" target="_blank">Watch the TwinList Demo Video</a> <span class="capt_desc">(2:10)</span></span>
						</div>
						<object class="twinlist" width="960" height="720"><param name="movie" value="//www.youtube.com/v/YXkq9hQppOw?hl=en_US&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/YXkq9hQppOw?hl=en_US&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="960" height="720" allowscriptaccess="always" allowfullscreen="true"></embed></object>
					</div>
					<div class="print-only page-break"></div>
					<p>If you’d like to explore Twinlist in more detail, try the interactive prototype:</p>
					<div class="example" id="int-3-1">
						<div class="ex-title">
							<span class="ex-type">Interactive 3.1</span>
							<span class="ex-caption">Demo of Twinlist <span class="print-only a">(http://tinyurl.com/kljlkhs)</span><a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_APPENDECTOMY__&amp;version=__VERSION_FULL__&amp;animate=__AUTO_ANIMATE_ON__" target="_blank" class="button">Try it out!</a> (Preferred browsers: Chrome and Safari)</span>
						</div>
					</div>
					<div class="quicktip" id="learn-more-twinlist">
						<div class="sidebar cf">
							<h4>Learn More</h4>
							<p class="preview">To learn more about Twinlist, visit the <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/" class="link" target="_blank">Twinlist project on the University of Maryland website</a>.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>To learn more about Twinlist, visit the <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/" class="link" target="_blank">Twinlist project on the University of Maryland website</a>. You will find additional videos there that demonstrate advanced features and design variants. You can also experiment using <a href="http://tinyurl.com/k5b4kmx" class="link" target="_blank">Twinlist with larger datasets</a>.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<p>Here are some of Twinlist’s features that make it an effective interface:</p>
						<ol>
							<li><a href="./human-factors.php#gestalts">Spatial grouping</a><span class="print-only"> (See Gestalts in the Human Factors chapter)</span>: The closer things are, the more alike they are.</li>
							<li>Animation: Users can quickly learn how the drugs were grouped.</li>
							<li>Highlighting: Key differences are visible and facilitate decision-making.</li>
							<li>Rapid selection: The largest rectangular buttons that list drug information are easy to click.</li>
						</ol>
					
					<div class="print-only page-break"></div>
					<p>Let's look through some individual images of Twinlist (<a href="#fig-3-1">Figure 3.1</a> to <a href="#fig-3-5">3.5</a>) to review the details. This illustrates medication reconciliation during hospital discharge.</p>
					<div class="example" id="fig-3-1">
						<div class="ex-title">
							<span class="ex-type">Figure 3.1</span>
							<span class="ex-caption">The Two Lists Side by Side <span class="capt-desc">&mdash; Before Twinlist starts matching similar drugs</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png" title="Figure 3.1 - The Two Lists Side by Side - Before Twinlist starts matching similar drugs">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png" class="scale-with-grid" alt="Intake and ambulatory Lists Side by Side before matching" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-2">
						<div class="ex-title">
							<span class="ex-type">Figure 3.2</span>
							<span class="ex-caption">The Identical Drugs Have Now Moved to the Center, While the Unique Drugs Have Moved to Their Respective Sides <span class="capt-desc">&mdash; Similar drugs (e.g. Aricept and donepezil) have aligned below these, while the differences between the similar drugs highlighted in yellow.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png" title="Figure 3.2 - The Identical Drugs Have Now Moved to the Center, While the Unique Drugs Have Moved to Their Respective Sides - Similar drugs (e.g. Aricept and donepezil) have aligned below these, while the differences between the similar drugs highlighted in yellow." >
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png" class="scale-with-grid" alt="Identical Drugs Move to the Center, Unique Drugs Move to The Sides" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-3">
						<div class="ex-title">
							<span class="ex-type">Figure 3.3</span>
							<span class="ex-caption">Pointer Hovers over a Drug <span class="capt-desc">&mdash; (Amaryl) That drug is highlighted with a dark background. Similar drugs are also highlighted (glimepiride). Additional details of the drug appear at the bottom of the screen.</span></span>
						</div>
						<a class="fa
						ncybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png" title="Figure 3.3 - Pointer Hovers over a Drug - (Amaryl) That drug is highlighted with a dark background. Similar drugs are also highlighted (glimepiride). Additional details of the drug appear at the bottom of the screen" >
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png" class="scale-with-grid" alt="Hover over a Drug and Similar drugs are also highlighted" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-4">
						<div class="ex-title">
							<span class="ex-type">Figure 3.4</span>
							<span class="ex-caption">Clicking on a Drug Selects It and Indicates That It Should Be Retained in the Medication List after Discharge <span class="capt-desc">&mdash; The drug’s background turns green. Clicking again (or using right-clicking if available) deselects the drug and indicates that the drug should be discontinued. Discontinued drugs are grayed-out. Similar drugs are automatically deselected (e.g. here glimepiride). Swiping gestures can be used on touchscreen devices such as the iPad.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png" title="Figure 3.4 - Clicking on a drug selects it and indicates that it should be retained in the medication list after discharge. The drug’s background turns green. Clicking again (or using right-clicking if available) deselects the drug and indicate that the drug should be discontinued. Discontinued drugs are grayed-out. Similar drugs are automatically deselected (e.g. here glimepiride). Swiping gestures can be used on touchscreen devices such as the iPad.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png" class="scale-with-grid" alt="drug becomes bright green when selected" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-5">
						<div class="ex-title">
							<span class="ex-type">Figure 3.5</span>
							<span class="ex-caption">The Final Reconciled Medication List Can Be Reviewed <span class="capt-desc">&mdash; Look at all the <a href="./design-principles.php#dark-side-of-color">bright green</a><span class="print-only"> (See The Dark Side of Color in the Design Principles chapter)</span> selected drugs, and it’s clear what lists they’ve come from.</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png" title="Figure 3.5 - The Final Reconciled Medication List Can Be Reviewed - Look at all the bright green selected drugs, and it’s clear what lists they’ve come from." >
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png" class="scale-with-grid" alt="The final reconciled list with all the selected drugs bright green, and it’s clear what lists they’ve come from." /></a>

					</div>

					<h4>3.1.2 Human Factors Principles Used in Twinlist</h4>
					<p>The Twinlist prototype uses a number of human factors principles to make it efficient and safe:</p>
						<ol>
							<li>Identifying similar drugs is facilitated by preprocessing the data.<ol>
								<li>An algorithm matches ‘identical’ medications and merges them, thus reducing the physician’s mental effort (cognitive load).</li>
								<li>An algorithm matches ‘similar’ medications and aligns them on the same horizontal row. This reduces the need for repetitive visual scanning of the two lists.</li>
								<li>‘Unique’ medications appear in only one column and move to the perimeter of the display.</li>
							</ol></li>
							<li>The prototype takes advantage of the way the human brain processes information (specifically “<a href="./human-factors.php#preattentive-attributes">preattentive attributes</a>”)<span class="print-only"> (See Preattentive Attributes in the Human Factors chapter)</span> by spatially grouping like items together.<ol>
								<li>These <a href="./human-factors.php#gestalts">spatial groupings</a><span class="print-only">(See Gestalts in the Human Factors chapter)</span> allow physicians to quickly identify the key groups of medications (those which are identical, similar, and unique). The more different two drugs are, the farther apart they appear horizontally. Identical drugs are in the center.</li>
								<li>Differences between similar but non-identical medications are highlighted in golden-yellow, which reduces the need for physicians to repeatedly scan, read, and compare the list items.</li>
							</ol></li>
							<li>The animation helps users quickly learn and understand the groupings of drugs. As the user grows familiar with the tool, the animation can be sped up or turned off.<ol>
								<li>Making the list compact helps save vertical space. Similar but non-identical drugs, which physicians may have to think harder about how to reconcile, are together in the lower section of the screen.</li>
								<li>Identical drug pairs merge into the center of the chart and are thus visually identified as perfect matches.</li>
							</ol></li>
							<li>Physicians can interact with the interface to discover more relationships.<ol>
								<li>Hovering over a drug displays more details about the drug at the bottom of the screen, such as drug class or indication (i.e. the problem being treated). It also highlights similar drugs. Clicking to select a drug in a “similar but not identical” group rejects the others.</li>
								<li>The menu functions in a way that allows users to take actions on multiple drugs at the same time.</li>
								<li>Users can easily change or reverse their decision by clicking on drugs to toggle them through accepted, rejected, or undecided states.</li>
							</ol></li>
							<li>The interface keeps the information users need to make decisions visible and minimizes the need for users to rely on their ability to recall off-screen information.</li>
						</ol>

					<h4>3.1.3 Other Considerations</h4>
					<p>Inpatient medication reconciliation also involves adding new drugs, e-prescribing, and generating documentation. It involves conversations with the patient and caregivers, at the time of admission and again at the time of discharge. To successfully reconcile inpatient medication lists, physicians must understand two aspects of medication management:
						<ol>
							<li>Medication administration<ol>
								<li>How much insulin and analgesics were prescribed to this patient in the last few days?</li>
								<li>Did the patient receive all the doses, or were some doses delayed or not administered?</li>
								<li>Did the patient receive any PRN doses (i.e. administered as the situation arises)? How many doses were given?</li>
							</ol></li>
							<li>Clinical assessment<ol>
								<li>Since the patient will be leaving the hospital, intravenous medications need to be switched to oral versions. Will the patient be able to tolerate the oral version?</li>
								<li>What should the starting dose of that medication be as the oral version?</li>
								<li>How soon after the patient leaves the hospital will the doses need to be adjusted, and who will adjust them?</li>
								<li>Can the patient afford the needed medications? Will the insurance cover the medications?</li>
							</ol></li>
						</ol>
					</p>
					<p>Physicians commonly care for patients who have moved from one unit to another. A patient might even move several times during the course of one visit &mdash;for example, from the emergency room to a general nursing unit, intensive care unit, step-down unit, and back to general nursing unit again. Critically ill inpatients may be unable to take their medications orally and may be receiving several medications intravenously in the intensive care unit. As patients begin to recover, they might resume their previous medications at reduced doses which may gradually change throughout their hospital stay. When patients are discharged from the hospital, they may need to resume taking home medications, some of which may need dosage adjustments, and patients may need to take some additional medications.</p>
				</div>
			</div>
		</section><!--end section inpatient-->
		
		<section id="ambulatory" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>3.2 Ambulatory Medication Reconciliation</h3>
					</div>
					<p>Physicians use two medication lists to reconcile medications in an ambulatory setting: </p>
					<ol>
						<li>What it says in the EHR</li>
						<li>What the patients report they actually take</li>
					</ol>
					<p>Healthcare team members can collect information about patients’ adherence to their medication regimens either by interviewing the patients or by giving the patients a form to fill out. The latter option may save the office staff time. The diagram below shows a simplified workflow for medication reconciliation in the outpatient setting.</p>
					<div class="example" id="fig-3-6">
						<div class="ex-title">
							<span class="ex-type">Figure 3.6</span>
							<span class="ex-caption">Simplified Medication Reconciliation Workflow in Ambulatory Setting</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/ambulatorychart.png" title="Figure 3.6 - Simplified Medication Reconciliation Workflow in Ambulatory Setting">
							<img src="./assets/images/examples/medication-reconciliation/ambulatorychart.png" class="scale-with-grid" alt="Simplified Medication Reconciliation Workflow in Ambulatory Setting" /></a>
					</div>
					<p>The medication reconciliation workflow may vary from clinic to clinic, depending on what roles said clinic assigns various members of its staff. In some clinics, nurses interview patients and update the medication list, adding annotations about patients’ adherence where necessary. Physicians subsequently confirm these annotations with the patients and seek clarification about any uncertain details. Other clinics give patients printouts of their current medication list as recorded in the EHR, which the patients can then annotate. In other clinics, physicians review medication lists with the patients in the course of their visits.</p>
					<p>Some specialists, particularly those in surgical subfields, may review medication lists less precisely, focusing only on the medications they have prescribed, such as post-operative antibiotics or pain medications. These specialists need to be able to reconcile the medications they’re responsible for without assuming responsibility for the entire medication list. Reconciliation interfaces might offer a means of conveying that specialists have reconciled the medications they’re responsible for, and only those medications. It might be accomplished by giving users the option of clicking on ‘Acknowledged’ or ‘Reviewed but not approved’ in addition to the fuller ‘Reconcile &amp; Sign.’</p>
					<p>During the visits, patients and physicians agree upon new plans of action. Physicians might then prescribe and makes other changes in the medication list. Patients then get updated copies of their list to take home.</p>
					<div class="scenario"><h4>Ambulatory Clinical Scenario &mdash; Patient with Chronic Pain Reports Changes Other Physicians Have Made to Her Medication List</h4>
						<p>Mrs. Stanton is a high school teacher who was seriously injured in a motor vehicle accident. Mrs. Stanton is under the care of an orthopedic surgeon and a pain management specialist as well as her primary care doctor. Today's visit with Dr. Barnes, her primary care doctor, involves several changes in her medication list.</p>
						<p>At the beginning of the visit Mrs. Stanton receives the medication list her primary doctor has on file for her. She notices it’s not quite up to date. It does not record that her pain specialist recently started her on a new medication, nortriptyline, and stopped another one, hydrocodone-acetaminophen, or that her orthopedic surgeon increased her dose of Celebrex. Mrs. Stanton needs to indicate those three changes on the list.</p>
					</div>

					<h4>3.2.1 The Patient Reviews the Medication List</h4>
					<p>The three discrepancies the patient noted in the above scenario are typical of the type of problems patients flag when reviewing their medication lists in ambulatory, primary care settings. For the EHR to offer safe, effective clinical support (e.g. drug alerts and decision support), it needs to work with an up-to-date medication list.</p>
					<p>Below, you’ll find a design for a simple interface that allows patients to review and update their lists using tablets or desktop computers. Each screen shows only one medication, with its associated details (strength and dosage instructions). This allows the patient to answer questions carefully for each drug. Afterwards, patients can review the list as a whole. They can add drugs and include comments or questions. If the patient knows which of their medications need to be renewed, they can also indicate that.</p>
					<p>We offer a design example with the following series of images (Figures <a href="#fig-3-7">3.7</a> to <a href="#fig-3-12">3.12</a>), illustrating a patient reviewing her medication list for a physician visit.</p>
					<div class="example" id="fig-3-7">
						<div class="ex-title">
							<span class="ex-type">Figure 3.7</span>
							<span class="ex-caption">The Interface Presents Each Drug in the Patient’s Medication List One at a Time, Offering a Few Clearly-Marked Choices <span class="capt-desc">&mdash; The mode of presentation is well suited to a touch interface. A progress bar indicates how many drugs are in the list (and can help users get into a <a href="./human-factors.php#flow-state">flow state</a>)<span class="print-only"> (See Go with the Flow in the Human Factors chapter)</span>.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0011_patient_stepmed_taking.png" title="Figure 3.7 - The interface presents each drug in the patient’s medication list, one at a time. The system offers a few clearly-marked choices. The mode of presentation is well suited to a touch interface. A progress bar indicates how many drugs are in the list (and can help users get into a flow state.)">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0011_patient_stepmed_taking.png" class="scale-with-grid" alt="Patient selects that they are taking a medication" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-8">
						<div class="ex-title">
							<span class="ex-type">Figure 3.8</span>
							<span class="ex-caption">The Patient May Not Be Taking a Drug for Various Reasons <span class="capt-desc">&mdash; A physician countermanded that order, the patient did not tolerate the medication, never filled the prescription, etc.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" title="Figure 3.8 - The Patient May Not Be Taking a Drug for Various Reasons — A physician countermanded that order, the patient did not tolerated the medication, never filled the prescription, etc.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" class="scale-with-grid" alt="Patient selects that they are not taking a medication" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-9">
						<div class="ex-title">
							<span class="ex-type">Figure 3.9</span>
							<span class="ex-caption">“Yes, I’m taking but not as directed.” <span class="capt-desc">&mdash; The answer is enough to prompt the physician to start a conversation about adherence.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0013_patient_stepmed_takingbut.png" title="Figure 3.9 - Yes, I’m taking but not as directed — The answer is enough to prompt the physician to start a conversation about adherence.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0013_patient_stepmed_takingbut.png" class="scale-with-grid" alt="Patient selects that they are taking a medication, but not as directed" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-10">
						<div class="ex-title">
							<span class="ex-type">Figure 3.10</span>
							<span class="ex-caption">The patient may be unsure about a particular medication. <span class="capt-desc">&mdash; She may not recognize the medication name, may be unsure about the exact dose, or may be unsure about something else.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0014_patient_notsure.png" title="Figure 3.10 - The Patient May Be Unsure about a Particular Medication - She may not recognize the medication name, may be unsure about the exact dose, or may be unsure about something else.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0014_patient_notsure.png" class="scale-with-grid" alt="Patient selects that they are taking a medication, but not as directed" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-11">
						<div class="ex-title">
							<span class="ex-type">Figure 3.11</span>
							<span class="ex-caption">The Patient Has Reviewed All the Medications <span class="capt-desc">&mdash; The prompt reminds her to add missing prescriptions. It also prompts her to add any other items she might be taking. The interface allows for fuzzy misspelling and suggests appropriate possible names as the patient begins to type.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0003_patient_addmed.png" title="Figure 3.11 - The Patient Has Reviewed All the Medications - The prompt reminds her to add missing prescriptions. It also prompts her to add any other items she might be taking. The interface allows for fuzzy misspelling and suggests appropriate possible names as the patient begins to type.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0003_patient_addmed.png" class="scale-with-grid" alt="The patient adds medications they are taking that haven't been listed" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-12">
						<div class="ex-title">
							<span class="ex-type">Figure 3.12</span>
							<span class="ex-caption">Final Review from the Patient's Perspective <span class="capt-desc">&mdash; The patient can review the entire list, and can add comments and mark the medications she needs the physician to renew.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0010_patient_endlist.png" title="Figure 3.12 - Final Review from the Patient's Perspective - The patient can review the entire list, and can add comments and mark the medications she needs the physician to renew.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0010_patient_endlist.png" class="scale-with-grid" alt="The patient can review the list, add comments, and mark medications for renewal" /></a>
					</div>
					
					<p>After the patient has reviewed the medication list, the physician must review the patient’s annotated list. They’ll have a conversation about any discrepancies and uncertainties in an effort to resolve them. Then those curated details would be added to the patient's record.</p>
					<div class="quicktip">
						<div class="sidebar cf" id="medication-adherence">
							<h4>Challenge - Medication Adherence</h4>

							<p class="preview"><strong>The Capture of Adherence Information</strong><br /> There are two main ways to capture information about patients medication<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p><strong>The Capture of Adherence Information</strong>
								<br />There are two main ways to capture information about patients' medication adherence (or lack thereof). One is to ask patients to provide the information, and the other is to track information about prescription fills from the e-prescribing network. At the moment, not all pharmacies, pharmacy benefit managers, and insurance plans are linked with e-prescribing networks, but even incomplete databases can complement patients’ reports and help draw more accurate pictures of patients’ adherence patterns.</p>
								<p><strong>Non-Adherence Is Widespread</strong>
								<br />A significant number of patients never fill their prescriptions. In developed countries, an average of 50% of patients with chronic diseases neglect to do so<sup>1</sup>. Patients commonly over-report their degree of adherence, as well. Physicians are encouraged to use language that is non-judgmental. User interfaces can use similar language as well, to encourage patients to give accurate answers. The medication reconciliation process aims to uncover the truth, and from there to allow the patients and physicians to collaboratively align their goals and come up with a plan of care that both parties can get behind.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<div class="quicktip">
						<div class="sidebar cf" id="stop-taking">
							<h4>Why Patients Stop Taking Their Medication</h4>

							<p class="preview">Why don’t people take the medications prescribed for them?<span class="elipsis"> <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Why don’t people take the medications prescribed for them? They may simply never fill the prescription. Sometimes they fill the prescription but don’t take the medication. On other occasions they take the medication for a while, but then stop. Here are a few common reasons behind patients’ non adherence:</p>
									<ol>
										<li>The patient did not purchase the medication because it was costly.</li>
										<li>The patient stopped taking the medication after experiencing side-effects.</li>
										<li>The medication’s side effects outweighed its benefits.</li>
										<li>The patient was afraid of the side-effects.</li>
										<li>The patient didn’t benefit from the medication.</li>
										<li>The patient didn’t believe the medication would help them.</li>
										<li>The patient misunderstood the expected benefits of the medication.</li>
										<li>The patient didn’t trust the physician who prescribed the medication.</li>
									</ol>
								
								<p>Knowing why patients do not take their medication can help physicians make well informed decisions. The physician doesn’t want to increase a patient’s dose of antihypertensive medication if non-adherence is behind uncontrolled blood pressure.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>

					<h4>3.2.2 After the Patient Annotates Her List, the Physician Reviews It</h4>
					<p>Now let’s examine the workflow of physicians as they review and reconcile a patient’s medication list after the patient has annotated it. The patient’s list could be displayed via an interface similar to <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_APPENDECTOMY__&amp;version=__VERSION_FULL__&amp;animate=__AUTO_ANIMATE_ON__" target="_blank">Twinlist</a><span class="print-only"> (http://tinyurl.com/kljlkhs)</span>, or the physician can work with whatever single-list interface the patient just used to review the entire list and enter annotations. Entirely different interfaces are also possible.</p>
					<p>The list is ready for the physician to review, with the patient's annotations included. Let's look at our design example. (<a href="#fig-3-13">Figures 3.13</a> to <a href="#fig-3-16">3.16</a>)</p>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-13">
						<div class="ex-title">
							<span class="ex-type">Figure 3.13</span>
							<span class="ex-caption">The List Is Now Sorted According to the Answers Provided during the Review <span class="capt-desc">&mdash; Actionable items are grouped together: new medications will probably need to be added, medications the patient reports not taking may need to be adjusted or removed, medications the patient is unsure about will have to be discussed, etc. The red and green bars on the left side show whether the patient is “taking” or “not taking” the specific medications.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0007_physician_list2.png" title="Figure 3.13 - The List Is Now Sorted According to the Answers Provided during the Review - Actionable items are grouped together: new medications will probably need to be added, medications the patient reports not taking may need to be adjusted or removed, medications the patient is unsure about will have to be discussed, etc. The red and green bars on the left side show whether the patient is “taking” or “not taking” the specific medications.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0007_physician_list2.png" class="scale-with-grid" alt="The List Sorted According to Answers Provided" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-14">
						<div class="ex-title">
							<span class="ex-type">Figure 3.14</span>
							<span class="ex-caption">The Physician Can Clarify the Details during a Conversation with the Patient, and Then Edit the Comments</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0008_physician_list2_edit.png" title="Figure 3.14 - The physician can clarify the details during a conversation with the patient, and then edit the comments.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0008_physician_list2_edit.png" class="scale-with-grid" alt="The physician clarifies details with the patient" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-15">
						<div class="ex-title">
							<span class="ex-type">Figure 3.15</span>
							<span class="ex-caption">The Physician Can Move Medications <span class="capt-desc">&mdash; Medications can be moved from one group to another, either with a drag and drop gesture or using menu selections. Ideally, by the end of the interview, all the drugs on the list will have moved into the “taking” or “not taking” category. In this figure, Celebrex has been moved to the “taking” category.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0006_physician_list_movemed.png" title="Figure 3.15 - The Physician Can Move Medications - Medications can be moved from one group to another, either with a drag and drop gesture or using menu selections. Ideally, by the end of the interview, all the drugs on the list will have moved into the “taking” or “non taking” category. In this figure, Celebrex is been moved to the “taking” category.">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0006_physician_list_movemed.png" class="scale-with-grid" alt="The Physician Can Move Medications" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-3-16">
						<div class="ex-title">
							<span class="ex-type">Figure 3.16</span>
							<span class="ex-caption">The Physician Has the Option to Confirm the Status of All or Some of the Medications</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0002_physician_endlist_annot.png" title="Figure 3.16 - The Physician Has the Option to Confirm the Status of All or Some of the Medications">
							<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0002_physician_endlist_annot.png" class="scale-with-grid" alt="The Physician Confirms Recommendations" /></a>
					</div>
					<p>The list in Figure 3.16 is the physician’s final review of medication list. Once the physician approves the list by pressing the “Confirm Review” button in the upper right, the EHR updates the medication list in the patient’s record and saves all comments about adherence. The category in which a medication has been placed in the list specifies how the final reconciled medication list is saved in the patient’s record.</p>
					<table class="sidebar-table" id="patient-adherence">
						<thead>
							<tr>
								<th>Category</th>
								<th>Consequence</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Not sure</td>
								<td>Keep the medication in the reconciled list, but mark as “not sure.”</td>
							</tr>
							<tr>
								<td>Not taking</td>
								<td>Remove the medication from the reconciled medication list.</td>
							</tr>
							<tr>
								<td>Taking</td>
								<td>Keep the medication in the reconciled list.</td>
							</tr>
							<tr>
								<td>Taking (but annotated as “not taking” or “not taking as prescribed” by the patient)</td>
								<td>Keep the medication, but preserve the adherence comments from the patient in the record.</td>
							</tr>
						</tbody>
					</table>
					<p>In this design physicians would need to learn the drag and drop functionality (or alternate menu functions and <a href="./human-factors.php#expectations" target="_blank">affordances</a>)<span class="print-only"> (See Our Eyes Have Expectations in the Human Factors chapter)</span> that allow moving medications from one category to another.</p>
					<p>After the medication reconciliation at the start of the visit, the physician takes further information about the patient's medical history, does an examination, makes clinical decisions, and collaborates with the patient to make a plan of action. Their plan might include changing or adding to the patient's medications.</p>
					
					<div class="quicktip" id="uncertainty">
						<div class="sidebar cf">
							<h4>Challenge: Capturing and Presenting Uncertainty</h4>
							<p class="preview">Patients often report uncertainty about their medication list. For instance, patients may not be able to recognize<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Patients often report uncertainty about their medication list. For instance, patients may not be able to recognize or pronounce the names of medications they've been taking for some time. Some people may refer to medications by intended purposes: "a blood pressure medicine.” Conversations outside the formal office visit (via phone or email) may have conveyed information that didn’t make it to the patient’s record.</p>
								<p>Medication reconciliation implies certainty: after it's recorded, the data acquires the status of fact. That certainty is not always justified. We need methods to represent uncertainty in these human aspects of technology. An EHR might represent uncertainty by including text comments or with quantitative measures such as confidence ratings or likelihood algorithms.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<div class="quicktip" id="pill-pictures">
						<div class="sidebar cf">
							<h4>About Using Pill Pictures to Resolve Uncertainty</h4>
							<p class="preview">Images of the pills may help patients identify the medications they are taking. Unfortunately we cannot count on current EHR medication<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Images of the pills may help patients identify the medications they are taking. Unfortunately we cannot count on current EHR medication lists to have the right images because there may be dozens of potential images for a single medication (153 images for lisinopril on <a href="http://www.drugs.com/imprints.php" class="link" target="_blank">drugs.com's pill identifier</a>, and 423 results at <a href="http://pillbox.nlm.nih.gov/pillimage/search.php" target="_blank">http://pillbox.nlm.nih.gov</a>). Patients might also confuse similar looking medications and misidentify what they are taking. Still, having access to pictures during the interview process might be helpful for “simpler” medications that have only a limited number of distinct images.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>	
					
					
				</div>				
			</div>
		</section> <!--end section ambulatory-->
		
		<section id="summary" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>3.3 Summary</h3>
					</div>
					<ol>
						<li>Algorithms that <a href="./human-factors.php#gestalts" target="blank">group or align</a><span class="print-only"> (See Gestalts in the Human Factors chapter)</span> drugs to help physicians recognize their similarities and differences reduce cognitive load.</li>
						<li>Make lists easy to scan visually. Don’t truncate medication names or important details in table views.</li>
						<li>Add <a href="./human-factors.php#expectations" target="_blank">typographic emphasis</a><span class="print-only"> (See Our Eyes Have Expectations in the Human Factors chapter)</span> by using bold or larger font where appropriate.</li>
						<li>Allow medication sorting and filtering (e.g. by prescriber, by diagnosis and/or renewal status)</li>
						<li>Where possible, display a limited number of options. Reveal further options when necessary.</li>
						<li>Ask patients simple, clear questions using <a href="./design-principles#terminology" target="_blank">plain, non-judgmental language</a><span class="print-only"> (See Terminology in the Design Principles chapter)</span>.</li>
						<li>Offer patients simple, clear choices of categorizing and documenting their adherence (e.g. Taking as prescribed; Taking, but not as prescribed; Not taking at all). Include “Other” or “Not sure” options. Provide users with a means to document uncertainty, and make sure that uncertainty is visible in the review list.</li>
						<li>Offer cognitive support for adding new medications. Allow for fuzzy misspelling. Suggest appropriate drug names as the patient begins to type.</li>
						<li>Experiment with innovative methods for capturing uncertainty and improving adherence recording.</li>
					</ol>
					
					
				</div>
			</div>
		</section><!--end section review-->
		
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
							<li class="medication-reconciliation">
								<a class="prev-ch" href="./medication-list.php"><span class="prev"></span><span class="ch-name">Medication List</span></a> 
								<a class="next-ch" href="./allergy-list.php"><span class="next"></span><span class="ch-name">Allergy List</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php include './footer.php'; ?>

						<p>For information about the empirical testing of Twinlist see the <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/" class="link" target="_blank">Twinlist project webpage</a>.</p>
					</div>
					<hr />
					
					<div class="section_cite">
						<h6>References</h6>
						<ol>
							<li>Bosworth, Hayden B., Bradi B. Granger, Phil Mendys, Ralph Brindis, Rebecca Burkholder, Susan M. Czajkowski, Jodi G. Daniel, et al. “Medication Adherence: A Call for Action.” <em>American Heart Journal</em> 162, no. 3 (September 2011): 412–24. doi:10.1016/j.ahj.2011.06.007.</li>
							<li>Profile photo in interfaces by <a href="https://www.flickr.com/photos/amslerpix/" class="link" target="_blank">David Amsler</a></li>
						</ol>
					</div>
				</div>
			</div>
		</section>

	</section>
</div><!--end wrapper-->
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
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