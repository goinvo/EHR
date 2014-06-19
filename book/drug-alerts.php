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

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="drug-alerts">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>

		
	<section id="ch-6" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>6</h2>
					<h2>Drug Alerts</h2>
					<!--<div class="subheader"><p></p></div>-->
				</div>
			</div>
		</header>
		<section id="drug-allergy-alerts">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Drug alerts need to strike a balance between increasing safety on the one hand and reducing cognitive load and alert fatigue on the other. We will consider two types of  drug-related alerts: drug-allergy alerts and drug-drug interaction alerts. The topic of drug interaction alerts encompasses a wide range of considerations including the following: alert fatigue, patient safety, quality of evidence, complexity of categorization, recommended actions and more. We will confine our scope by applying human factors and design principles to the more straightforward aspects of drug alert design. Let's start with a simple clinical scenario.</p>
					<h3>Drug Allergy Alerts</h3>
					<div class="scenario">
						<h5>Clinical Scenario #1: So that’s a form of penicillin?</h5>
						<p>Casey is a 58-year-old who has been in good health for decades. The only exception was a hospitalization after a severe automobile accident a decade ago. At that time, she had been receiving IV antibiotics and had a documented allergy to Unasyn (a combination including ampicillin and sulbactam) consisting of generalized hives, itching, and facial swelling</p>
						<p>Today she is visiting her primary care doctor with symptoms of acute sinusitis that has been going on for almost 2 weeks and not improving. Augmentin (amoxicillin plus clavulanate) is a reasonable first choice. Her physician glances at the allergy list in the patient better and notices the word "Unasyn" but does not see the word 'penicillin'. As he starts to write the prescription, an ambient alert appears warning that the patient is allergic to 'Unasyn'. The physician fills in the details on the prescription anyway and then gets a drug alert that interrupts workflow. The physician reconsiders and realizes that Unasyn is a form of penicillin as is Augmentin. Therefore, he chooses a different antibiotic, doxycycline and sends the prescription.</p>
					</div>
					<p>The design for a Drug Allergy Alert  needs to support the physician’s thinking process:</p>
					<ul class="disc">
						<li><strong>What is the problem?</strong> It’s a drug allergy.</li>
						<li><strong>What are the key details?</strong> The drug you prescribed is Augmentin. The patient is allergic to Unasyn. Both are penicillins. The symptoms are significant.</li>
						<li><strong>What are the possible actions?</strong> The physician can either cancel the new Augmentin prescription, or continue to prescribe Augmentin (and optionally provide feedback).</li>
						<li><strong>What if the physician still has questions?</strong> The physician may need access to more details about the allergic reaction, or they may decide to interview the patient first and later update the Allergy List.</li>
					</ul>
					<p>Let’s look at two examples of a Drug Allergy Alert. One is typical of current EHRs and the second is redesigned.</p>
					<div class="example" class="fig-6-1">
						<div class="ex-title">
							<span class="ex-type">Figure 6.1</span>
							<span class="ex-caption">Before</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/DrugAllergyAlertCerner2014_Unasyn_AugmentinRx.png"><img src="./assets/images/examples/drug-alerts/DrugAllergyAlertCerner2014_Unasyn_AugmentinRx.png" class="scale-with-grid" /></a>
					</div>
					<div class="example" class="fig-6-2">
						<div class="ex-title">
							<span class="ex-type">Figure 6.2</span>
							<span class="ex-caption">After</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0000_DrugAllergyAlert-2014-c.png"><img src="./assets/images/examples/drug-alerts/UmEhr_0000_DrugAllergyAlert-2014-c.png" class="scale-with-grid" /></a>
					</div>
					<p><a href="#fig-6-1">Figure 6.1</a> lacks emphasis to direct the reader’s eye. The title of the window does not mention 'Drug Allergy Alert.' All the text is roughly the same size so that it all appears to be of equal importance. The page is very busy with words, but the open space does not help direct the eye. There are three hyperlinks, but two of them lead to the same reference information, which is unlikely to aid the decision-making process.</p>
					<p><a href="#fig-6-2">Figure 6.2</a> allows the physician to see at a glance that the alert is about a drug allergy, the names of the drugs, and the key facts about the reaction. The alternative actions are evident.</p>
					<p>We used a few design principles. Add visual emphasis by using larger font sizes or bold or color for the title and key section headers. Less important type can be subdued by using gray text or smaller text. Group related items by proximity and judicious use of white space.</p>
				</div>
			</div>
		</section>

		<section id="alert-fatigue">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Alert Fatigue</h5>
					<p>The aim of Drug Allergy Alerts is to inform the prescribing physician about an allergy that may have been overlooked, so the risks and benefits can be compared before completing the prescription order.</p>
					<p>Alert fatigue happens when so many low value alerts happen that the physician user assumes that all alerts are low value. They dismiss the alert before fully reading or considering the alert.</p>
					<p>Alert fatigue can be mitigated by adjusting the threshold for alert severity. Only the most dangerous alerts are presented, and less risky alerts are filtered out. In some institutions the physicians get only the highest level alerts but the pharmacists get more alerts of lower severity.</p>
				</div>
			</div>
		</section>

		<section id="user-preferences">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>User preferences to dismiss future alerts</h5>
					<p>What if individual users could fine-tune the alerts they get? Rather than reviewing a long catalog list of interactions, just collect usefulness data as the alerts are presented, and let the physician “snooze” or turn off alerts in certain clear-cut circumstances.</p>
					<div class="example" class="fig-6-3">
						<div class="ex-title">
							<span class="ex-type">Figure 6.3</span>
							<span class="ex-caption">Dismiss Future Alerts</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0001_DrugAllergyAlert-2014c-w-details.png"><img src="./assets/images/examples/drug-alerts/UmEhr_0001_DrugAllergyAlert-2014c-w-details.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="alert-feedback">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Collecting feedback about usefulness of alerts</h5>
					<p>I’m not aware of an EHR collecting feedback about drug alerts, but it could allow crowdsourcing data about the utility of drug alerts. There are just a handful of companies providing the drug data that fuels drug allergy and drug interaction alerts. If EHR vendors could provide data that 90% of their users found a particular alert to be unhelpful, then the drug data vendors could reassess that particular data element.</p>
					<div class="example" class="fig-6-4">
						<div class="ex-title">
							<span class="ex-type">Figure 6.4</span>
							<span class="ex-caption">Alert Feedback</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0002_DrugAllergyAlert-2014-c-leave-feedback.png"><img src="./assets/images/examples/drug-alerts/UmEhr_0002_DrugAllergyAlert-2014-c-leave-feedback.png" class="scale-with-grid" /></a>
					</div>
					<p>There will always be a tension trying to balance legal cautiousness against physician delight.</p>
				</div>
			</div>
		</section>

		<section id="drug-interaction-alerts">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Drug-Drug Interaction Alerts</h3>
					<p>Drug interactions are far more complex than drug allergies. With drug allergies, an allergy is either present or not, with some room for doubt about the allergy or adverse effect details. However, with drug interactions, there are more variables: tiers of severity, alert threshold settings, and variables about the patient (age, weight, pregnancy, renal function).</p>
					<div class="scenario">
						<h5>Clinical Scenario #2: Urinary Infection and Severe drug interaction</h5>
						<p>Casey is our 58-year-old who was involved in a motor vehicle accident and now has chronic pain requiring a multi-pronged treatment approach including medications from several categories. She is taking the muscle relaxant tizanidine to treat her low back spasms. The past two days she developed frequent, urgent, and painful urination. Her primary care physician diagnosed a bladder infection and prescribed ciprofloxin. As he started to order the antibiotic, ciprofloxin, an ambient (non-intrusive) alert appeared in the corner of the screen. Rather than completing the prescription details and selecting the pharmacy, the doctor stopped and chose a different antibiotic for which there were no drug interactions.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="ambient-alert">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Ambient Alert</h5>
					<div class="example" class="fig-6-5">
						<div class="ex-title">
							<span class="ex-type">Figure 6.5</span>
							<span class="ex-caption">Ambient Alert</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0009_ambient-alert.png"><img src="./assets/images/examples/drug-alerts/UmEhr_0009_ambient-alert.png" class="scale-with-grid" /></a>
					</div>
					<p>The ambient alert appears in the corner of the EHR screen, but does not stop the physician’s workflow. However seeing the visual signals in the peripheral vision (red bar, number '1') would allow the physician to understand the severity without reading the alert at all. That process of rapid, nearly unconscious processing of attention uses “preattentive attributes” of visual perception in the brain. The red bar with the word “contraindicated” clearly identifies the level of severity of the interaction. The numeral “1” in the box is an additional signal that would help the ~5% of males with red-green colorblindness.</p>
				</div>
			</div>
		</section>

		<section id="interruptive alert">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Interruptive Alert</h5>
					<p>Had the physician continued to complete the order, select the pharmacy, and send an e-Prescription, an interruptive alert would have been presented to assure patient safety. The interruptive alert stops the physician workflow completely, requiring the physician’s full attention in processing the information. Using interruptive alerts too much causes physician dissatisfaction and reduces the effectiveness of the alerts, causing physicians to miss important alerts. Many EHR’s allow the healthcare organization to customize the level of alerts that appear to physicians (the most serious ones) and to pharmacists (the most serious and additional milder reaction tiers as well).</p>
					<div class="example" class="fig-6-6">
						<div class="ex-title">
							<span class="ex-type">Figure 6.6</span>
							<span class="ex-caption">Interruptive Alert</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0003_drug-drug-interaction-unselected.png"><img src="./assets/images/examples/drug-alerts/UmEhr_0003_drug-drug-interaction-unselected.png" class="scale-with-grid" /></a>
					</div>
					<p>A physician can’t just hit “Enter” until one of three choices is selected. Then the physician confirms the choice by hitting “Enter” key or clicking “OK” button. The additional step allows the physician a chance to correct a mistake.</p>
					<div class="example" class="fig-6-7">
						<div class="ex-title">
							<span class="ex-type">Figure 6.7</span>
							<span class="ex-caption">Before a selection is made, the 'continue' button is inactive</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0004_drug-drug-interaction-unselected-annotated.png">
						<img src="./assets/images/examples/drug-alerts/UmEhr_0004_drug-drug-interaction-unselected-annotated.png" class="scale-with-grid" /></a>
					</div>
					<div class="example" class="fig-6-8">
						<div class="ex-title">
							<span class="ex-type">Figure 6.8</span>
							<span class="ex-caption">Once a choice is made, the “OK” button becomes active</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/drug-alerts/UmEhr_0005_drug-drug-interaction-selected.png">
						<img src="./assets/images/examples/drug-alerts/UmEhr_0005_drug-drug-interaction-selected.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="multiple-alerts">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Multiple Alerts</h5>
					<p>There are two options for managing multiple drug alerts.</p>
						<ol>
							<li>All in a single screen</li>
							<li>Present serial screens</li>
		    			</ol>
	    			<p>In a single screen, physician have the benefit of seeing the big picture of drug-allergy and drug-drug interactions. Without the need to navigate to see each alert, the physician can run down the list and make a decision for each. However, showing all the alerts at once may be more visually overwhelming.</p>
	    			<p>Presenting each alert in individual screens, one right after the other, may be a better solution for smaller mobile screens. A physician won't be able to see an overview of all the issues, but is afforded with performing one task at a time. This could help mitigate information overload. However, if there are a dozen or more alerts to review, not only alert fatigue but also click fatigue won't be far behind.</p>
	    			<div class="example" id="gal-6-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 6.1</span>
							<span class="ex-caption">Option 1: Present All Alerts in a Single Screen</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UmEhr_0006_multiple-alerts.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/drug-alerts/UmEhr_0006_multiple-alerts.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Overview screen</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UmEhr_0007_multiple-alerts-some-selected.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/drug-alerts/UmEhr_0007_multiple-alerts-some-selected.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Option 1: Present All Alerts in a Single Screen</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UmEhr_0008_multiple-alerts-all-selected.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/drug-alerts/UmEhr_0008_multiple-alerts-all-selected.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">After all actions are selected, final action button becomes active</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>Here is a mockup for smartphone where real estate is limited on each page.</p>

					<div class="example" id="gal-6-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 6.2</span>
							<span class="ex-caption">Option 2: Present the choices in a series of views</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0000_main.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0000_main.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Main screen: overview of alerts</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0001_allergy-1.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0001_allergy-1.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Drug-allergy alert</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0002_allergy-2.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0002_allergy-2.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Select action</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0003_dd1.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0003_dd1.png" class="scale-with-grid" alt="multiple alerts" /></a>
									<div class="caption">Drug-drug interaction alert</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0004_dd2.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0004_dd2.png" class="scale-with-grid" alt="select multiple alerts" /></a>
									<div class="caption">Select action</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0005_final.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0005_final.png" class="scale-with-grid" alt="select multiple alerts" /></a>
									<div class="caption">Final screen: Confirm actions</div>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="clinical-decision-support">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Clinical Decision Support</h3>
					<p>The opportunities for clinical decision support abound throughout the EHR. Clinical Decision Support (CDS) is a wide ranging subject that can encompass a variety of tools:</p>
						<ul>
							<li>simple links to a concise reference</li>
							<li>links to original detailed sources (which can range from a single page to an entire journal special edition</li>
							<li>order sets that pre-select the best practice while offering alternative options</li>
							<li>orders driven by algorithms that incorporate the patient’s personalized health data</li>
							<li>alerts (ambient or intrusive) driven by quality measures that the healthcare organization has chosen to improve</li>
						</ul>
					<p>Clinical Decision Support is a complex realm, and we merely offer some visual examples to convey the range types of CDS.</p>
					<div class="example" id="gal-6-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 6.3</span>
							<span class="ex-caption">Option 2: Present Each Alert in Serial Screens</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0001_list.png" class="fancybox"  data-fancybox-group="gallery-3">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0001_list.png" class="scale-with-grid" alt="" /></a>
									<div class="caption">Lab Results in the physician’s inbox</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/UM_EHR_0000_annotated.png" class="fancybox"  data-fancybox-group="gallery-3">
									<img src="./assets/images/examples/drug-alerts/UM_EHR_0000_annotated.png" class="scale-with-grid" alt="" /></a>
									<div class="caption">Opportunities for Clinical Decision Support</div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="example" class="fig-6-9">
						<div class="ex-title">
							<span class="ex-type">Figure 6.9</span>
							<span class="ex-caption">Algorithm as Clinical Decision Support - Atrial Fibrillation</span>
						</div>
						<a href="./assets/images/examples/drug-alerts/AfibAlgorithm.png" class="fancybox">
						<img src="./assets/images/examples/drug-alerts/AfibAlgorithm.png" class="scale-with-grid" alt="" /></a>
					</div>
					<p>This algorithm includes scoring tools for initial drug selection (aspirin or warfarin or dabigatran), cues about relative cost of drugs, suggests only a few economical drug choices, and is geared especially toward primary care physicians.</p>
					<h3>Graphical Decision Aids for Patients and Physicians - Mayo Clinic Statin/Aspirin Choice</h3>
					<p>The Mayo Clinic has a well-designed decision aid for patients and physicians for deciding about taking aspirin or statin or both to prevent heart attack. </p>
					<p><a href="http://statindecisionaid.mayoclinic.org">http://statindecisionaid.mayoclinic.org</a></p>
					<p>It is designed to manually add the patient’s risk information (age, gender, blood pressure, smoking history, lipid results, etc.) to calculate the risk of heart disease. It also displays risks and other benefits from taking the selected drug. It’s a good tool for weighing the pros and cons, and displays the information graphically as well as numerically.</p>
					
					<div class="example" id="gal-6-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 6.4</span>
							<span class="ex-caption">CDS Examples</span>
						</div>
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/MayoClinicStatinAspirinCDS1.png" class="fancybox"  data-fancybox-group="gallery-4">
									<img src="./assets/images/examples/drug-alerts/MayoClinicStatinAspirinCDS1.png" class="scale-with-grid" alt="" /></a>
									<div class="caption">Lab Results in the physician’s inbox</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/drug-alerts/MayoClinicStatinAspirinCDS2.png" class="fancybox"  data-fancybox-group="gallery-3">
									<img src="./assets/images/examples/drug-alerts/MayoClinicStatinAspirinCDS2.png" class="scale-with-grid" alt="" /></a>
									<div class="caption">Opportunities for Clinical Decision Support</div>
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
					<h3>Summary</h3>
						<ol>
							<li>Understand the physician’s workflow to understand what level of detail is needed for the task at hand. </li>
							<li>Use interruptive alerts only when the consequence is high-risk or serious impact. Help prevent “alert fatigue” with repeated interruptive alerts for less important risks.</li>
							<li>Simplify the visual presentation without omitting key details. </li>
							<li>Use preattentive attributes (like color, size, shape, alignment) to draw the user’s attention to the salient details in Drug Alerts.</li>
							<li>Consider capturing user feedback about the value of individual alerts. Make it easy to do within the workflow, but make it optional.</li>
							<li>Use ambient alerts early in the prescribing workflow. They avoid interrupting the workflow unless the physician chooses to stop.</li>
							<li>Clinical Decision Support (CDS) comes in many flavors. We offer some example images.</li>
						</ol>
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
							<p class="pagination prev_ch"><a href="./eprescribing.php"><span class="prev"></span> ePrescribing</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./human-factors.php">Humans Factors<span class="next"></span></a></p></div>
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