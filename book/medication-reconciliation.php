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
					<p>Medication reconciliation is the comparison and combining of two or more medication lists. It usually implies a conversation between the patient and a health care professional. In this chapter, we will explore  medication reconciliation in both the <strong>inpatient</strong> and the ambulatory setting. We’ll show you the excellent prototype called “Twinlist” that demonstrates inpatient medication reconciliation. Then we’ll concentrate on the <strong>ambulatory</strong> setting, focusing on the patient's experience of annotating and correcting the list as it appears in the electronic health record (EHR) at the very beginning of the visit. In this chapter, it should be understood that any reference to the patient would equally apply to the caregiver or family, and that “physician” might apply to other professionals with prescribing authority.</p>
				</div>
			</div>
		</section>
		
		<section id="inpatient" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>Inpatient Medication Reconciliation</h3>
					<p>Consider this inpatient clinical scenario.</p>
					<div class="scenario"><h5>Inpatient Clinical Scenario - "Trouble breathing"</h5>
						<p>Mr. Jones is a 74-year-old, married businessman, now retired. He is being treated for coronary artery disease (stent placed at age 70), constipation, diabetes, hyperlipidemia, GERD, hypertension, and mild dementia. His primary care physician sent him to the hospital Monday morning after his wife insisted he go to the clinic because he was having trouble breathing and was rubbing his chest. He had been doing fine until sometime during the night. She said he had seemed quite well Sunday afternoon when two of their sons came over to watch the game with him. They made it a “a little tailgate party, hot dogs with sauerkraut and everything."</p>
						<p>On examination, his physician found moderate pulmonary congestion, but no EKG changes. Troponin was negative. Because of his past history and strong family history of MI, he was admitted, treated, and now on Wednesday afternoon, wants to be discharged. One of the medical house officers is handling the discharge orders, including medication reconciliation.</p>
					</div>
					<p>First, let’s take a look at the prototype called “Twinlist”  for an award-winning demo of medication reconciliation. Watch this short video.</p>
					<div class="example" id="vid-3-1">
						<div class="ex-title">
							<span class="ex-type">Video 3.1</span>
							<span class="ex-caption"><a href="http://www.youtube.com/watch?v=YXkq9hQppOw&feature=youtu.be" target="blank">TwinList Demo</a></span>
						</div>
						<video controls class="twinlist">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.mp4"  type="video/mp4; codecs=avc1.42E01E,mp4a.40.2">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.webm" type="video/webm; codecs=vp8,vorbis">
							  <source src="./assets/images/examples/medication-reconciliation/Twinlistdemo.ogv"  type="video/ogg; codecs=theora,vorbis">
						</video>
					</div>
					<p><a href="http://www.cs.umd.edu/hcil/sharp/twinlist/dev/indev/ipad/index.html?case=__DATASET_APPENDECTOMY__&version=__VERSION_FULL__&amp;animate=__AUTO_ANIMATE_ON__" target="blank">Go to TwinList interactive demo</a>. You can control the prototype demo using the controls at the top of the demo. </p>
					<p>In this scenario, the physician managing the discharge orders will compare the patient’s list of home medications to the list on the last day of the hospital stay and make medical decisions about which medications will be continued or modified after discharge. Here are some of the features that make Twinlist very effective.</p>
					<ol>
						<li>Spatial grouping is intuitive (the closer things are, the more alike they are).</li>
						<li>Animation helps users quickly learn and understand the groupings of the drugs.</li>
						<li>Highlighting key differences fosters easier decision-making.</li>
						<li>Selecting is easy by clicking on large rectangular buttons which list the drug information.</li>
					</ol>
					<p>Let's look through some individual images to review the details.</p>
					<div class="example" id="gal-3-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.1</span>
							<span class="ex-caption">TwinList</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png"><img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0000_two-lists-side-by-side-before-matching.png" class="scale-with-grid" /></a>
									<div class="caption">Two lists Side by side before matching</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png">
									<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0001_the-identical-drugs-moved-to-the-center.png" class="scale-with-grid" /></a>
									<div class="caption">The identical drugs moved to the center</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png">
									<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0004_when-the-pointer-hovers-over-a-drug.png" class="scale-with-grid" /></a>
									<div class="caption">When the pointer hovers over a drug</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png">
									<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0002_the-drug-becomes-bright-green-when-selected.png" class="scale-with-grid" alt="The drug becomes bright green when selected" title="The drug becomes bright green when selected" /></a>
									<div class="caption">The drug becomes bright green when selected</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png">
									<img src="./assets/images/examples/medication-reconciliation/UmEhr_TwinList_0003_the-final-selection.png" class="scale-with-grid" alt="The final selection" title="The final selection" /></a>
									<div class="caption">The final selection</div>
								</div></li>
							</ul>
						</div>
					</div>
					<h5>The Twinlist prototype uses a number of human factors principles to make it efficient and safe.</h5>
						<ol>
							<li>Identifying similar drugs is visually intuitive<ol>
								<li>‘Identical’ medications are matched and merged, thus reducing the mental effort (cognitive load) of the physician.</li>
								<li>‘Similar’ medications are matched algorithmically and aligned on the same row horizontally. This reduces the need for repetitive visual scanning of the two lists.</li>
								<li>‘Unique’ medications appear in only one column and move to the far outside of the display.</li>
							</ol></li>
							<li>The brain processes information quickly through the “preattentive attribute” of spatial grouping.<ol>
								<li>The spatial groupings allow the physician to quickly identify the key groups (identical, similar, and unique). Identical drugs move to the center. The more different two drugs are, the farther apart they appear horizontally.</li>
								<li>Differences between similar (non-identical) medications are highlighted in golden yellow, again reducing the need to visually scan, read, and compare. </li>
							</ol></li>
							<li>The animation helps users quickly learn and understand the groupings of drugs. Once the user is familiar with the tool, the animation can be turned off or sped up.<ol>
								<li>Compacting the list helps save vertical space. The drugs that need more effort move to the bottom. </li>
								<li>Identical drug pairs merge into the center as perfect matches.</li>
							</ol></li>
							<li>The visualization can be manipulated to discover more relationships.<ol>
								<li>Hovering over a drug highlights and matches similar drugs and show more details about the drug at the bottom of the screen (e.g. drug class or indication). Clicking to select a drug in a pair rejects the others.</li>
								<li>Menus support group actions on multiple drugs at once.</li>
								<li>Recovery from error is simple by clicking a drug again to toggle to the next state (accepted, rejected, or undecided).</li>
							</ol></li>
						</ol>
					<p>Inpatient medication reconciliation also involves ordering, ePrescribing, and documentation. It requires dynamic conversations with the patient and any caregivers involved at the time of admission, and again at the time of discharge. Successful inpatient medication reconciliation involves understanding medication administration (How much insulin or analgesics were actually used in the last few days?) and clinical assessment (Will the patient be able to tolerate the oral version of this medication as we stop the intravenous (IV) version? What dose should we start with? How soon will home doses need to be adjusted, and by whom? Are there issues with insurance coverage and affordability?).</p>
					<p>Physicians commonly care for patients who have moved from one unit to the next (ER to general nursing unit to ICU to step-down unit and back to general nursing unit again). Critically ill inpatients may be unable to take their oral medications, and may be receiving several IV medications including IV drip medications in the intensive care unit. As patients begin to recover, they may resume previous medications at a reduced dose which may gradually change throughout the hospital stay. By the time of hospital discharge, some home medications may be resumed, some of those doses may need to be adjusted, and additional new medications may be prescribed.</p> 
					<p>The physician doing inpatient medication reconciliation in such a complex case may benefit from a multi-list visualization tool that has more than two starting columns. The developers of Twinlist have also created alternative designs that can accommodate more than 2 lists called <a href="http://www.cs.umd.edu/hcil/manylists/" target="blank">ManyLists</a> that may be used with for more than 2 lists. Such a multi-list tool could help physicians more easily track single medication changes throughout the hospital stay, more easily make direct visual comparisons of the separate instances of a single drug throughout the hospital stay, and get assistance from the matching algorithms of the ManyLists tool.</p>
				</div>
			</div>
		</section><!--end section inpatient-->
		
		<section id="ambulatory" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Ambulatory Medication Reconciliation</h3>
					</div>
					<p>Ambulatory medication reconciliation can be accomplished with a two-list model (the EHR list, and what the patient actually takes). Information about medication adherence may be collected simultaneously during the interview by the healthcare team member or by using a self-administered patient form. Here is the workflow for medication reconciliation in the outpatient setting.</p>
					<div class="example" id="fig-3-1">
						<div class="ex-title">
							<span class="ex-type">Figure 3.1</span>
							<span class="ex-caption">Ambulatory Medication Reconciliation workflow</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/ambulatorychart.png"><img src="./assets/images/examples/medication-reconciliation/ambulatorychart.png" class="scale-with-grid" alt="Ambulatory workflow" title="ambulatory workflow" /></a>
					</div>
					<p>After the visit and after the physician and patient agree upon a new plan of action, the physician changes the medication list, and the patient gets an updated copy of the list to take home.</p>
					<div class="scenario"><h5>Ambulatory Clinical Scenario 1- Hero with chronic pain</h5>
						<p>Mrs. Stanton is a high school teacher who had some serious injuries after trying to help a stranded motorist along the roadside when a distracted driver swerved off the pavement and struck her. After prolonged hospitalization and some physical therapy, she is now under the care of an orthopedic surgeon, a pain management specialist, and her primary care doctor. Today's visit with her primary care doctor involves several changes in her medication list.</p>
						<p>She notices that the medication list given to her at the beginning of the visit doesn't match up with what she thinks she should be taking. Her pain specialist recently started a new medication (nortiptyline) and stopped another one (hydrocodone-acetaminophen), while her orthopedic surgeon increased the dose of a third medication (Celebrex).</p>
						<p>As she annotates the medication list, she needs to indicate those three changes.</p>
						<p>Here's what the primary care physician's current medication list indicates at the beginning of the visit.</p>
						<table class="scenario-list">
							<tbody>
								<tr><td>celecoxib (Celebrex) 100 mg one capsule twice daily</td></tr>
								<tr><td>citalopram 20 mg daily for depression </td></tr>
								<tr><td>hydrocodone-acetaminophen 5-325 mg two tablets every six hours as needed for pain.</td></tr>
								<tr><td>levothyroxine 100 mcg daily</td></tr>
								<tr><td>lidocaine topical (Lidoderm) 5% patch, Apply to intact skin, covering most painful areas for 12 hours each day.</td></tr>
								<tr><td>metoprolol succinate 100 mg daily</td></tr>
								<tr><td>multivitamins one tablet daily</td></tr>
								<tr><td>omeprazole 20 mg daily</td></tr>
								<tr><td>sumatriptan (Imitrex) 100 mg as needed to abort a migraine. May repeat once in 2 hours if headache recurs.</td></tr>
								<tr><td>triamcinolone 0.1% cream applied three times a day to eczema rash for 2 to 4 week</td></tr>
						</table>
					</div>
					<h5>How will a patient mark the EHR list with updated information?</h5>
						<p>Here’s one example of a typical pre-visit list that a patient might encounter today. One simple improvement would be to modify a few typographic detail. See the next image in the gallery.</p>
					<div class="example" id="gal-3-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 3.2</span>
							<span class="ex-caption">Patient List</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-1.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-1.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-2.png">
									<img src="./assets/images/examples/medication-reconciliation/UM_EHR_0002_paper-example-2.png" class="scale-with-grid" alt="" title="" /></a>
									<div class="caption"></div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>Notice how the improved version adds emphasis to the medication name and dose, and de-emphasizes other aspects of the medication description. The list can be easily scanned to find the drug name, so comparing the two lists is easier. Notice the list is alphabetized by the generic name, but brand names can also be shown and are easy to spot.</p>
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
							<p class="pagination prev_ch"><a href="./medication-list.php">Go back to Medication List</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./allergy-list.php">Continue to Allergy List</a></p></div>
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