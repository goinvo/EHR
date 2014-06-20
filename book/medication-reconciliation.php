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

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="medication-reconciliation">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-3" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>3</h2>
					<h2>Medication Reconciliation</h2>
					<div class="subheader"><p></p></div>
				</div>
			</div>
		</header>
		<section id="medication-reconciliation" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Medication reconciliation is the comparison and combining of two or more medication lists. It usually involves a conversation between the patient and a health care professional, and can occur in many different situations. In this chapter, we will explore medication reconciliation scenarios and EHR designs that might facilitate them in both the inpatient and ambulatory setting. The first section focuses on one example of medication reconciliation in an <strong>inpatient</strong> setting. It describes a functional prototype called “Twinlist” and illustrates how Twinlist could be used when a patient is being discharged from the hospital. The second section focuses on medication reconciliation in the <strong>ambulatory</strong> setting, and focuses on the patient's role in annotating and correcting their EHR medication list at the very beginning of visits.</p>
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
					<div class="scenario"><h5>Inpatient Clinical Scenario - A Patient with Chest Pain Is Discharged from the Hospital</h5>
						<p>Mr. Jones is a 74-year-old, married businessman, now retired. He’s being treated for coronary artery disease (he received a stent at age 70), constipation, diabetes, hyperlipidemia, GERD, hypertension, and mild dementia. His primary care physician, Dr. Barnes, sent Mr. Jones to the hospital Monday morning after his wife insisted he go to the clinic because he was having trouble breathing and was rubbing his chest. He had been doing fine until sometime during the previous night. His wife said he had seemed quite well Sunday afternoon, when two of their sons came over to watch the game with him. They made it “a little tailgate party, hot dogs with sauerkraut and everything."</p>
						<p>Examining Mr. Jones, the hospital physician found moderate pulmonary congestion, but no EKG changes. He tested negative for Troponin. Because of his past medical history and the strong history of Myocardial infarction (MI) in his family, he was admitted and treated. Now, on Wednesday afternoon, Mr. Jones is ready to leave and can be discharged from the hospital. One of the medical house officers is discharging Mr. Jones and as part of this process, reconciling his medications.</p>
					</div>
					<p>In this scenario, the physician discharging the patient has to actively compare two lists:
						<ol>
							<li>the list of medications the patient was taking at home (e.g. recorded by an intake nurse when the patient arrived at the hospital, or obtained from a different EHR system)</li>
							<li>the list of medications on the last day of the patient’s hospital stay</li>
						</ol>
					</p>
					<p>Our physician will then decide which medications should be continued after the patient is discharged, and which should be stopped.</p>
					<p>Let’s watch a short video about a prototype called “Twinlist,” an award-winning demonstration of a proposed medication interface.</p>
					<div class="example" id="vid-3-1">
						<div class="ex-title">
							<span class="ex-type">Video 3.1</span>
							<span class="ex-caption"><a href="http://www.youtube.com/watch?v=YXkq9hQppOw&feature=youtu.be" class="link" target="blank">Watch the TwinList Demo Video</a> <span class="capt_desc">(2:10)</span></span>
						</div>
						<video controls class="twinlist">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.mp4"  type="video/mp4; codecs=avc1.42E01E,mp4a.40.2">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.webm" type="video/webm; codecs=vp8,vorbis">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.ogv"  type="video/ogg; codecs=theora,vorbis">
							  <p>Your browser does not support HTML5 video, but you can still check out this demo on <a href="http://www.youtube.com/watch?v=YXkq9hQppOw&feature=youtu.be" target="blank">YouTube</a></p>
						</video>
					</div>
					<p>If you’d like to explore Twinlist in more detail, try the interactive prototype:</p>
					<div class="example" id="int-3-1">
						<div class="ex-title">
							<span class="ex-type">Interactive Prototype 3.1</span>
							<span class="ex-caption"><a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_APPENDECTOMY__&version=__VERSION_FULL__&animate=__AUTO_ANIMATE_ON__" target="blank">Interactive Demo of Twinlist</a> <span class="print-only a">(http://tinyurl.com/kljlkhs)</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/Twinlist_interactive.png" title="Twinlist Interactive Demo">
							<img src="./assets/images/examples/medication-reconciliation/Twinlist_interactive.png" class="scale-with-grid" /></a>
					</div>
					<p>To learn more about Twinlist, visit the <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/" class="link" target="blank">Twinlist project on the University of Maryland website</a>. You will find additional videos there that demonstrate advanced features and design variants. You can also experiment with using <a href="http://tinyurl.com/k5b4kmx" class="link">Twinlist with larger datasets</a>.</p>
					<p>Here are some of Twinlist’s features that make it an effective interface
						<ol>
							<li><a href="./human-factors.php#gestalts">Spatial grouping</a>: the closer things are, the more alike they are</li>
							<li>Animation: users can quickly learn how the drugs were grouped.</li>
							<li>Highlighting: key differences are visible and facilitate decision-making</li>
							<li>Rapid selection: the largest rectangular buttons that list drug information are easy to click</li>
						</ol>
					</p>
					
					<p>Let's look through some individual images of Twinlist (Gallery 3.1) to review the details.</p>
					<div class="example" id="gal-3-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.1</span>
							<span class="ex-caption">Design Example (Twinlist): <span class="capt_desc">Medication reconciliation during discharge</span></span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">3.1 a</span> The two lists side by side before Twinlist starts matching similar drugs</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png" title="3.1 a The two lists side by side before Twinlist starts matching similar drugs">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png" class="scale-with-grid" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">3.1 b</span> The identical drugs have now moved to the center, while the unique drugs have moved to their respective sides. Similar drugs (e.g. Aricept and donepezil) have aligned below these, while the differences between the similar drugs highlighted in yellow.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png" title="3.1 b The identical drugs have now moved to the center, while the unique drugs have moved to their respective sides. Similar drugs (e.g. Aricept and donepezil) have aligned below these, while the differences between the similar drugs highlighted in yellow." >
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png" class="scale-with-grid" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">3.1 c</span> When the pointer hovers over a drug (here Amaryl), that drug is highlighted with a dark background. Similar drugs are also highlighted (here glimepiride). Additional details of the drug appear at the bottom of the screen</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png" title="3.1 c When the pointer hovers over a drug (here Amaryl), that drug is highlighted with a dark background. Similar drugs are also highlighted (here glimepiride). Additional details of the drug appear at the bottom of the screen" >
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png" class="scale-with-grid" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">3.1 d</span>  Clicking on a drug selects it and indicates that it should be retained in the medication list after discharge. The drug’s background turns green. Clicking again (or using right-clicking if available) deselects the drug and indicate that the drug should be discontinued. Discontinued drugs are grayed-out.  Similar drugs are automatically deselected (e.g. here glimepiride). Swiping gestures can be used on touchscreen devices such as the iPad.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png" title="3.1 d  Clicking on a drug selects it and indicates that it should be retained in the medication list after discharge. The drug’s background turns green. Clicking again (or using right-clicking if available) deselects the drug and indicate that the drug should be discontinued. Discontinued drugs are grayed-out.  Similar drugs are automatically deselected (e.g. here glimepiride). Swiping gestures can be used on touchscreen devices such as the iPad.">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png" class="scale-with-grid" alt="The drug becomes bright green when selected"  /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">3.1 e</span> The final reconciled medication list can be reviewed by looking at all the <a href="./design-principles.php#dark-side-of-color">bright green</a> selected drugs, and it’s clear what lists they’ve come from.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png" title="3.1 e The final reconciled medication list can be reviewed by looking at all the bright green selected drugs, and it’s clear what lists they’ve come from." >
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png" class="scale-with-grid" alt="The final selection" /></a>
								</div></li>
							</ul>
						</div>
					</div><!--end gallery 3.1-->

					<h5>3.1.1 Human Factors Principles Used in Twinlist</h5>
					<p>The Twinlist prototype uses a number of human factors principles to make it efficient and safe:</p>
						<ol>
							<li>Identifying similar drugs is facilitated by preprocessing the data.<ol>
								<li>An algorithm matches ‘identical’ medications and merges them, thus reducing the physician’s mental effort (cognitive load).</li>
								<li>An algorithm matches ‘similar’ medications and aligns them on the same horizontal row. This reduces the need for repetitive visual scanning of the two lists.</li>
								<li>‘Unique’ medications appear in only one column and move to the perimeter of the display.</li>
							</ol></li>
							<li>The prototype takes advantage of the way the human brain processes information (specifically “<a href="./human-factors.php#preattentive-attributes">preattentive attributes</a>”) by spatially grouping like items together.<ol>
								<li>These <a href="./human-factors.php#gestalts">spatial groupings</a> allow physicians to quickly identify the key groups of medications (those which are identical, similar, and unique). The more different two drugs are, the farther apart they appear horizontally. Identical drugs are in the center.</li>
								<li>Differences between similar but non-identical medications are highlighted in golden-yellow, which reduces the need for physicians to repeatedly scan, read, and compare the list items.</li>
							</ol></li>
							<li>The animation helps users quickly learn and understand the groupings of drugs. As the user grows familiar with the tool, the animation can be sped up or turned off.<ol>
								<li>Making the list compact helps save vertical space. Similar but non-identical drugs which physicians may have to think harder about how to reconcile, are together in the lower section of the screen.</li>
								<li>Identical drug pairs merge into the center of the chart, and are thus visually identified as perfect matches.</li>
							</ol></li>
							<li>Physicians can interact with the interface to discover more relationships.<ol>
								<li>Hovering over a drug displays more details about the drug at the bottom of the screen, such as drug class or indication (i.e. the problem being treated). It also highlights similar drugs. Clicking to select a drug in a “similar but not identical” group rejects the others.</li>
								<li>The menus function in a way that allows users to take actions on multiple drugs at the same time.</li>
								<li>Users can easily change reverse their decision by clicking on drugs to toggle them through accepted, rejected, or undecided states.</li>
							</ol></li>
							<li>The interface keeps the information users need to make decision visible and minimizes the need for users to rely on their ability to recall off-screen information.</li>
						</ol>

					<h5>3.1.2 Other considerations</h5>
					<p>Inpatient medication reconciliation also involves adding new drugs, ePrescribing, and generating documentation. It involves conversations with the patient and caregivers, at the time of admission and again at the time of discharge. To successfully reconcile inpatient medication lists physicians must understand two aspects of medication management:
						<ol>
							<li>Medication administration<ol>
								<li>How much insulin and analgesics were prescribed to this patient in the last few days?</li>
								<li>Did the patient receive all the doses or were some doses delayed or not administered?</li>
								<li>Did the patient receive any PRN doses (i.e. administer as the situation arises)? How many doses were given?</li>
							</ol></li>
							<li>Clinical assessment<ol>
								<li>Since the patient will be leaving the hospital, intravenous medications need to be switched to oral versions. Will the patient be able to tolerate the oral version?</li>
								<li>What should be the starting dose of that medication in the oral version?</li>
								<li>How soon will the doses taken by the patient after leaving the hospital need to be adjusted, and who will adjust them?</li>
								<li>Can the patient afford the needed medications?  Will the insurance cover the medications?</li>
							</ol></li>
						</ol>
					</p>
					<p>Physicians commonly care for patients who have moved from one unit to another. A patient might even move several times during the course of one visit &mdash;from the emergency room  to a general nursing unit, intensive care unit, step-down unit and back to general nursing unit again, for example. Critically ill inpatients may be unable to take their medications orally, and may be receiving several medications intravenously in the intensive care unit. As patients begin to recover, they might resume their previous medications at reduced doses which may gradually change throughout their hospital stay. When patients are discharged from the hospital, they may need to resume taking home medications may be resumed, some of the doses may need to be adjusted, and they may need to take some additional medications.</p>
				</div>
			</div>
		</section><!--end section inpatient-->
		
		<section id="ambulatory" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>3.2 Ambulatory Medication Reconciliation</h3>
					</div>
					<p>Physicians use two medication lists to reconcile medications in an ambulatory setting: (1) what it says in the EHR, and (2) what the patients report they actually take. Healthcare team members can collect information about patients’ adherence to their medication regimens either by interviewing the patients or by giving the patients a form to fill out. The later option may save the office staff time. The diagram below shows a simplified workflow for medication reconciliation in the outpatient setting.</p>
					<div class="example" id="fig-3-1">
						<div class="ex-title">
							<span class="ex-type">Figure 3.1</span>
							<span class="ex-caption">Simplified Medication Reconciliation Workflow in Ambulatory Setting</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/ambulatorychart.png" title="Simplified Medication Reconciliation Workflow in Ambulatory Setting">
							<img src="./assets/images/examples/medication-reconciliation/ambulatorychart.png" class="scale-with-grid" alt="Ambulatory workflow" title="ambulatory workflow" /></a>
					</div>
					<p>The medication reconciliation workflow may vary from clinic to clinic, depending on what roles said clinic assigns various members of its staff. In some clinics, nurses interview patients and update the medication list, adding annotations about patients’ adherence where necessary. Physician subsequently confirm these annotations with the patients and seek clarification about any uncertain details. Other clinics give patients printouts of their current medication list as recorded in the EHR, which the patients then annotate. In other clinics, physicians review medication lists with the patients in the course of their visits.</p>
					<p>Some specialists, particularly those in surgical subfields, may review medication lists less precisely, focusing only on the medications they have prescribed, such as post-operative antibiotics or pain medications. These specialists need to be able to reconcile the medications they’re responsible for without assuming responsibility for the entire medication list. Reconciliation interfaces might offer means of conveying that specialists have reconciled the medications they’re responsible for, and only those medications. It might be accomplished by giving users the option of clicking on ‘Acknowledged’ or ‘Reviewed but not approved’ in addition to the fuller ‘Reconcile &amp; Sign.’</p>
					<p>During the visits, patients and physicians agree upon new plans of action. Physicians might then prescribe and makes other changes in the medication list. Patients then get updated copies of their list to take home.</p>
					<div class="scenario"><h5>Ambulatory Clinical Scenario - Patient with Chronic Pain Reports Changes Other Physicians Have Made to Her Medication List</h5>
						<p>Mrs. Stanton is a high school teacher who was seriously injured in a motor vehicle accident. Mrs. Stanton  is under the care of an orthopedic surgeon and a pain management specialist as well as her primary care doctor. Today's visit with Dr. Barnes, her primary care doctor, involves several changes in her medication list.</p>
						<p>At the beginning of the visit Mrs. Stanton receives the medication list her primary doctor has on file for her. She notices it’s not quite up to date.  It does not record that her pain specialist recently started her on a new medication, nortriptyline, and stopped another one, hydrocodone-acetaminophen, or that her orthopedic surgeon increased her dose of Celebrex. Mrs. Stanton needs to indicate those three changes on the list.</p>
					</div>

					<h5>3.2.1 The Patient Reviews the Medication List</h5>
					<p>The three discrepancies the patient noted in the above scenario are typical of the type of problems patients flag up when reviewing their medication lists in ambulatory, primary care settings. For the EHR to offer safe, effective clinical support (e.g. drug alerts and decision support), it needs to work with an up-to-date medication list.</p>
					<p>Below, you’ll find a design for a simple interface that allows patients to review and update their lists using tablets or desktop computers. Each screen shows only one medication, with its associated details (strength, and dosage instructions). This allows the patient to answer questions carefully for each drug. Afterwards, patients can review the list as a whole. They can add drugs and include comments and questions. If the patient knows which of their medications need to be renewed, they can also indicate that.</p>
					<div class="example" id="gal-3-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.2</span>
							<span class="ex-caption">Design example: A Patient Reviews Her Medication List</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption">3.2a The interface presents each drug in the patient’s medication list, one at a time. The system offers a few clearly-marked choices. The mode of presentation is well suited to a touch interface. A progress bar indicates how many drugs are in the list (and can help users get into a <a href="./human-factors.php#flow-state">flow state</a>.)</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0011_patient_stepmed_taking.png" title="3.2a The interface presents each drug in the patient’s medication list, one at a time. The system offers a few clearly-marked choices. The mode of presentation is well suited to a touch interface. A progress bar indicates how many drugs are in the list (and can help users get into a flow state.)">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0011_patient_stepmed_taking.png" class="scale-with-grid" alt="Patients selects that they are taking a medication" title="" /></a>
								</div></li>
								<li><div>
									<div class="caption">3.2b The patient may not be taking a drug for various reasons: a physician countermanded that order, the patient did not tolerated the medication, never filled the prescription, etc.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" title="3.2b The patient may not be taking a drug for various reasons: a physician countermanded that order, the patient did not tolerated the medication, never filled the prescription, etc.">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" class="scale-with-grid" alt="Patient selects that they are not taking a medication" title="" /></a>
								</div></li>
								<li><div>
									<div class="caption">3.2c The patient may be taking more or less than the prescribed amount of her medication. She may have recently run out of the medication, or may be taking “as needed” rather than routinely. The answer, “Yes, I’m taking but not as directed,” is enough to prompt the physician to start a conversation about adherence.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0013_patient_stepmed_takingbut.png" title="3.2c The patient may be taking more or less than the prescribed amount of her medication. She may have recently run out of the medication, or may be taking “as needed” rather than routinely. The answer, “Yes, I’m taking but not as directed,” is enough to prompt the physician to start a conversation about adherence.">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0013_patient_stepmed_takingbut.png" class="scale-with-grid" alt="Patient selects that they are taking a medication, but not as directed" title="" /></a>
								</div></li>
								<li><div>
									<div class="caption">3.2d The patient may be unsure about a particular medication. She may not recognize the medication name, may be unsure about the exact dose, or may be unsure about something else.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0014_patient_notsure.png" title="3.2d The patient may be unsure about a particular medication. She may not recognize the medication name, may be unsure about the exact dose, or may be unsure about something else.">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0014_patient_notsure.png" class="scale-with-grid" alt="Patient selects that they are taking a medication, but not as directed" title="" /></a>
								</div></li>
								<li><div>
									<div class="caption">3.2e Once the patient’s reviewed all the medications in the list the EHR had on file for her, the prompt reminds her to add missing prescriptions. It also prompts her to add any other items she might be taking, but which are often forgotten – such as eye drops, over-the-counter medications, vitamins and herbal preparations, etc.   The interface allows for fuzzy misspelling and suggests appropriate possible names as the patient begins to type.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0003_patient_addmed.png" title="3.2e Once the patient’s reviewed all the medications in the list the EHR had on file for her, the prompt reminds her to add missing prescriptions. It also prompts her to add any other items she might be taking, but which are often forgotten – such as eye drops, over-the-counter medications, vitamins and herbal preparations, etc. The interface allows for fuzzy misspelling and suggests appropriate possible names as the patient begins to type.">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0003_patient_addmed.png" class="scale-with-grid" alt="Patient adds medications they are taking that haven't been listed" title="" /></a>
								</div></li>
								<li><div>
									<div class="caption">3.2f Final review: The patient can review the entire list, and can add comments and mark the medications she needs the physician to renew.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0010_patient_endlist.png" title="3.2f Final review: The patient can review the entire list, and can add comments and mark the medications she needs the physician to renew. ">
										<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0010_patient_endlist.png" class="scale-with-grid" alt="Patient reviews list of medications, and can type in additional comments" title="" /></a>
								</div></li>
							</ul>
						</div>
					</div><!--end gallery 3.2-->
					<p>After the patient has reviewed the medication list, the physician must review the patient’s annotated list. They’ll have a conversation about any discrepancies and uncertainties in an effort to resolve them.</p>
					<div class="quicktip">
						<div class="sidebar cf" id="medication-adherence">
							<h5>Challenge - Medication Adherence</h5>

							<p class="preview"><h6>The capture of adherence information</h6><p>There are two main ways to capture information about patients medication<span class="elipsis">... <span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<h6>The Capture of Adherence Information</h6>
								<p>There are two main ways to capture information about patients medication adherence (or lack thereof). One is asking patients to provide the information, and the other is tracking information about prescription fills from the e-prescribing network. At the moment, not all pharmacies, pharmacy benefit managers and insurance plans are linked with e-prescribing networks, but even incomplete databases can complement patients’ reports and help draw more accurate pictures of patients’ adherence patterns.</p>
								<h6>Non-adherence is Widespread</h6>
								<p> A significant number of patients never fill their prescriptions. In developed countries, an average of 50% of patients with chronic diseases neglect to do so.1 Patients commonly underreport their degree of adherence, as well. Physicians  are encouraged to use language that is non-judgmental. User interfaces can use similar language as well, to encourage patients to give accurate answers. The medication reconciliation process aims to uncover the truth, and from there to allow the patients and physicians to collaboratively align their goals and come up with a plan of care that both parties can get behind.</p>
								<h6>Why Patients Stop Taking Their Medication</h6>
								<p>Why don’t people take the medications prescribed for them? They may simply never fill the prescription. Sometimes they fill the prescription but don’t take the medication. On other occasions they take the medication for a while, but then stop. Here are a few common reasons behind patients’ non adherence:
									<ol>
										<li>The patient did not purchase the medication because of it was costly.</li>
										<li>The patient stopped taking the dedication after experiencing side-effects.</li>
										<li>The medication’s side effects outweighed its benefits.</li>
										<li>The patient was afraid of the side-effects.</li>
										<li>The patient didn’t benefit from the medication.</li>
										<li>The patient didn’t believe the medication would help them.</li>
										<li>The patient misunderstood the expected benefits of the medication.</li>
										<li>The patient didn’t trust the physician who prescribed the medication.</li>

								</p>
								<p>Knowing why patients do not take their medication can help physicians make well informed decisions. The physician doesn’t want to increase a patient’s dose of antihypertensive medication if non-adherence is behind uncontrolled blood pressure.</p>
								<p><a href="./human-factors.php#working-memory" target="blank">Read more in our chapter on Human Factors Principles.</a></p>
							</div>
						</div>
						<div class="tip"></div>
					</div>

					<p>On paper one could simply cross through the medication name, or mark it with an 'X'. If the list is interactive, then it helps to make the name visibly change when it is being marked as ‘no longer taking'.</p>
					<div class="example" id="gal-3-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.3</span>
							<span class="ex-caption">Marking no longer taking</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UM_EHR_0003_writing-2.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0003_writing-2.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0009_patient_stepmed_not-taking.png">
									<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0009_patient_stepmed_not-taking.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>Offer the option to give a reason, but don’t require it because the reason might be hard to describe, the patient will want to get through the list quickly, and the wait time for the visit may be very brief. Comment sections should offer the patient a chance to make a note, so they don’t forget the details by the time they talk to the physician. Remember that our brains have limited working memory: we can remember about 3 or 4 items in a 10 to 15 minute time frame.</p>
					<div class="example" id="gal-3-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.4</span>
							<span class="ex-caption">Patient list and writing comments</span>
						</div>
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-reconciliation/UM_EHR_0004_comments.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0004_comments.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/medication-reconciliation/UM_EHR_0011_patient_endlist_2.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0011_patient_endlist_2.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="sidebar cf">
						<h5>Medication Adherence - Behind the Scenes</h5>
						<p><strong>Why patients stop medication</strong></p>
						<p>Why don’t people just take medications prescribed for them? Sometimes they never filled the prescription. Sometimes they fill it but never take it. Other times they take it for a while and then stop. Why is that?</p>
						<p>Some common reasons why people don't take their medicine</p>
							<ol>
								<li>Cost: coverage, co-pays, or cash out-of-pocket</li>
								<li>No benefit</li>
								<li>Side effects</li>
								<li>Side effects outweight benefit</li>
								<li>Mistrust in the prescriber</li>
								<li>Fear of side effects</li>
								<li>Misunderstanding expected benefits</li>
							</ol>
						<p>Knowing the reason for not taking a medication can be helpful in the future for making wise choices (if the medication worked, but was not covered by the insurance plan as opposed to having intolerable side effects.</p>
						<p><strong>How will the adherence data populate the EHR?</strong></p>
						<p>There are two means in particular for capturing and recording medication adherence information. One is by asking the patient and recording their response. This is part of outpatient medication reconciliation process. The granularity of the details is fairly limited in most cases. The patient can respond in one of the following ways</p>
							<ul class="disc">
								<li>Taking as prescribed</li>
								<li>Not taking</li>
								<li>Taking, but not as prescribed</li>
							</ul>
						<p>In the ambulatory setting, it would be unusual to capture the date of the last medication dose. It would also not be particularly meaningful, because patient’s may be adjusting their medication dose variably. Some people simply take less medicine in order to make the medications last longer and therefore cost less. In other cases people stop taking the medicine but don’t remember when. It’s also likely that patients are underreporting the degree of nonadherence.</p>
						<p>The other primary data source would be dispense data reported from ePrescribing hub organizations or pharmacies. We could infer that the patient who had not picked up the medication is probably not taking it. However we cannot safely assume that the patient who picked up the prescription is actually taking the medication.</p>
					</div>
					<div class="scenario"><h5>Ambulatory Clinical Scenario #2 - Managing uncertainty</h5>
						<p>It's now more than a year after the accident. Unfortunately, Mrs. Stanton developed chronic pain, PTSD (post traumatic stress disorder), and depression. Her fractures are well-healed and there are no more planned surgical procedures. However, because of forced inactivity and stress eating, she gained significant weight, developed diabetes and high blood pressure, so her cholesterol targets are more aggressive than they used to be because of the diabetes. She is taking medication for all three of these chronic diseases (diabetes, hypertension, and hyperlipidemia).</p>
						<p>Her chronic pain is stable, so she hasn’t seen the pain management specialist or the orthopedic surgeon for more than a year. The only physician visits on her calendar are with her primary care doctor.</p>
						<p>As she looks at the medication list from her primary care physician's electronic health record, she has some uncertainty about its accuracy. She’s also unsure about what she's actually taking at home. Because she was in a hurry to get to the office on time, she unintentionally left her medications and her medication list at home.</p>
						<p>She is not sure about the citalopram dose. Her physician has it listed as 40 mg daily. She thinks her psychiatrist had adjusted it on the last visit, but that has been some time ago. She isn’t sure whether she’s taking 20 or 40 mg daily.</p>
						<p>She also has been feeling more sad and had decided to reduce the metoprolol dose on her own, only taking it every other day. She had read on the medication information brochure that metoprolol can cause depression, but she has not yet discussed this decision with her physician.</p>
						<p>She needs some of her medications renewed, but only the ones that her primary care doctor (Dr. Gray) manages.</p>
						<p>Here's what the primary care physician's current medication list indicates just before the beginning of the visit.</p>
						<table class="scenario-list">
							<tbody>
								<tr>
									<td>calcium with vitamin D one tablet twice a day (nonprescription)</td>
									<td>bone health</td>
									<td>(OTC)</td>
								</tr>
								<tr>
									<td>celecoxib (Celebrex) 200 mg one capsule twice daily for chronic pain</td>
									<td>chronic pain</td>
									<td>Gregory</td>
								</tr>
								<tr>
									<td>citalopram 40 mg daily for depression</td>
									<td>depression</td>
									<td>Lucas</td>
								</tr>
								<tr>
									<td>gabapentin (Neurontin) 600 mg one tablet 3 times a day for chronic pain</td>
									<td>chronic pain</td>
									<td>Gregory</td>
								</tr>
								<tr>
									<td>hydrochlorothiazide 25 mg one tablet daily to lower cholesterol</td>
									<td>high blood pressure</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>insulin glargine (Lantus) 24 units at bedtime for diabetes</td>
									<td>diabetes</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>levothyroxine 125 mcg daily for hypothyroidism</td>
									<td>Hypothyroidism</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>lisinopril 10 mg daily for high blood pressure</td>
									<td>high blood pressure</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>metformin 1000 mg one tablet twice a day for diabetes</td>
									<td>diabetes</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>metoprolol succinate 100 mg daily to prevent migraine</td>
									<td>migraine, high blood pressure</td>
									<td>Gray</td>
								</tr>
								<tr>
									<td>multivitamins one tablet daily (nonprescription)</td>
									<td>(OTC)</td>
									<td></td>
								</tr>
								<tr>
									<td>omeprazole 40 mg daily for esophageal reflux</td>
									<td>GERD</td>
									<td>Gray</td>
								</tr>
								<tr>	
									<td>pravastatin 20 mg daily</td>
									<td>high cholesterol</td>
									<td>Gray</td>
								</tr>
								<tr>	
									<td>sumatriptan (Imitrex) 100 mg as needed to abort a migraine. May repeat once in 2 hours if headache recurs</td>
									<td>migraine</td>
									<td>Gray</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>In this scenario, we're dealing with quite a few issues:</p>
						<ul class="disc">
							<li>uncertainty about the medication list</li>
							<li>questions about adherence</li>
							<li>changes the patient made on her own</li>
							<li>the conversational aspect of medication reconciliation</li>
							<li>and identifying the prescribing physician when there are several physicians.</li>
						</ul>
					<p>This is a lot for the physician and patient to cover, but we’ll explain some background for each issue and, with our design examples, provide tools to help.</p>
					<h5>Medication adherence</h5>
						<p>We know that a significant number of patients never fill their prescriptions. In developed countries, it averages 50% for those with chronic diseases. [WHO 2003] Patients commonly underreport their adherence as well. The physician and the forms should use language that is non-judgmental. The goal of this medication reconciliation conversation is to uncover the truth in a nonjudgmental way, allowing the patient and physician to collaboratively align goals and make a plan of care that both can support.</p>
					<h5>Uncertainty</h5>
						<p>Patients commonly report uncertainty about their medication list. For instance, patients may not be able to pronounce the name of the medicine or even recognize the name of medicine they've been taking for sometime. Some people may refer to the medication by intended purpose: "a blood pressure medicine.”</p>
						<p>Transactions that occur outside the office visit may not get updated in electronic health record. For instance a phone call at night might result in a change in medication management, but it may not get documented in the formal medication list of the electronic health record.</p>
						<p>If patients arrive at an office visit without any reference information such as their medication bottles or a list, then they will be making guesses at the truth from memory. That happens quite often in the authors’ experience.</p>
					<h5>Conversation</h5>
						<p>The conversation is an opportunity for the patient and physician to find common ground. It's a chance to clear up misunderstandings and fill in knowledge gaps. Allow the patient to make corrections to the list that will then be reviewed by the physician. The physician may get a deeper understanding of the patient's values, constraints in their life, or other considerations. The patient may get a deeper understanding of the medication’s benefits and risks, allowing a more informed decision about using the medication.</p>
						<p>The conversation is also a chance for the patient and their physician to develop a common goal. It may not be the patient's desire to achieve a great blood sugar control for their diabetes. However it might be a goal to stop waking up so frequently in the middle of the night to urinate because of high blood sugars.</p>
						<p>Allow the patient to clearly indicate if they have some uncertainty about a medication. It could be a simple single indicator, or it could be expressed as free text.</p>
							<ul class="disc">
								<li>Here are some common reasons for non-adherence:</li>
								<li>Did not believe it would help</li>
								<li>Did not purchase</li>
								<li>Experienced side effects</li>
								<li>Received no benefit</li>
								<li>Too expensive to purchase</li>
								<li>Was afraid of side effects</li>
							</ul>
						<p>In addition to non-adherence, there may be straightforward errors in a patient’s medication list. Items might have been added incorrectly in the past, which the patient may recognize clearly as an error (“This entry for insulin is a mistake. It should not be in my record at all. I don’t have diabetes and have never taken insulin.”).</p>
						<h5>Responsibility and purpose</h5>
						<p>It's common for patients with multiple chronic illnesses to have three or more physicians providing care for them. Even so, the different specialists may have areas of overlap in their expertise and skills. For instance, it's very common for primary care physicians to manage mental health problems such as depression, anxiety, and insomnia. Those problems would be within the scope of a psychiatrist. By sorting or filtering the list by physician, it’s easier to focus on the appropriate medications, and less likely to overlook a medication.</p>
					<div class="example" id="gal-3-5">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.5</span>
							<span class="ex-caption">Patient Medications</span>
						</div>
						<div id="cbp-fwslider-5" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-5" href="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-2.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-2.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-5" href="./assets/images/examples/medication-reconciliation/UM_EHR_0011_patient_endlist_2.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0011_patient_endlist_2.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="example" id="gal-3-6">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.6</span>
							<span class="ex-caption">Sort and Filter by Prescriber</span>
						</div>
						<div id="cbp-fwslider-6" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-6" href="./assets/images/examples/medication-reconciliation/UM_EHR_0012_sorted-by-prescriber.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0012_sorted-by-prescriber.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-6" href="./assets/images/examples/medication-reconciliation/UM_EHR_0013_filtered-by-prescriber.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0013_filtered-by-prescriber.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
							</ul>
						</div>
					</div>
				</div>				
			</div>
		</section> <!--end section ambulatory-->
		
		<section id="review" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Summary</h3>
					</div>
					<ol>
						<li>Interfaces like <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_APPENDECTOMY__&version=__VERSION_FULL__&amp;animate=__AUTO_ANIMATE_ON__" target="blank">Twinlist</a> can reduce mental effort (cognitive load) by doing algorithmic matching of drugs and highlighting small differences in similar drugs. It also uses the fast thinking of the visual system to convey information very efficiently and precisely. Check out a <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_CONGESTIVE_HEART_FAILURE_1_MODIFIED__&version=__VERSION_FULL__&animate=__AUTO_ANIMATE_ON__" target="blank">larger dataset</a>. To learn more about Twinlist visit the <a href="http://www.cs.umd.edu/hcil/sharp/twinlist/" target="blank">twinlist website</a>.</li>
						<li>Keep the presentation to the patient simple and as clear as possible. Use plain language. Add typographic emphasis (bold or larger font) where appropriate.</li>
						<li>Limit the number of options displayed. Additional options can be hidden by default, and then revealed if needed.</li>
						<li>Offer cognitive support for adding new medications. Allow for fuzzy misspelling. Suggest appropriate drug names as the patient begins to type.</li>
						<li>Make the final edited list easy to scan.</li>
						<li>Offer a few simple choices to document adherence. e.g. Taking as prescribed. Taking, but not as prescribed. Not taking at all. Other category.</li>
						<li>Allow sorting and filtering by the prescriber, by the diagnosis or clinical reason, and by which medications will need renewal at this visit.</li>
					</ol>
				</div>
			</div>
		</section><!--end section review-->
		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fleft" id="prevCh">
							<p class="pagination prev_ch"><a href="./medication-list.php"><span class="prev"></span>Medication List</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./allergy-list.php">Allergy List<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
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
			$( '#cbp-fwslider-5' ).cbpFWSlider();
			$( '#cbp-fwslider-6' ).cbpFWSlider();
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