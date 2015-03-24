<?php $pageTitle='Drug Alerts'; ?>
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
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="drug-alerts">
	<!--php include './nav.php';-->
	<nav class="main" role="navigation">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="drug-alerts">
						<a href="./e-prescribing.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
						<a href="./drug-alerts.php"><span class="ch-name">Drug Alerts</span></a> 
						<a href="./human-factors.php"><span class="next"></span><span class="next-text">Next</span></a>
						<div class="section-nav">
							<ul>
								<li><a href="./drug-alerts.php#drug-allergy-alerts">6.1 Drug Allergy Alerts</a></li>
								<li><a href="./drug-alerts.php#alert-fatigue">6.2 Drug-Drug Interaction Alerts</a></li>
								<li><a href="./drug-alerts.php#user-preferences">6.3 User Preferences to Dismiss Future Alerts</a></li>
								<li><a href="./drug-alerts.php#customizing">6.4 Customizing Alerts for Individual Physicians</a></li>
								<li><a href="./drug-alerts.php#multiple-alerts">6.5 Multiple Drug Alerts</a></li>
								<li><a href="./drug-alerts.php#summary">6.6 Summary</a></li>
							</ul>
						</div></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="wrapper">
	<?php include './header.php'; ?>

		
	<section id="ch-6" class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>6</h2>
					<h2>Drug Alerts</h2>
					<div class="subheader"><p>Effective alerts increase patient safety while reducing physicians’ cognitive load</p></div>
				</div>
			</div>
		</div>
		<section id="drug-allergy-alerts">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>A <a href="http://www.ahrq.gov/research/findings/factsheets/errors-safety/aderia/index.html#MedicationErrors" target="_blank" class="link">report</a> from the Agency for Healthcare Research and Quality estimates that adverse drug events annually result in over 770,000 injuries and deaths and cost up to $5.6 million dollars per hospital. A system that alerts prescribing physicians to medication conflicts can help reduce the number of adverse drug events. To be effective, however, a physician must notice, read, understand, and respond to the alerts. How well they do this depends, in part, on the design of the alerting system, including the alert rules and the methods used to display and interact with the alerts. An effective alerting system needs to strike a balance, alerting physicians to real safety risks without overwhelming them, causing alert fatigue and increasing their cognitive load. If the system gives too many nuisance alarms, or the alarms are hard to read and understand, physicians will quite reasonably begin to ignore the alerts. This chapter will focus on how developers can apply user interface and interaction design principles to create effective alerts. We consider two types of drug-related alerts: drug-allergy alerts and drug-drug interaction alerts.</p>
					<div class="sectionStart">
						<hr />
					</div>
					<h3>6.1 Drug Allergy Alerts</h3>
					<p>Drug allergy alerts inform physicians that their patient may be allergic to whatever they’ve just prescribed. The physician may have accidentally overlooked the allergy. They’ll need to weigh the drug’s potential risks against its potential benefits, and either go forward with the prescription or cancel it. Let’s look at a simple clinical scenario.</p>
					<div class="scenario">
						<h4>Clinical Scenario &mdash; Drug Allergy Alert</h4>						
						<p>Mr. Martin is a 60-year-old who, barring one exception, was in good health until a decade ago when he was hospitalized after a severe automobile accident. At that time, he had a documented allergy (generalized hives, itching, and facial swelling) to the IV drug Unasyn, an antibiotic drug combination that contains sulbactam and ampicillin, which is a member of the penicillin family.</p>
						<p>Today he is visiting Dr. Barnes, his primary care doctor, with symptoms of acute sinusitis. The problem has been going on for almost two weeks and is not improving. Dr. Barnes’s first choice of treatment is Augmentin (clavulanate plus amoxicillin, which is also a member of the pencillin family). She glances at the allergy list in the patient header, looking for the word “penicillin” but does not see it. The term “Unasyn” did not catch her attention, perhaps because she wasn’t thinking about compounds that contained drugs closely related to penicillin. She enters an e-prescription for Augmentin, but then a drug alert interrupts her workflow. The alert identifies the patient’s allergy to Unasyn, the symptoms and severity, and Unasyn’s chemical similarity to Augmentin. Dr. Barnes reconsiders her decision and chooses doxycycline, a different antibiotic.</p>
					</div>
					<p>Alerts need to support the physician’s thinking process by addressing five questions:</p>
					<ol>
						<li>How serious is the problem?</li>
						<li>What is the nature of the problem?</li>
						<li>What can the physician do to avoid or mitigate the effects of the problem?</li>
						<li>If the physician does not address the problem, what will the consequences be?</li>
						<li>Where can the physician learn more about this problem?</li>
					</ol>
					<p><a href="#fig-6-1">Figure 6.1</a> demonstrates how a typical alert in current EHRs address these questions. This design doesn’t direct the user’s eye to the information she needs to answer the questions. The alert contains a lot of text, but since it is all roughly the same size and none of it has been given any emphasis, it looks like all the information is equally (un)important. Some text (such as the window title, “Medication Clinical Decision Support” and “The new order has been created…”) convey little to no relevant information. The visual elements, such as the alignment of text and the arrangement of the page’s white space, do little to direct the eye. The page contains three hyperlinks, but two of these lead to the same reference information, which is unlikely to aid the decision-making process.</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-6-1">
						<div class="ex-title">
							<span class="ex-type">Figure 6.1</span>
							<span class="ex-caption">Before: A Penicillin Family Drug-Allergy Alert</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/drug-alerts/DrugAllergyAlertCerner2014_Unasyn_AugmentinRx.png" title="Figure 6.1 - Before: A Penicillin Family Drug-Allergy Alert">
							<img src="./assets/images/examples/drug-alerts/DrugAllergyAlertCerner2014_Unasyn_AugmentinRx.png" class="scale-with-grid" alt="A Penicillin Family Drug-Allergy Alert" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-6-2">
						<div class="ex-title">
							<span class="ex-type">Figure 6.2</span>
							<span class="ex-caption">After: A Penicillin Family Drug-Allergy <span class="capt-desc">&mdash; A simplified design with fewer options and concise text.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/drug-alerts/Um_Ehr_0000_DrugAllergyAlert-2014-c.png" title="Figure 6.2 - After: A Penicillin Family Drug-Allergy - A simplified design with fewer options and concise text">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0000_DrugAllergyAlert-2014-c.png" class="scale-with-grid" alt="A simplified design with fewer options and concise text" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p><a href="#fig-6-2">Figure 6.2</a> is a redesigned version of the same penicillin family drug-allergy alert. It allows the physician to see at a glance that the alert indicates a serious drug allergy (as noted by the two caution icons). The alert conveys the names of the drugs involved, and key facts about the patient’s reaction. It shows the physician what actions she can take and which one is recommended ("Stop Augmentin," where “Stop” is the more prominent button). The design visually indicates the importance of key information using different font sizes, boldface, and colors to direct the user’s eye. Gray or smaller text denotes that the information written in it is less important.</p>
					<p>The design shows what information is related by grouping related items together, and using whitespace to separate different groups of items. We eliminated much of the text that appears in the original design (<a href="#fig-6-1">Figure 6.1</a>) to protect the user from cognitive overload (information overload). Clicking the 'i' (information) icon to the right of the name of the drug the patient is allergic to brings up additional information about the patient’s allergic reaction. This redesigned alert allows the user to find the important information about a drug allergy quickly. If desired, they can then learn more about less vital information, like the specific details of the patient's reaction. The 'feedback' link allows the user to provide feedback to the clinical decision support team.</p>
				</div>
			</div>
		</section>

		<section id="alert-fatigue">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>6.2 Drug-Drug Interaction Alerts</h3>
					<p>Drug interactions are far more complex than drug allergies. A drug allergy either exists or doesn't, though there is some room for doubt about whether an allergy was truly the issue at the time, whether the allergy still persists, and what the nature of the reaction was. With drug interactions, there are more variables: the strength of scientific evidence for the interaction, the severity category for the interaction (usually 3-5 levels from mild to severe), the organizational threshold for displaying alerts based on alert severity, and patient variables (age, weight, pregnancy, and renal function).</p>
					<div class="scenario">
						<h4>Clinical Scenario - Severe Drug Interaction</h4>
						<p>Mr. Martin, our 60-year-old who was involved in a motor vehicle accident, suffers from chronic pain. The problem requires a multi-pronged treatment approach which includes several different medications. He is taking the muscle relaxant tizanidine to treat his low back spasms. In the past two days, Mr. Martin has needed to urinate frequently and urgently, and urination has been painful. Dr. Barnes diagnosed him with a bladder infection. As she started to order the antibiotic ciprofloxacin, a passive, non-intrusive alert appeared in the corner of the screen (<a href="#fig-6-3">see Figure 6.3</a>). Rather than completing the prescription details and selecting the pharmacy, she stopped and chose a different antibiotic for which there were no drug interactions.</p>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-3">
						<div class="ex-title">
							<span class="ex-type">Figure 6.3</span>
							<span class="ex-caption">A Passive Alert</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0009_passive-alert.png" title="Figure 6.3 - A Passive Alert">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0009_passive-alert.png" class="scale-with-grid" alt="A Passive Alert" /></a>
					</div>

					<p>The passive alert appears in the corner of the EHR screen, but does not interrupt the physician’s workflow. The yellow bar with an alert icon that appears in the user's peripheral vision is a salient visual signal because it is based on preattentive attributes. Without reading it, the physician can detect both the alert's existence and it's degree of severity.</p>
					<p>If the physician completes the order, selects a pharmacy, and sends an e-prescription, an interruptive alert will pop up to ensure patient safety. The interruptive alert stops the physician’s workflow completely, demanding the physician’s full attention. The physician must select one of the three available choices before the system activates the “Continue” button to allow the physician to move forward (<a href="#fig-6-4">Figure 6.4</a>). After making a selection, the physician confirms her choice by hitting the keyboard “Enter” key or clicking the aforementioned “Continue” button (<a href="#fig-6-5">Figure 6.5</a>). This additional step allows the physician a chance to correct a mistake.</p>
					<p>Interruptive alerts annoy physicians and reduce the overall effectiveness of such alerts, which causes physicians to miss alerts that truly are important. Interruptive alerts can be used sparingly. Some EHRs allow users to customize what alerts appear to what healthcare providers. Thus the EHR might use interruptive alerts only for truly serious alerts when a physician is working with it and use both serious and mild alerts when the dispensing pharmacist is working with it. One empirical study of alerting systems suggests that physicians are more likely to comply with a tiered alert system (passive for lower risk and interruptive for higher risk alerts)<sup>1</sup>.</p>
					<div class="example" id="fig-6-4">
						<div class="ex-title">
							<span class="ex-type">Figure 6.4</span>
							<span class="ex-caption">An Interruptive Alert <span class="capt-desc">&mdash; Requires the user to make a choice before dismissing the alert.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0004_drug-drug-interaction-unselected-annotated.png" title="Figure 6.4 - An Interruptive Alert - Requires the user to make a choice before dismissing the alert.">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0004_drug-drug-interaction-unselected-annotated.png" class="scale-with-grid" alt="Interruptive Alerts Require a choice before dismissing the alert." /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-5">
						<div class="ex-title">
							<span class="ex-type">Figure 6.5</span>
							<span class="ex-caption">Once the Physician Makes a Choice, the System Enables the 'Continue' Button <span class="capt-desc">&mdash; Giving users a chance to confirm their choice, but also adds an extra step, so it is best used when overriding higher severity alerts and can be customized with user preferences.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0005_drug-drug-interaction-selected.png" title="Figure 6.5 - Once the physician makes a choice, the system enables the 'Continue' button">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0005_drug-drug-interaction-selected.png" class="scale-with-grid" alt="Once a choice is made, the system enables the 'Continue' button" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="user-preferences">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
					</div>
					<h3>6.3 User Preferences to Dismiss Future Alerts</h3>
					<p>When users are presented with a high frequency of low-value alerts, they develop alert fatigue and begin to dismiss the alerts before they fully read them or consider their implications.</p>
					<p>Alert fatigue can be mitigated in a variety of ways:</p>
						<ol>
							<li>Prevent alerts where possible:
								<ol>
									<li>Offer only choices that will not trigger alerts (for instance, only offer available dosage forms)</li>
									<li>Provide cognitive support to help physicians make decisions that will not trigger alerts</li>
									<li>Adjust alert thresholds to present users with only the most important alerts</li>
								</ol>
							</li>
							<li><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2605599/" class="link" target="_blank">Use a tiered alerting system</a>: make lower risk alerts passive and less visually obtrusive. Use interruptive alerts only for those with the <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3628052/" class="link" target="_blank">highest risk</a>.</li>
							<li>Present passive alerts as early as possible during decision making. For example, by providing a visible indication of drugs that conflict with patient allergies or current drugs while the physician is choosing from a list or typing in a drug.</li>
							<li>Allow users to customize their alert settings and turn off alerts that are of no value to them.</li>
							<li>Make alerts easier to read. Write concise descriptions, put important words first, and use visual features (font size, emphasis, color, whitespace, alignment, and spatial grouping) to indicate the importance and relationships among the information.</li>
						</ol>
					
				</div>
			</div>
		</section>

		<section id="customizing">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<div class="print-only page-break"></div>
					</div>
					<h3>6.4 Customizing Alerts for Individual Physicians</h3>
					<p>Some alerts will be predictably and safely dismissed 100% of the time, and can reasonably be eliminated. Perhaps a patient has been taking a medication for a long time without incident, but an alert still appears every time the prescription is renewed. Here are some common examples:</p>
					<div class="scenario">
						<h4>Clinical Scenario &emdash; Patient Can Tolerate Medications Related to an Allergy</h4>
						<p>The patient is allergic to sulfa, but has been taking a distant chemical relative of sulfa drugs, such as the diuretics hydrochlorothiazide or chlorthalidone (both very commonly prescribed), without incident for some time. In this context, the EHR need never again warn the physician about this particular patient’s allergy to sulfa.</p>
						<p>Lisinopril (an ACE inhibitor) gives this patient a cough, and an alert appears when the physician tries to prescribe an ARB such as losartan or valsartan, because these two classes of drugs are somewhat related. However, ARBs are known to never cause the cough that ACE inhibitors may cause. The EHR need never again warn the physician about this particular side-effect for any patient.</p>
					</div>
					<p>It would be safe to allow physicians to permanently suppress alerts in the two circumstances above (<a href="#fig-6-6">Figure 6.6</a>). It is more challenging to define rules for drug interactions or drug-disease interactions when the dosing or disease severity can vary over time.</p>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-6">
						<div class="ex-title">
							<span class="ex-type">Figure 6.6</span>
							<span class="ex-caption">Allow Users to Customize Certain Drug Alerts</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0001_DrugAllergyAlert-2014c-w-details.png" title="Figure 6.6 - Allow Users to Customize Certain Drug Alerts">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0001_DrugAllergyAlert-2014c-w-details.png" class="scale-with-grid" alt="Customize Certain Drug Alerts" /></a>
					</div>
					<div class="quicktip" id="">
						<div class="sidebar cf">
							<h4>Collecting Feedback about the Usefulness of Alerts</h4>
							<p class="preview">Let data drive the rules for alerts. Currently, EHRs can collect structured data about the reason for alert overrides, but no EHR <span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Let data drive the rules for alerts. Currently, EHRs can collect structured data about the reason for alert overrides, but no EHR we know of can systematically collect data about whether prescribers consider particular alerts useful.</p>
								<p>Only a handful of companies provide data that fuels drug allergy and drug interaction alerts. These companies don’t receive direct feedback from clinician users: their relationship is mediated by their EHR vendor. If EHR vendors could tell drug data vendors that nearly all users found a particular alert to be unhelpful, then the vendors could reassess that particular data element. Figure 6.7 shows how an EHR could unobtrusively collect feedback from physicians.</p>
								<p>Legal teams may feel that more warnings amount to greater safety, but the situation is more complicated than that. Physicians need to practice medicine efficiently, and too many alerts can cause alert fatigue and even put patients at risk.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<div class="example" id="fig-6-7">
						<div class="ex-title">
							<span class="ex-type">Figure 6.7</span>
							<span class="ex-caption">Allow Users to Offer Feedback about the Usefulness of Particular Drug Alerts</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0002_DrugAllergyAlert-2014-c-leave-feedback.png" title="Figure 6.7 - Allow Users to Offer Feedback about the Usefulness of Particular Drug Alerts">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0002_DrugAllergyAlert-2014-c-leave-feedback.png" class="scale-with-grid" alt="Offer Feedback about the Usefulness of Particular Drug Alerts" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="multiple-alerts">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
					</div>
					<h4>6.5 Multiple Drug Alerts</h4>
					<p>Sometimes an EHR needs to present multiple alerts to the user. These may be multiple alerts for a single medication, or several alerts for a number of different medications. Would the EHR display these alerts one at a time, or all at once? If they’re displayed all at once, physicians can see the big picture: all of the drug-allergies and drug-drug interactions in play. Without having to navigate to read each alert, physician’s can run down the list and make decisions for each item. Showing all the alerts simultaneously, however, may visually overwhelm the users. It might also be difficult to simultaneously show both all the alerts and the clinical information that physicians need to act on these alerts.</p>
					<p><a href="#fig-6-8">Figure 6.8</a> shows one possible way of presenting multiple alerts on a single screen. This design shows each alert’s severity using small icons in the left column. New drug orders and either the allergy or interacting drug are displayed just after the severity icons. The rightmost column shows the actions that a physician can take to address each alert. The action buttons include both the actions and the drug names (e.g., Stop Augmentin) to help the physician understand what each button does. The design uses bold text on action buttons to show recommended actions for each alert. <a href="#fig-6-9">Figure 6.9</a> shows the display after the user has made decisions about the first two alerts. The Continue button activates after the user addresses all the alerts (<a href="#fig-6-10">Figure 6.10</a>).
					<p>It’s more challenging to display multiple alerts on small mobile devices. <a href="#gal-6-1">Gallery 6.1</a> shows a way to displayed and address multiple alerts on a mobile phone. The first screen presents an overview of all of the alerts, grouped by type. Tapping an alert brings up details about it, as well as possible actions the physician can take.</p>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-8">
						<div class="ex-title">
							<span class="ex-type">Figure 6.8</span>
							<span class="ex-caption">Presenting All Alerts in a Single Screen <span class="capt-desc">&mdash; Bold type indicates preferable, safer choices</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0006_multiple-alerts.png" title="Figure 6.8 - Presenting all alerts in a single screen. Bold type indicates preferable, safer choices">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0006_multiple-alerts.png" class="scale-with-grid" alt="All alerts in a list, safer choices indicated" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-9">
						<div class="ex-title">
							<span class="ex-type">Figure 6.9</span>
							<span class="ex-caption">Multiple Alert Screen <span class="capt-desc">&mdash; After the physician has made some choices, the system visually shows his selections</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0007_multiple-alerts-some-selected.png" title="Figure 6.9 - Multiple alert screen - After the physician has made some choices, the system visually shows his selections">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0007_multiple-alerts-some-selected.png" class="scale-with-grid" alt="Multiple alert screen visually shows selections" /></a>
					</div>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-6-10">
						<div class="ex-title">
							<span class="ex-type">Figure 6.10</span>
							<span class="ex-caption">Multiple Alert Screen <span class="capt-desc">&mdash; Once the physician has addressed all alerts, the system activates the Continue button</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/Um_Ehr_0008_multiple-alerts-all-selected.png" title="Figure 6.10 - Multiple Alert Screen - Once the physician has addressed all alerts, the system activates the Continue button.">
							<img src="./assets/images/examples/drug-alerts/Um_Ehr_0008_multiple-alerts-all-selected.png" class="scale-with-grid" alt="Once all alerts are addressed, Continue button is activated." /></a>
					</div>
					<div class="print-only page-break"></div>
					<p>This gallery shows a design option for displaying multiple drug alerts on a smartphone.</p>
					<div class="example" id="gal-6-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 6.1</span>
							<span class="ex-caption">Displaying Multiple Drug Alerts on a Smartphone</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">6.1 a</span> One Allergy Alert and Three Drug-Drug Interactions</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0000_main.png" title="Gallery 6.1 a - One allergy alert and three drug-drug interactions">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0000_main.png" class="scale-with-grid" alt="One allergy alert and three drug-drug interactions" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">6.1 b</span> More Detailed Display <span class="capt-desc">&mdash; Allows the physician to address the allergy alert</span></div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0001_allergy-1.png" title="Gallery 6.1 b - More Detailed Display - Allows the physician to address the allergy alert">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0001_allergy-1.png" class="scale-with-grid" alt="More Detailed Display" /></a>
								</div></li>
								<li><div>
								<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">6.1 c</span> Physician Taps the “Stop” Button <span class="capt-desc">&mdash; The display moves on, bringing up the next alert screen</span></div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0006_allergy-2-touch.png" title="Gallery 6.1 c - Physician Taps the “Stop” Button - The display moves on, bringing up the next alert screen">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0006_allergy-2-touch.png" class="scale-with-grid" alt="Tap the Stop Button, bring up the next alert" /></a>
								</div></li>
								<li><div>
								<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">6.1 d</span> A Drug-Drug Interaction Alert with Three Possible Actions <span class="capt-desc">&mdash; Stop the first drug, stop the second, or continue both.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0003_dd1.png" title="Gallery 6.1 d - A Drug-Drug Interaction Alert with Three Possible Actions - Stop the first drug, stop the second, or continue both.">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0003_dd1.png" class="scale-with-grid" alt="A Drug-Drug Interaction Alert with Three Possible Actions" /></a>
								</div></li>
								<li><div>
								<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">6.1 e</span> Stopping Cipro Calls Up the Next Drug-Drug Alert.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0007_dd2-touch.png" title="Gallery 6.1 e - Stopping Cipro calls up the next drug-drug alert.">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0007_dd2-touch.png" class="scale-with-grid" alt="Stopping Cipro calls up next drug-drug alert." /></a>
								</div></li>
								<li><div>
								<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">6.1 e</span> After the Physician Has Addressed All the Alerts <span class="capt-desc">&mdash; He can use the final review screen to look over and modify his decisions.</span></div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/drug-alerts/UM_EHR_0005_final.png" title="Gallery 6.1 f - After the Physician Has Addressed All the Alerts - He can use the final review screen to look over and modify his decisions.">
										<img src="./assets/images/examples/drug-alerts/UM_EHR_0005_final.png" class="scale-with-grid" alt="After Addressing All Alerts, have a final chance to review and modify decisions" /></a>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="summary">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>6.6 Summary</h3>
						<ol>
							<li>An effective alert is one that physicians notice, read, understand, and respond to. We can facilitate this process by designing alert systems that use sound human factors principles.</li>
							<li>Alerts interrupt users to different degrees. Passive alerts appear when triggered, but do not require the user to attend to them immediately. Interruptive alerts stop the user’s workflow and require the user to respond before continuing his work.</li>
							<li>Make only high-risk alerts interruptive.</li>
							<li>Reduce users’ cognitive load by simplifying the visual presentation of drug alerts.</li>
							<li>Use preattentive attributes (like color, size, shape, alignment) to draw users’ attention to the most important information in Drug Alerts.</li>
							<li>Treat alerts differently depending on their severity. Low-risk alerts can be passive. They offer the physician decision support without interrupting his workflow, unless he chooses to stop and attend to them. High-risk alerts could initially generate passive notices, but these can be followed by an active notice if the physician fails to attend to the issue. Physicians should be notified about possible issues via passive notices as early as possible.</li>
						</ol>
				</div>
			</div>
		</section>
		
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
							<li class="drug-alerts">
								<a class="prev-ch" href="./e-prescribing.php"><span class="prev"></span><span class="ch-name">E-Prescribing</span></a> 
								<a class="next-ch" href="./human-factors.php"><span class="next"></span><span class="ch-name">Human Factors</span></a></li>
							</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php include './footer.php'; ?>

					</div>
					<hr />
					<div class="resources">
					<p>Additional Resources</p>
					<div class="section_cite">
						<p><em>From the National Center for Cognitive Informatics &amp; Decision Making in Healthcare</em></p>
						<h5>EHR Safety Enhanced Design Briefs</h5>
						<p><a target="_blank" class="link" href="https://sbmi.uth.edu/nccd/SED/Briefs/sedb-mu01.htm">Drug-drug, drug-allergy interaction checks</a></p>
						<p><a href="https://sbmi.uth.edu/nccd/SED/Briefs/sedb-mu04.htm" target="_blank" class="link">Clinical Decision Support</a></p>

						<h5>EHR Usability</h5>
						<p><a href="https://sbmi.uth.edu/nccd/ehrusability/" target="_blank" class="link">Designing for Usability</a></p>
					</div>
					<hr />
					<div class="section_cite">
						<h6>References</h6>
						<ol>
							<li>Paterno, Marilyn D., Saverio M. Maviglia, Paul N. Gorman, Diane L. Seger, Eileen Yoshida, Andrew C. Seger, David W. Bates, and Tejal K. Gandhi. “Tiering Drug-Drug Interaction Alerts by Severity Increases Compliance Rates.” <em>Journal of the American Medical Informatics Association </em>: JAMIA 16, no. 1 (2009): 40–46. doi:10.1197/jamia.M2808.</li>
							<li><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2605599/">http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2605599/</a></li>
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