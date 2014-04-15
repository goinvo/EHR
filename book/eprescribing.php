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
<body class="eprescribing">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-2" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>5</h2>
					<h2>ePrescribing and CPOE</h2>
					<!--<div class="subheader"><p>Successful medication management is a key part of a patient’s health</p></div>-->
				</div>
			</div>
		</header>

		<section id="eprescribing">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>In this chapter we’ll focus on e-prescribing (eRx) and Computerized Physician Order Entry (CPOE) in the ambulatory setting. We’ll highlight their use for managing chronic disease, and focus particularly on e-prescribing.</p>
					<h3>E-prescribing</h3>
					<p>E-prescribing can be one of the most satisfying aspects of a physician’s EHR life because it saves the duplication of effort of hand-writing prescriptions, updating the list of medications, and including the changes in the office notes. E-prescribing offers the opportunity to reduce medication errors from mistaken dosing, from misreading the prescription at the pharmacy, and even from picking the wrong drug with a similar name. </p>
					<p>The back-end process of e-prescribing sends discrete electronic data to a central hub which then distributes the prescription message to the target pharmacy electronically (or by fax to pharmacies lacking e-prescribing capability). Messages for renewal request can be sent from the pharmacy to the prescribing physician. As of this writing, the U.S. system is not equipped to handle cancellation messages from physician to pharmacy. </p>
					<div class="scenario">
						<h5>Clinical scenario 1: New prescription for newly diagnosed diabetes</h5>
						<p>Mr. Martin is a 53-year-old construction supervisor who was diagnosed with diabetes at his family physician’s office three months ago. He has made some changes in his eating choices and is more physically active than before the diagnosis. His weight hasn’t changed much, but his finger stick blood sugars at home are improving, still averaging around 200 (his goal is 80-150). His hemoglobin A1c is 8.1 (his goal is 7 or less). </p>
						<p>His physician has recommended starting a new medication, and the drug of choice would be metformin. The doctor shows Mr. Martin on the EHR screen that metformin is on Mr. Martin’s insurance formulary and has the lowest tier copay. Both of them are pleased. Mr. Martin wants to start with just a 30 day prescription from his local pharmacy in case he has any side-effects like diarrhea. He also hopes that he won’t need the medication for long, since he hopes to lose weight once he can start exercising outside as the weather warms. His physician explains that the medication is likely to be lifelong, but he’d be happy to reduce the dose or stop it Mr. Martin’s blood sugars improve enough with more exercise and weight loss. The new prescription is sent electronically to the local pharmacy.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="search">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Searching for a new medication</h5>
					<p>Most of the time physicians will have a particular medication in mind they want to prescribe. In that case, choosing from a “favorites” list or searching for the drug are the quickest routes to a new prescription. Your EHR should make it easy to make the right choice and to fill in the details. In most cases, pre-populating the details will save the physician time and mental effort (cognitive load) and reduce the risk of errors. Pre-populating the search results as the physician types is very helpful. Using data from the Problem List or Diagnosis List could promote likely matches farther up the list.</p>
					
					<div class="example" id="gal-5-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.1</span>
							<span class="ex-caption">Making prescription search results robust</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0000_autocomplete.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/eRx/UM_EHR_0000_autocomplete.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Typing causes the list to pre-populate. User favorites should jump to the top of the list.</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-2.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-2.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Typing more characters causes closer match and additional details (tablet strength) appear.</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-3.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-3.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Allow typing a portion of the drug name, and then skip to additional details. Here the physician added '500' and started to type 'bid.'</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-4.png" class="fancybox"  data-fancybox-group="gallery">
									<img src="./assets/images/examples/eRx/UM_EHR_0000_autocomplete-4.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Adding the number of tablets makes the top choice exactly what the doctor ordered. We would expect the prescription order to include a year’s worth of refills.</div>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Prescribing a New Medication</h5>
					<p>Once the physician finds the correct medication, he’ll need to manage additional details. With thoughtful design, most of those details can be pre-populated using the most likely starting dose instructions. For a physician experienced with their EHR, the system can suggest frequently used choices or the physician’s favorites. For a returning patient, the choice of pharmacies should be known. Formulary information should be available if the system knows the patient’s pharmacy benefit plan.</p>
					<div class="sidebar cf">
						<p>Some of the details will depend on the patient’s preferences:</p>
						<table class="sidebar-table" id="">
							<thead>
								<tr>
									<th></th>
									<th>Physician Considerations</th>
									<th>Developer Considerations</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>30 or 90 day supplies?</strong></td>
									<td>Patients will choose depending on cost, convenience, whether it’s a new drug that they want to try out first to determine tolerance and effectiveness.</td>
									<td>It really should be 31 or 92 day supplies. Do the math (366 days/12 months = 30.5). The EHR should calculate the amount to order based on the dosing and the days’ supply ordered. This mathematical decision support is even more helpful for pediatric dosing of liquids, for insulin, and for inhalers (a single inhaler is often but not necessarily a 30 day supply).</td>
								</tr>
								<tr>
									<td><strong>Which pharmacy does the patient wish to use? </strong></td>
									<td>Patients may have from one to several preferred pharmacies. Some people use a mail-order pharmacy, a favorite local pharmacy, and another local pharmacy with some logistical advantage (closer to work, or to home, or to the doctor’s office, or with more convenient hours).</td>
									<td>The EHR should allow at least 3 patient-preferred pharmacies. Allow the list to be modified to remove a pharmacy that is no longer preferred by the patient, since insurance plans change almost annually and the preferred pharmacies may change as well. </td>
								</tr>
								<tr>
									<td><strong>Are there dose limitations to consider?</strong></td>
									<td>Patients may be taking other drugs that contain the new drug being prescribed. This is particularly common with pain relievers. People may be taking Tylenol (acetaminophen) alone, in combination with cough and cold remedies, or in prescription combination analgesics like Vicodin or Percocet.</td>
									<td>Provide dose-limit calculation to protect from overdosing the patient. Add warnings that advise patients not to exceed the acetaminophen maximum total daily dose (4 grams/day).</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h5>Review before sending the new prescription order</h5>
					<p>The physician will need to review the final configuration of the new prescription. The EHR can flag missing elements. The physician may still need to make last minute modifications after verbally reviewing with the patient. Instructions for tapering doses need to be worded clearly and should be available as preconfigured text. Here is an example of instructions for tapering doses: “4 tablets once daily for 3 days, then 3 tablets once daily for 3 days, then 2 tablets daily for 3 days, then 1 tablet daily for 3 days, then stop”. If there are transition instructions (stopping another medication a few days before or after starting the new one), they should be added. Drug alerts can be displayed passively before the final order is given. Interruptive alerts will fire after the final order is sent.</p>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Changing the dose</h5>
					<p>Most medications have a range of possible doses, so modifying a dose is a very common prescriber activity. It can be as simple as stopping the prior dose and starting the new dose, or as complicated as titrating upward using different tablet sizes over an extended period of time. Sometimes the change will involve splitting tablets (if it’s safe to do), using multiple tablets of the prior dose, or spreading the dose out through the day (2 in the AM, 1 at lunch, 2 at bedtime) to achieve a more even therapeutic effect or reduced adverse effect.</p>
					<div class="scenario">
						<h5>Clinical scenario 2: Increasing the dose of anti-hypertensive medication.</h5>
						<p>A few years later, Mr. Martin’s diabetes is well controlled but he has developed high blood pressure. Three months ago, he started on lisinopril 10 mg daily for his high blood pressure (it also protects the kidneys in people with diabetes). Today his BP is still just a little high (as well as his readings at home) at 153/96. Mr. Martin is tolerating the medication well, so his physician wants to increase the dose of medication to 20 mg daily. Mr. Martin has just received a 90 day supply in the mail last week, so he asks if he may use up his current supply of 10 mg tablets by taking 2 tablets daily for a while. </p>
						<p>Mr. Martin is afraid that he’ll be getting a new bottle of 20 mg pills 6 weeks before he really needs them. He asks his doctor how he can avoid that. Can Mr. Martin just call later for the new prescription (bad idea, it’s wasteful effort to handle the request later)? Can he take a printed prescription to submit later? Can the EHR send a message to the pharmacist instructing her not to fill the prescription until the patient makes contact to request that it be filled?</p>
					</div>
					<h5>Make it easy to change the current order to the new order</h5>
					<p>Don’t make the physician throw away the old Rx and start over. That requires more time and mental effort and introduces the risk of error. Most often, the tablet strength is the only change. Offer a pick menu of the alternative strengths of this particular medication form. Quantity may need to be adjusted. Sometimes, increasing from 1 tablet daily to 2 tablets daily is preferred (allows flexibility in subsequent dose adjustment, in case 1.5 tablets ultimately is best). Other times, the patient may choose a different pharmacy, or request a 2-4 week supply to fill locally while awaiting the mail order 90 day supply.</p>
					<div class="example" class="fig-5-1">
						<div class="ex-title">
							<span class="ex-type">Figure 5.1</span>
							<span class="ex-caption">Allow quick modification by offering the most common choices for a particular medication</span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0001_med-list-expand.png" class="fancybox">
						<img src="./assets/images/examples/eRx/UM_EHR_0001_med-list-expand.png" class="scale-with-grid" alt="" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Allow association of a diagnosis or chronic problem</h5>
					<p>Associating one or more diagnoses with a prescribed medication allows filtering and sorting medication list displays by diagnosis. This makes the table view and the timeline view of medications more powerful for displaying data in a manner that reduces <a href="./human-factors.php#cognitive-load">cognitive load</a> and demands on working memory. Allowing more than one associated diagnosis is important because it is a common occurrence. It helps the patient understand each of the therapeutic benefits, and helps the physician be more aware when considering a dose change or stopping the medication (for instance, when the chlorthalidone was started for both high blood pressure <em>and</em> leg edema).</p>
					<p>Using therapeutic class does not achieve the desired result. The physician and patient need to know why <strong>this medication</strong> has been prescribed for <strong>this particular patient</strong>. Knowing that a drug is a beta-blocker (the therapeutic class) is not sufficient, since a beta-blocker might be used for any of these diagnoses: hypertension, angina, coronary artery disease, atrial fibrillation, supraventricular arrhythmias, tremor, migraine, and portal hypertension.</p>
					<div class="example" class="fig-5-2">
						<div class="ex-title">
							<span class="ex-type">Figure 5.2</span>
							<span class="ex-caption">Allow association of one or more diagnoses per medication</span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0002_change-priority.png" class="fancybox">
						<img src="./assets/images/examples/eRx/UM_EHR_0002_change-priority.png" class="scale-with-grid" alt="" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Stopping a medication</h5>
					<p>Make it easy to remove a medication from the medication list. Make it easy (but optional) to capture the reason for stopping a medication, whether the patient or the physician made that decision. Here are some of the common reasons for stopping: </p>
						<ul>
							<li>Cost: coverage, co-pays, or cash out-of-pocket</li>
							<li>No benefit</li>
							<li>Side effects</li>
							<li>Side effects outweighing benefit</li>
							<li>Mistrust in the prescriber</li>
							<li>Fear of side effects</li>
							<li>Misunderstanding expected benefit</li>
						</ul>
					<p>Capturing the reason for stopping feeds the medication timeline, offering a deeper understanding of the temporal changes in the patient’s medications. This kind of display can prevent time-consuming searching, paging through progress notes, or exploring historical medication list entries. </p>
					<div class="example" class="fig-5-3">
						<div class="ex-title">
							<span class="ex-type">Figure 5.3</span>
							<span class="ex-caption">Medication Timeline showing “reason for stopping” upon drilling down</span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0014_lisinopril-stopped-2.png" class="fancybox">
						<img src="./assets/images/examples/eRx/UM_EHR_0014_lisinopril-stopped-2.png" class="scale-with-grid" alt="" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Renewing medications</h5>
					<div class="scenario">
						<h5>Clinical Scenario 3: Renewing medications due before the 3 month appointment</h5>
						<p>Mr. Martin has been seeing his family physician every three to six months, but his medications often come due for annual renewal before his upcoming appointments. This causes delay in getting his refills, and he makes several trips a month to the pharmacy to pick up refills on his dozen different medications. He wishes they could be consolidated somehow so that his medication procurement could be simplified.</p>
						<p>His physician is frustrated by getting renewal requests when the patient is not in the office so that important details can be clarified (Is this dose correct? Is the medication effective?). It may require extra effort for the physician to open the patient’s chart for a quick overview of details needed to make the renewal decision. It’s particularly frustrating for the physician when renewal requests may come a week or two after the last office visit. This is introducing wasted steps that don’t add value (efficiency, safety, accuracy, and convenience). The patient may make additional calls or trips to the pharmacy, and both physician and organization incur extra steps and costs.</p>
					</div>
					<p>Allow renewal of multiple medications at a time. This saves time and reduces the chance of omission errors. By allowing the medication list to sort and filter by “renewal due date,” by “pharmacy,” and by “prescribing physician,” you reduce the physician’s cognitive load and facilitate patient-centered service. Patients who have multiple prescriptions and multiple prescribers are often burdened by poor refill synchronization. They have refills due several different dates per month, and annual renewal due dates scattered throughout the calendar year. By allowing physicians to easily discern which prescriptions will require renewal before the next planned appointment, work for the physician is reduced, patient inconvenience is reduced, and prescription consolidation can be achieved. (Choudry)</p>
					<p>Using data visualization techniques like the bar graph displaying “renewal due date” allows the visual centers to quickly scan using <a href="./human-factors.php#preattentive-attributes">preattentive attributes</a> for items that need attention without reading dates and doing mental calculations.</p>
					<div class="example" id="gal-5-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.2</span>
							<span class="ex-caption">Allow sorting and filtering to speed renewals</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0012_sort-renew.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/eRx/UM_EHR_0012_sort-renew.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Sort the medication list see when renewals are due</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0013_filter-physician.png" class="fancybox"  data-fancybox-group="gallery-2">
									<img src="./assets/images/examples/eRx/UM_EHR_0013_filter-physician.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Filter by physician to see what medications should be focused on</div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="example" class="fig-5-4">
						<div class="ex-title">
							<span class="ex-type">Figure 5.4</span>
							<span class="ex-caption">Timeline can display renewals due dynamically</span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0015_next-visit.png" class="fancybox">
						<img src="./assets/images/examples/eRx/UM_EHR_0015_next-visit.png" class="scale-with-grid" alt="" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="cpoe">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h3>CPOE (Computerized Physician Order Entry)</h3>
					<p>CPOE (also sometimes referred to as Computerized Provider Order Entry) is the electronic entry of patient care orders communicated electronically to the departments (lab, radiology, etc) or outside organizations who will fulfill the orders. Compared to paper orders, CPOE distributes orders faster, reduces hand-writing errors, and can provide error-checking for duplicate or incorrect orders.</p>
					<div class="scenario">
						<h5>Clinical Scenario 4</h5>
						<p>Mr. Martin has achieved good control of his diabetes, blood pressure, and lipids with stable doses of medications and stable results on his lab for the past year. He can now settle into a more predictable and less frequent series of office visits and lab surveillance. He’ll be needing an A1c in about 6 months and all his other lab in 1 year (A1c again, fasting lipid profile, CMP, and urine microalbumin test). Mr. Martin is interested in trying out his physician’s new e-visit service in 6 months, and then an office visit in 1 year.</p>
						<p>The A1c takes about 3 months to stabilize if the blood glucose control changes significantly, so it’s appropriate to do the next A1c in “about” 6 months, but as early as 3 months would be suitable as well. Since Mr. Martin spends 2 months in warmer climates each winter, 6 months would be bad timing for him, so he’ll get it done in 4 months.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Make pre-existing orders visible to avoid duplicate order entry</h5>
					<p>It’s common for unfulfilled orders to exist in a patient record. Sometimes the patient forgot or couldn’t find the time to get the test done. Other times, a physician may have placed the order at the last encounter (visit or reporting lab results to the patient), but seeing no recent lab results, orders the test again. Different specialists may order the same test or closely related tests (a BMP when a CMP is already ordered), unaware a colleague ordered the same test.</p>
					<p>In the new order process, make it easy to see the existing orders without abandoning the new orders mid-way.</p>
					<div class="example" id="gal-5-3">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.3</span>
							<span class="ex-caption">Show context of existing orders when making changes</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0004_new-medication-bad.png" class="fancybox"  data-fancybox-group="gallery-3">
									<img src="./assets/images/examples/eRx/UM_EHR_0004_new-medication-bad.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">This modal dialog doesn’t allow the physician to see other existing prescription orders</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="fancybox"  data-fancybox-group="gallery-3">
									<img src="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Allow existing orders to be seen. Can be done in separate panel, or making dialog non-modal</div>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Make it easy to find the right orders</h5>
					<p>Sometime tests and procedures have several commonly used names. Different organizations may use variant names for the same test. The precise names listed in an EHR order catalog might not be the name familiar to the ordering physician. Allow the physician to find the order with various commonly used synonyms. For instance, chest x-ray might be listed formally as “XR chest” in a healthcare organization while a physician might try searching for:</p>
						<ul class="disc">
							<li>chest x-ray (and don’t forget variant spellings like “xray”)</li>
							<li>chest XR</li>
							<li>XR chest</li>
							<li>X-ray chest</li>
							<li>Chest x-ray 2 views</li>
							<li>Chest x-ray PA and Lateral</li>
							<li>CXR (fastest way to hand-write the order)</li>
						</ul>

				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Preconfigure orders with as much detail as possible.</h5>
					<p>Choose the common defaults for the workflow at hand. In the ER or urgent care, the orders will commonly be “STAT”. In primary care settings, they’ll almost always be routine, for today, the near future, or at some specified future time. Allow for “fuzzy dates”. If a patient shows up at 11 months for a lab ordered for “1 year from now”, it’s counterproductive to send the patient home saying “You are too early”. Fuzzy dates accommodate that situation. </p>
					<p>Don't let orders expire too soon. Sometimes people have to postpone their plans and reschedule weeks or months later. Design for that fact.</p>
					<p>Fill in expected details</p>
					<div class="example" id="gal-5-4">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.4</span>
							<span class="ex-caption">Show context of existing orders when making changes</span>
						</div>
						<div id="cbp-fwslider-4" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0006_new-medication-unfilled.png" class="fancybox"  data-fancybox-group="gallery-4">
									<img src="./assets/images/examples/eRx/UM_EHR_0006_new-medication-unfilled.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Many details are missing. More effort needed by physician. More chance for error.</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="fancybox"  data-fancybox-group="gallery-4">
									<img src="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Key details are pre-completed. Infrequently needed details are segregated off.</div>
								</div></li>
								<li><div>
									<a href="./assets/images/examples/eRx/UM_EHR_0005_annotated.png" class="fancybox"  data-fancybox-group="gallery-4">
									<img src="./assets/images/examples/eRx/UM_EHR_0005_annotated.png" class="scale-with-grid" alt="Noisy Simple List" /></a>
									<div class="caption">Key details are pre-completed. Infrequently needed details are segregated off.</div>
								</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>Make it easy to assign the correct diagnosis for an order or prescription. </h5>
					<p>Make the problem list and diagnosis list readily available during order entry. Allow adding new orders on the fly without needing to exit the ordering tool just to add a new diagnosis.</p>
					<p>To provide clinical decision support, you can use logic to offer suggested diagnoses from problem list entries or existing lab results. Some orders are almost exclusively associated with a single diagnosis and could be assigned by default. For instance hgb a1c is almost always going to be done for diabetes or hyperglycemia.</p>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Make the EHR adapt to physician’s ordering workflow, rather than vice-versa</h5>
					<p>Let physicians add to the 'shopping cart', then continue 'shopping' without checking out right away. This allows the physician and patient to make preliminary decisions, acting on them immediately, but allowing flexibility for later adjustment as the visit unfolds. Make existing orders readily visible when adding new orders. That allows avoiding duplicate order entry (“I already ordered a lipid profile for the next appointment”) or consolidating orders for a single later date (“We can just do all these orders in 6 months instead of doing some in 3 months and some in 6 months.”)</p>
					<div class="example" class="fig-5-5">
						<div class="ex-title">
							<span class="ex-type">Figure 5.5</span>
							<span class="ex-caption">Allow tentative orders to be collected for revision and approval later in visit</span>
						</div>
						<a href="./assets/images/examples/eRx/neworders.png" class="fancybox">
						<img src="./assets/images/examples/eRx/neworders.png" class="scale-with-grid" alt="" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>Building groups of related orders works like a checklist</h5>
					<p>Some clinical circumstances offer the opportunity to build sets or collections of orders to facilitate the physician’s workflow. For instance, well child visits are very predictable for their expected immunizations at a certain age, specific counseling (anticipatory guidance) to be done, and a predictable next visit interval. </p>
					<p>For a 4-month old, the orders would include: </p>
					<ul class="disc">
						<li>next visit at age 6 months (and at least 2 months from today’s visit)</li>
						<li>Hemophilus B conjugate (PRP-T) vaccine</li>
						<li>Rotavirus vaccine</li>
						<li>Pneumococcal 13-valent vaccine</li>
						<li>Diphtheria / hepatitis B / pertussis - acellular / polio / tetanus - combination vaccine</li>
					</ul>
					<p>Because combination vaccines have different recommended dosing patterns, it’s helpful to include the brand names stocked and used by the healthcare organization.</p>
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
						<li>Make it easy to pick the correct new order. Offer predictive search that suggests the appropriate result, and allow the use of favorites that are configured to include the necessary details. </li>
						<li>Fill-in the blanks where possible, using the most commonly expected details or prescriptions, such as 30 days or 90 day supplies.</li>
						<li>Use pre-attentive attributes such as color and typographic emphasis to enable the position to find the most appropriate results quickly. Formulary information and maximum dose information can be conveyed that way.</li>
						<li>Allow recovery from error by letting the physician review the Electronic prescription before sending.</li>
						<li>Allow simple order modifications without having to start over from scratch. </li>
						<li>Allow sorting and filtering the medication list to speed the renewal process.</li>
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
							<p class="pagination prev_ch"><a href="./allergy-list.php">Go back to Allergy List</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./drug-alerts.php">Continue to Drug Alerts</a></p></div>
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