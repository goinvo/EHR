<?php $pageTitle='E-Prescribing'; ?>
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
<body class="e-prescribing">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-2" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>5</h2>
					<h2>E-Prescribing and Computerized Physician Order Entry (CPOE)</h2>
					<!--<div class="subheader"><p>Successful medication management is a key part of a patient’s health</p></div>-->
				</div>
			</div>
		</header>

		<section id="e-prescribing">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>E-prescribing (eRx) can be one of the most satisfying aspects of a physician’s EHR life, because it saves the duplication of effort involved in hand-writing prescriptions, updating the list of medications, and including the changes in the office notes. E-prescribing offers the opportunity to reduce the medication errors that can result from pharmacists misreading prescriptions, dispensing an incorrect dose, or even prescribing the wrong drug because its name was similar to the name of the drug the physician actually intended.</p>
					<p>The back-end process of e-prescribing sends discrete electronic data to a central hub, which then distributes the prescription message to the target pharmacy electronically (or via fax, if the target pharmacy lacks e-prescribing capabilities). The pharmacy can also send messages for renewal request to the prescribing physician. A new feature, not yet widely adopted, allows prescribers to send a message electronically to a pharmacy to cancel a previously prescribed medication or prescription.</p>
					<div class="scenario">
						<h5>Clinical scenario 1: New prescription for newly diagnosed diabetes</h5>
						<p>Mr. Martin is a 53-year-old construction supervisor. Three months ago, he was diagnosed with diabetes by Dr. Barnes, his family physician. Despite some healthy lifestyle changes, his weight is unchanged. His fingerstick blood sugars are improving, but are still too high at around 200. His goal is 80-140.</p>
						<p>Dr. Barnes wants Mr. Martin to take a new medication named metformin to control his blood sugar. Together they look at the EHR screen and see that metformin is on Mr. Martin’s insurance formulary, and has the lowest-tier copay. Both of them are pleased. Mr. Martin wants to start with just a 30 day prescription from his local pharmacy in case he has any side-effects. The new prescription is sent electronically to the local pharmacy.</p>
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
					<h5>5.1 Searching for a New Medication</h5>
					<p>Typically, physicians will have a particular medication in mind when they write prescriptions. In that case, choosing from a “favorites” list or searching for the drug are the quickest routes to new prescription. An EHR should help physicians make the right choices and enter the correct details. In most cases, having the EHR pre-populate the prescription forms will save physicians time and mental effort (<a href="./human-factors.php#cognitive-load" target="blank" class="link">cognitive load</a>), and will reduce the risk of errors. It will help the physicians’ search speed and accuracy if the EHR pre-populates the search results from the drug database as the physician types. A predictive algorithm that used data from the Problem List or Diagnosis List should be able to promote likely matches farther up the search result list.</p>
					
					<div class="example" id="gal-5-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.1</span>
							<span class="ex-caption">Making Prescription Search Results Robust</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">5.1 a </span>Typing Causes the List to Pre-Populate <span class="capt-desc">&mdash; User favorites should jump to the top of the list</span></div>
									<a href="./assets/images/examples/eRx/search_results_1.png" class="fancybox"  data-fancybox-group="gallery-1" title="Typing Causes the List to Pre-Populate - User favorites should jump to the top of the list">
									<img src="./assets/images/examples/eRx/search_results_1.png" class="scale-with-grid" alt="Typing Causes the List to Pre-Populate - User favorites should jump to the top of the list" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">5.1 b </span>Typing More Characters Produces a Closer Match <span class="capt-desc">&mdash; Additional details (tablet strength “500”) may be added to the search string</span></div>
									<a href="./assets/images/examples/eRx/search_results_2.png" class="fancybox"  data-fancybox-group="gallery-1" title="Typing More Characters Produces a Closer Match - Additional details (tablet strength “500”) may be added to the search string">
									<img src="./assets/images/examples/eRx/search_results_2.png" class="scale-with-grid" alt="Typing More Characters Produces a Closer Match - Additional details (tablet strength “500”) may be added to the search string" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">5.1 c </span>Allow Users to Type a Portion of the Drug Name, and Then Skip to Additional Details <span class="capt-desc">&mdash; Here the physician added the dosing frequency “bid.”</span></div>
									<a href="./assets/images/examples/eRx/search_results_3.png" class="fancybox"  data-fancybox-group="gallery-1" title="Allow Users to Type a Portion of the Drug Name, and Then Skip to Additional Details - Here the physician added the dosing frequency “bid.”">
									<img src="./assets/images/examples/eRx/search_results_3.png" class="scale-with-grid" alt="Allow Users to Type a Portion of the Drug Name, and Then Skip to Additional Details - Here the physician added the dosing frequency “bid.”" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">5.1 d </span>Adding the Number of Tablets Makes the Top Choice Exactly What the Doctor Ordered</div>
									<a href="./assets/images/examples/eRx/search_results_4.png" class="fancybox"  data-fancybox-group="gallery-1" title="Adding the Number of Tablets Makes the Top Choice Exactly What the Doctor Ordered">
									<img src="./assets/images/examples/eRx/search_results_4.png" class="scale-with-grid" alt="Adding the Number of Tablets Makes the Top Choice Exactly What the Doctor Ordered" /></a>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="credit"><p>From Cerner PowerChart. © 2014 Cerner Corporation. Reproduced by permission of Cerner Corporation.</p></div>
				</div>
			</div>
		</section>

		<section id="prescribing-new-medication">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>5.2 Prescribing a New Medication</h5>
					<p>Once a physician finds the medication she's looking for, she needs to manage additional details like adding or reviewing the dosage strength, instructions, quantity to dispense, and number of refills to authorize. A thoughtful design will pre-populate fields associated with the medication with, say, the instructions for the usual starting dose. The EHR systems could recommend a physician’s frequently-used choices or favorites. For a returning patient, it could recommend their chosen pharmacy.</p>
					<p>In the United States, health insurance plans often include drug formularies, which are a list of prescription drugs that will be covered by the insurance plan. Within the formulary, the drugs are grouped into a tier assignment that determines the patient’s portion of the drug cost. A typical plan includes 3 or 4 tiers:
						<ul class="disc">
							<li>Tier 1 usually includes generic medications (the least expensive)</li>
							<li>Tier 2 usually includes “preferred” brand name medications</li>
							<li>Tier 3 usually includes “non-preferred” brand name medications</li>
							<li>Tier 4 usually includes specialty medications (the most expensive)</li>
						</ul>
					</p>
					<p>If the system knows the patient’s pharmacy benefit plan, it should display the associated formulary information, indicating the tier information at a glance. Also, the system should allow the prescriber to view more detail on demand.</p>
					<p>An EHR that provides these details reduces the mental effort a physician needs to expend to accomplish this task, and thus reduces their cognitive load. This EHR can also enhance patients' safety by eliminating physicians' distractions and reducing the margin for error.</p>
					<div class="quicktip" id="considerations">
						<div class="sidebar cf">
							<h5></h5>
							<p class="preview">Some of the details of the prescription will depend on a patient’s preferences<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Some of the details of the prescription will depend on a patient’s preferences:</p>
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
											<td>Patients will choose larger or smaller supplies of drugs depending on what a drug costs ,how convenient it is to refill their prescription, or whether they’re new to the drug and want to try out first to determine their tolerance for it and its effectiveness.</td>
											<td>Insurance companies typically offer 30 or 90 day supplies of medications. The EHR should calculate the amount of medication to order based on the medication's dosage requirements and the number of days' supply a physician orders. This mathematical decision support is particularly helpful for performing more complicated calculations including:  weight-based pediatric dosing, calculating the amount to be dispensed for liquids, and the amount to be dispensed for inhalers (a single inhaler often, but not necessarily, comes with a 30 day supply).</td>
										</tr>
										<tr>
											<td><strong>Which pharmacy does the patient wish to use?</strong></td>
											<td>Patients may have one or several preferred pharmacies. Some people use a combination of suppliers to meet their needs: a mail-order pharmacy that offers them a good deal on a certain drug, a favorite local pharmacy, and another local pharmacy with some logistical advantage (one closer to work, home or the doctor’s office, or one with more convenient hours).</td>
											<td>The EHR should allow at least 3 patient-preferred pharmacies. Allow the physician to remove a pharmacy that the patient no longer prefers, because insurance plans (in the U.S.) change almost annually, and the patients' preferred pharmacies may need to change with them.</td>
										</tr>
										<tr>
											<td><strong>Are there dose limitations to consider?</strong></td>
											<td>Patients may be taking other drugs that contain the new drug being prescribed. This is particularly common with pain relievers. People may be taking Tylenol (acetaminophen) alone, in combination with cough and cold remedies, or in prescription combination analgesics like Vicodin or Percocet.</td>
											<td>Consider providing dose-limit calculations to help physicians avoid overdosing their patients. Add warnings to the patient that advise, for example, patients not to exceed the acetaminophen maximum total daily dose (4 grams/day). If the EHR flags this issue, then the physician can also call the patient’s attention to it.</td>
										</tr>
										<tr>
											<td><strong>Are there formulary limitations to consider?</strong></td>
											<td>Patient’s out-of-pocket prescription drug costs are rising at an alarming rate in the U.S. Formulary information can help physicians give patients some advance warning about what to expect at the pharmacy cash-register. That information empowers the patients and physicians, where possible, find affordable alternatives for expensive medications before the office visit ends. If a patient first discovers the high cost of a given medication at the pharmacy, this can cause them to delay filling a prescription, and cause extra effort for the patient, pharmacy and physician down the line.</td>
											<td>At a minimum, show whether the drug is on-formulary. Show the tier, the amount of the copay (if available), and whether there are prescription quantity limits (it is common for proton-pump inhibitors like Prilosec or Nexium to have a limit of 30 tablets a month; not 60). Show if prior authorization will be required before allowing the pharmacy to dispense, and when possible include the criteria for prior authorization approval, including the contact number for obtaining prior authorization. </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tip"></div>
					</div><!--end considerations sidebar-->

					<h5>5.2.1 Review the New Prescription Order before Sending It Out</h5>
					<p>The physician will need to review the final configuration of the new prescriptions. The EHR can flag missing elements. The physician may still need to make last minute modifications after verbally reviewing the prescriptions with the patient.</p>
					<p>Instructions for tapering doses need to be clearly worded and should be available as preconfigured text. Here is an example of instructions for tapering doses of prednisone 10 mg tablets for poison ivy/oak/sumac: “4 tablets once daily for 3 days, then 3 tablets once daily for 3 days, then 2 tablets daily for 3 days, then 1 tablet daily for 3 days, then stop”. If there are transition instructions (stopping another medication a few days before or after starting the new one), the physician should add these.</p>
					<p>The EHR can display drug alerts passively before the physician gives the final order  Interruptive alerts should display just before the physician sends the final order.</p>
				</div>
			</div>
		</section>

		<section id="changing-dose">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h5>5.3 Changing the dose</h5>
					<p>Most medications have a range of possible doses, so modifying a dose is a very common prescriber activity. It can be as simple as switching from the current dose to a new dose, or as complicated as titrating upward using different tablet sizes over an extended period of time. Sometimes the change will involve splitting tablets (if it’s safe to do), using multiple tablets of the prior dose, or spreading the dose out through the day (2 in the morning, 1 at lunch, 2 at bedtime) to achieve a more even therapeutic effect or to reduce an adverse effect.  It should be simple for the physician to convert from one prescription strength to another using the EHR. The system should preserve the order details, such as quantity, number of refills, pharmacy, and associated diagnoses.</p>
					<div class="scenario">
						<h5>Clinical Scenario &mdash; Increasing the Dose</h5>
						<p>A few years later, Mr. Martin’s diabetes is well controlled, but he has developed high blood pressure (BP). Three months ago, he started on lisinopril 10 mg daily for his high blood pressure (it also protects the kidneys in people with diabetes). Today his BP at 153/96, which is still just a little high (the readings of his BP he's taken at home are likewise high). Mr. Martin is tolerating the medication well, so his physician wants to increase the dose to 20 mg daily. Mr. Martin has just received a 90 day supply in the mail last week, so he asks if he may use up his current supply of 10 mg tablets by taking 2 tablets daily for a while.</p>
						<p>Mr. Martin is afraid that he’ll get a new bottle of 20 mg pills six weeks before he really needs them. He asks his doctor how he can avoid that. Can he take a printed prescription to submit later? Can the EHR send a message to the pharmacist instructing her not to fill the prescription until the patient makes contact to request that it be filled? Can Mr. Martin just call later for the new prescription? (Note: His physician’s office prefers to avoid the later calls, because it would be inefficient use of office staff and physician time.)</p>
					</div>
					<h5>5.3.1 Changing the Current Order to a New Order</h5>
					<p>Discarding an old prescription and starting over can require a lot of time and mental effort, and can introduce the risk of error. Often, the physician only needs to change the strength of the tablet. An EHR that allows users to pick from a list of the strengths for a medication can save time. A physician may also need to adjust the number of tablets they've prescribed. Occasionally, the patient may choose to use a different pharmacy, or may request a two to four week prescription that they can fill locally while awaiting a mail-order 90 day supply.</p>
					<div class="example" class="fig-5-1">
						<div class="ex-title">
							<span class="ex-type">Figure 5.1</span>
							<span class="ex-caption">Allow Physicians to Modify the Display Quickly by Offering the Most Common Detail Choices for a Particular Medication <span class="capt-desc">&mdash; These include  strength, instructions, quantity, and number of refills.</span></span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0001_med-list-expand.png" class="fancybox" title="Allow Physicians to Modify the Display Quickly by Offering the Most Common Detail Choices for a Particular Medication - These include  strength, instructions, quantity, and number of refills.">
						<img src="./assets/images/examples/eRx/UM_EHR_0001_med-list-expand.png" class="scale-with-grid" alt="Allow Physicians to Modify the Display Quickly by Offering the Most Common Detail Choices for a Particular Medication - These include  strength, instructions, quantity, and number of refills." /></a>
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
					<h5>5.3.2 Allow Association of a Diagnosis or Chronic Problem</h5>
					<p>Users often want to filter and sort medication list displays by diagnosis. Some medications are prescribed to alleviate multiple problems, and an EHR thus needs to be able to associate medications with multiple diagnoses.  The 'multiple diagnosis' function also helps patients understand multi-purpose medications' role in their care. It also informs a variety of caregivers of all the reasons someone prescribed this medication. If a subsequent physician is considering changing a medication's dose or stopping it entirely, they'll need to know this information.</p>
					<div class="quicktip" id="">
						<div class="sidebar cf">
							<h5>Why Automatically Assigning a Therapeutic Class Won’t Work</h5>
							<p class="preview">Some EHR vendors may tempted to use a drug’s therapeutic class instead of relying on physician-assigned diagnoses.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Some EHR vendors may tempted to use a drug’s therapeutic class instead of relying on physician-assigned diagnoses. They may be concerned that physicians won’t be willing to assign diagnoses to medications, which may be true if there is no return on the time investment for the physician. However, if the physicians receive a benefit (better sorting and filtering of medication lists, better clinical decision support fueled by that data, and better patient awareness of the reason for the medication) then physicians have an incentive to make the diagnosis assignment.</p>
								<p>Using a therapeutic class (instead of the actual diagnosis selected for the individual patient) does not achieve the desired result. The physician and patient need to know why <strong>this medication</strong> has been prescribed for <strong>this particular patient</strong>. Knowing that a drug is a beta-blocker (the therapeutic class) is not sufficient, because a beta-blocker might be used for any of these diagnoses: hypertension, angina, coronary artery disease, atrial fibrillation, supraventricular arrhythmias, tremor, migraine, and portal hypertension. The therapeutic class will often be meaningless to the patient.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
					<div class="example" class="fig-5-2">
						<div class="ex-title">
							<span class="ex-type">Figure 5.2</span>
							<span class="ex-caption">Allow Association of One or More Diagnoses per Medication</span>
						</div>
						<a href="./assets/images/examples/eRx/UM_EHR_0002_change-priority.png" class="fancybox" title="Allow Association of One or More Diagnoses per Medication">
						<img src="./assets/images/examples/eRx/UM_EHR_0002_change-priority.png" class="scale-with-grid" alt="Allow Association of One or More Diagnoses per Medication" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="stopping-medication">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>5.4 Stopping a Medication</h5>
					<p>Removing a medication from the list should be easy. It should also be easy (though optional) for a user to record why a physician or patient stopped a medication. Common reasons for stopping a medication include:
						<ol>
							<li>The medication's high cost, which can take the form of coverage, co-pays, or cash out-of-pocket</li>
							<li>The medication's inefficacy</li>
							<li>The medication's side-effects</li>
							<li>The medication's side effects outweighing its benefits</li>
							<li>Patients don't understand the medication's possible benefits</li>
							<li>Patients or physicians don't trust whoever prescribed the medication</li>

						</ol></p>
					<p>Medication timelines are richer and more informative when they capture why medications were stopped. Timelines that give users insight into patients' history with given medications can eliminate the need for time-consuming searching, paging through progress notes, or laboriously exploring historical medication list entries.</p>
					<div class="example" class="fig-5-3">
						<div class="ex-title">
							<span class="ex-type">Figure 5.3</span>
							<span class="ex-caption">Medication Timeline Shows Details Like “Reason for Stopping” When User Selects a Timeline Bar</span>
						</div>
						<a href="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" class="fancybox" title="Medication Timeline Shows Details Like “Reason for Stopping” When User Selects a Timeline Bar">
						<img src="./assets/images/examples/medication-list/UM_EHR_0013_tap1.png" class="scale-with-grid" alt="Medication Timeline Shows Details Like “Reason for Stopping” When User Selects a Timeline Bar" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="renewing-medications">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<h5>5.5 Renewing Medications</h5>
					<div class="scenario">
						<h5>Clinical Scenario &mdash; Renewing Medications Due before the Next Appointment</h5>
						<p>Mr. Martin has been seeing his family physician every three to six months, but his medications often come due for annual renewal before his upcoming appointments. Because of this disparity, Mr. Martin sometimes doesn't get his refills in time, and has to go without some of his medications for a several days. Mr. Martin's refills also come in at different times throughout the month, and so he has to make several trips to the pharmacy to pick up his various prescriptions. Mr. Martin wishes his 'medication procurement' schedule could be simplified and consolidated, so that he only had to make one trip.</p>
						<p>Mr. Martin's physician also finds the situation frustrating. If the patient came in before the renewals came due, the physician could determine whether the medication was effective, and whether the dose was right before signing off on the next round of pills. The physician feels the out-of-sync schedule they've established is a time-wasting hassle, inefficient, unsafe, inaccurate, inconvenient and pointless.</p>
					</div>
					<p>An EHR should allow a physician to renew multiple medications at the same time. This saves time and reduces the margin for error. Designing an EHR that can sort and filter the medication list by “renewal due date”, “pharmacy” and “prescribing physician” will minimize physicians' cognitive load and allow them to provide better patient-centered service.</p>
					<p>Patients with multiple prescriptions and prescribers are often burdened with poor refill synchronization. Their refills come in on several different dates each month, and their annual renewal due dates scattered throughout the calendar year. If physicians could easily discern which prescriptions require renewal before the next planned appointment, the physicians could consolidate their patients' prescriptions. This would reduce the physicians' workload and would be more convenient for the patients<sup>1</sup>.</p>
					<p>Designers should allow users to easily modify existing prescriptions, preserving existing details and offering easy access to common alternative details where users might need to make changes (changing from 10 mg to 20 mg, from 1 tablet to 2 tablets, or from 30 days to 90 days, etc.).</p>
					<div class="example" id="gal-5-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 5.2</span>
							<span class="ex-caption">Allow Sorting and Filtering to Efficiently Facilitate Renewals</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">5.2 a</span> Sorting the List by Renewal Due Date <span class="capt-desc">&mdash; Makes it easier to group and manage the medications due for renewal</span></div>
									<a href="./assets/images/examples/eRx/UM_EHR_0012_sort-renew.png" class="fancybox"  data-fancybox-group="gallery-2" title="Sort the List by Renewal Due Date - Makes it easier to group and manage the medications due for renewal">
									<img src="./assets/images/examples/eRx/UM_EHR_0012_sort-renew.png" class="scale-with-grid" alt="Sort the List by Renewal Due Date - Makes it easier to group and manage the medications due for renewal" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">5.2 a</span>Filtering the List by Prescriber <span class="capt-desc">&mdash; Makes it even easier to focus only on the selected medications, eliminating distracting items</span></div>
									<a href="./assets/images/examples/eRx/UM_EHR_0013_filter-physician.png" class="fancybox"  data-fancybox-group="gallery-2" title="Filtering the List by Prescriber - Makes it even easier to focus only on the selected medications, eliminating distracting items">
									<img src="./assets/images/examples/eRx/UM_EHR_0013_filter-physician.png" class="scale-with-grid" alt="Filtering the List by Prescriber - Makes it even easier to focus only on the selected medications, eliminating distracting items" /></a>
								</div></li>
							</ul>
						</div>
					</div>
					<p>A bar graph data visualization (<a href="#fig-5-4">Figure 5.4</a> below) displaying “renewal due dates” reduces users' cognitive load.. It allows physicians to note which items need to be managed during the current visit by doing a quick visual scan.  The physicians recognize what medications they need to focus on by picking out preattentive attributes, such as color and line length, rather than by having to do complex mental calculations involving reading dates, quantities, and number of refills.</p>
					<div class="example" class="fig-5-4">
						<div class="ex-title">
							<span class="ex-type">Figure 5.4</span>
							<span class="ex-caption">Icons for “Refills Remaining” <span class="capt-desc">&mdash; Icons use preattentive attributes to reduce cognitive load during the medication renewal process</span></span>
						</div>
						<a href="./assets/images/examples/eRx/RenewalDue_Icons_PCTouchCerner.png" class="fancybox" title="Icons for “Refills Remaining” - Icons use preattentive attributes to reduce cognitive load during the medication renewal process">
						<img src="./assets/images/examples/eRx/RenewalDue_Icons_PCTouchCerner.png" class="scale-with-grid" alt="Icons for “Refills Remaining” - Icons use preattentive attributes to reduce cognitive load during the medication renewal process" /></a>
						<div class="credit"><p>From Cerner PowerChart Touch. © 2014 Cerner Corporation. Reproduced by permission of Cerner Corporation.</p></div>
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
					<h3>5.6 Computerized Physician Order Entry (CPOE)</h3>
					<p>A CPOE (also sometimes referred to as <em>Computerized <strong>Provider</strong> Order Entry</em>) is an electronic entry of patient care orders that electronically transmits itself to the departments (lab, radiology, etc.) or outside organizations that will fulfill it. CPOE orders can be distributed more quickly than their predecessors. They eliminate errors based on hand-writing, and can prevent duplicate orders by checking new orders against existing orders.</p>
					<div class="scenario">
						<h5>Clinical Scenario &mdash; Placing Future Lab Orders</h5>
						<p>Mr. Martin has achieved good control of his diabetes, blood pressure, and lipids. For the past year, he's been on stable doses of his medications, and his lab results have been stable as well.  He can now settle into a more predictable routine, and won't need to visit the office or undergo lab tests as frequently. In about six months, Mr. Martin will need to come in for a hemoglobin A1c lab test, and then a visit. Another six months after that, he'll need to come in for further tests (another hemoglobin A1c a fasting lipid profile and a urine microalbumin test, both for his diabetes), and then another office visit.</p>
					</div>

					<h5>5.6.1 Display Pre-Existing Orders to Prevent Duplication</h5>
					<p>A patient's EHR often contains unfulfilled orders. Patients forget tests, or can't find the time to get them done. If physicians can't see patients' existing future orders or recent lab results, they may accidentally order tests that have already been done or ordered, or very similar tests. This would duplicate their colleagues' work and spend resources wastefully.</p>
					<p>When users place new orders, they should simultaneously be able to see the work that's already been done, without navigating away from their own unfinished orders and losing their work.</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-5-5">
						<div class="ex-title">
							<span class="ex-type">Figure 5.5</span>
							<span class="ex-caption">Before: <span class="capt-desc">This interruptive dialog box doesn’t allow the physician to see existing prescription orders</span></span>
						</div>					
						<a href="./assets/images/examples/eRx/UM_EHR_0004_new-medication-bad.png" class="fancybox" title="Before: This interruptive dialog box doesn’t allow the physician to see existing prescription orders">
							<img src="./assets/images/examples/eRx/UM_EHR_0004_new-medication-bad.png" class="scale-with-grid" alt="Before: This interruptive dialog box doesn’t allow the physician to see existing prescription orders" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-5-6">
						<div class="ex-title">
							<span class="ex-type">Figure 5.6</span>
							<span class="ex-caption">After: Allow Users to See Existing Orders <span class="capt-desc">&mdash; This can be done in a separate panel, or by making the dialog box non-interruptive.</span></span>
						</div>
							<a href="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="fancybox"  data-fancybox-group="gallery-3" title="After: Allow Users to See Existing Orders - This can be done in a separate panel, or by making the dialog box non-interruptive.">
							<img src="./assets/images/examples/eRx/UM_EHR_0003_new-medication.png" class="scale-with-grid" alt="After: Allow Users to See Existing Orders - This can be done in a separate panel, or by making the dialog box non-interruptive." /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<h5>5.6.2 Make It Easy to Find the Right Orders</h5>
					<p>Naming orders can be a challenge, because tests and procedures can have several commonly-used names. Different organizations may use different names for the same test. The physician ordering procedures might not be familiar with precise names listed in the EHR order catalog. The EHR might formally call a chest x-ray "XR chest". A physician, however, might look for it under:
						<ul class="disc">
							<li>chest x-ray (or variant spellings like “xray”)</li>
							<li>chest XR</li>
							<li>XR chest</li>
							<li>X-ray chest</li>
							<li>Chest x-ray 2 views</li>
							<li>Chest x-ray PA and Lateral</li>
							<li>CXR (fastest way to hand-write the order)</li>
						</ul></p>
					<p>These are all correct ways to name a chest x-ray. Thus, the interface should thus allow physicians to find tests and procedures listed under their various commonly-used designations.</p>

					<h5>5.6.3 Preconfigure Orders with as Much Detail as Possible</h5>
					<p>Tests physicians order in ER or urgent care scenarios are often high priority and need done STAT. Routine tests physicians order in primary care settings will almost always be lower-priority. They'll need completed today, in the near future, or at some specified future time.  An EHR that could be easily configured to the care setting it was being used in, one that established default "priority" settings for the orders it processed, would be a powerful support tool.</p>
					<div class="quicktip" id="">
						<div class="sidebar cf">
							<h5>Setting the Date for Orders: Using Fuzzy Dates</h5>
							<p class="preview">Sometimes orders demand a precise date and time.<span class="elipsis">.. &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Sometimes orders demand a precise date and time. Repeating a Prothrombin Time (PT) lab test in exactly 3 days helps assure safe dosing of warfarin, a clot-preventer.</p>
								<p>Other times, less precise dates would be more helpful. If a physician orders a lab for "one year from now," but the patient shows up eleven months later, telling the patient she's too early and sending her home would be counterproductive. The EHR needs to allow its users to set somewhat flexible "fuzzy dates." This will allow healthcare organizations to be adaptable, and to work with patients to find times and dates convenient for them. </p>
							</div>
						</div>
						<div class="tip"></div>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-5-7">
						<div class="ex-title">
							<span class="ex-type">Figure 5.7</span>
							<span class="ex-caption">Before: <span class="capt-desc">The physician needs to expend a lot of effort to fill in the many missing details. There are many opportunities for error.</span></span>
						</div>
							<a href="./assets/images/examples/eRx/UM_EHR_0006_new-medication-unfilled.png" class="fancybox"  data-fancybox-group="gallery-4" title="Before: The physician needs to expend a lot of effort to fill in the many missing details. There are many opportunities for error.">
							<img src="./assets/images/examples/eRx/UM_EHR_0006_new-medication-unfilled.png" class="scale-with-grid" alt="Before: The physician needs to expend a lot of effort to fill in the many missing details. There are many opportunities for error." /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-5-8">
						<div class="ex-title">
							<span class="ex-type">Figure 5.8</span>
							<span class="ex-caption">After: <span class="capt-desc"> The EHR pre-completes key fields. Less frequently needed details are displayed less prominently.</span></span>
						</div>
							<a href="./assets/images/examples/eRx/UM_EHR_0005_annotated.png" class="fancybox"  data-fancybox-group="gallery-4" title="After: The EHR pre-completes key fields. Less frequently needed details are displayed less prominently.">
							<img src="./assets/images/examples/eRx/UM_EHR_0005_annotated.png" class="scale-with-grid" alt="After: The EHR pre-completes key fields. Less frequently needed details are displayed less prominently." /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<h5>5.6.4 Assign the Correct Diagnosis for an Order or Prescription</h5>
					<p>The EHR should make the problem and diagnosis lists readily available to physicians entering orders. It should also allow users to add new diagnoses on the fly, without having to exit the ordering tool to add them.</p>
					<p>The EHR can provide clinical decision support by suggesting probable diagnoses based on patients' list entries and lab results.Some orders are almost exclusively associated with a single diagnosis, and in these cases the system could assign this diagnosis to these orders by default. For instance an order for a A hemoglobin A1c lab test will almost always be associated with a diagnosis of diabetes or hyperglycemia.</p>
					
					<h5>5.6.5 EHRs Should Adapt to Users, Not Users to EHRs</h5>
					<p>An adaptable EHR should let physicians “add to the shopping cart” (<a href="#fig-5-9">Figure 5.9</a>), then “continue shopping” without checking out right away. This allows the physicians and patients to make preliminary decisions, and act on them immediately, but also allows them to make adjustments as the visit unfolds.</p>
					<div class="example" id="fig-5-9">
						<div class="ex-title">
							<span class="ex-type">Figure 5.9</span>
							<span class="ex-caption"><span class="capt-desc">EHRs must offer users the option of building sets or collections of orders to facilitate their workflow.</span></span>
						</div>						
						<a href="./assets/images/examples/eRx/neworders.png" class="fancybox"  data-fancybox-group="gallery-4" title="EHRs must offer users the option of building sets or collections of orders to facilitate their workflow.">
							<img src="./assets/images/examples/eRx/neworders.png" class="scale-with-grid" alt="EHRs must offer users the option of building sets or collections of orders to facilitate their workflow." /></a>
					</div>

					<h5>5.6.6 Building Groups of Related Orders Function like Checklists</h5>
					<p>EHRs must offer users the option of building sets or collections of orders to facilitate their workflow. This offers users personalized clinical decision support and frees them from having to depend on their memories or external reference materials to complete involved tasks. Well Child Visits, for example, follow predictable patterns. They involve immunizations at regular, predetermined intervals, specific counseling (anticipatory guidance), and set follow-up visits. </p>
					<p>A four-month-old's Well Child Visit would include:
						<ul>
							<li>scheduling the next visit, at six months</li>
							<li>administering several specific vaccines<ul>
								<li>hemophilus B</li>
								<li>rotavirus</li>
								<li>pneumococcal 13-valent</li>
								<li>combination of diphtheria / hepatitis B / pertussis - acellular / polio / tetanus.</li>
							</ul></li>
						</ul></p>
				</div>
			</div>
		</section>

		<section id="summary">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<h3>5.7 Summary</h3>
					<p>EHRs should:
						<ol>
							<li>Make it easy for users to select new orders by offering a predictive search function that suggests appropriate results.</li>
							<li>Fill in the blanks with probable default settings (such as 30 or 90 day prescription supplies) where possible. </li>
							<li>Remember patients’ pharmacy preferences, and allow users to remove pharmacies patients no longer prefer from the list.</li>
							<li>Use pre-attentive attributes, such as color and typographic emphasis to enable physicians to find the results that are more likely to be relevant quickly. Use color iconography to graphically display medication renewal due-dates.</li>
							<li>Let physicians review e-prescriptions before sending so that they can correct any errors.</li>
							<li>Allow users to sort and filter medication lists to speed up the renewal process.</li>
							<li>Allow users to modify existing orders without forcing them to start over from scratch.</li>
							<li>Allow users to personalize the interface and build detail-rich collections of related orders that function like checklists.</li>
							<li>Allow users to select specific or flexible dates for new lab orders.</li>
						</ol></p>
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
							<p class="pagination prev_ch"><a href="./allergy-list.php"><span class="prev"></span>Allergy List</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./drug-alerts.php">Drug Alerts<span class="next"></span></a></p></div>
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
					<div class="resources">
					<p>Additional Resources</p>
					<div class="section_cite">
						<p><em>From the National Center for Cognitive Informatics &amp; Decision Making in Healthcare</em></p>
						<h5>EHR Safety Enhanced Design Briefs</h5>
						<p><a target="blank" class="link" href="https://sbmi.uth.edu/nccd/SED/Briefs/sedb-mu05.htm">Preventing Electronic Medication Order Errors (E-Prescribing)</a></p>
					</div>
					<hr />
					<p>References</p>
					<div class="section_cite">
						<ol>
							<li>Choudhry NK, Fischer MA, Avorn J, et al. The Implications of Therapeutic Complexity on Adherence to Cardiovascular Medications. Arch Intern Med.2011;171(9):814-822. doi:10.1001/archinternmed.2010.495.</li>
							<li>Barbara Stanton user profile photo in interfaces by <a href="https://www.flickr.com/photos/amslerpix/" target="blank">David Amsler</a></li>
						</ol>
					</div>
				</div>
			</div>
		</section>
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