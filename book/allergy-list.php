<?php $pageTitle='Allergy List'; ?>
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

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css" />


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="allergy-list">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-4" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>4</h2>
					<h2>Allergy List</h2>
				</div>
			</div>
		</header>
		<section id="allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Medication Allergy Lists (or simply Allergy Lists) currently include a patient’s  known medication allergies, but they could include more. </p>
					<p>Historically, physicians, nurses, patients, and pharmacists have included patients’ true drug allergies, other adverse drug reactions (also known as side-effects or adverse effects) such as nausea or sedation, and allergic reactions. In this chapter, we will focus on true drug allergies and adverse drug reactions. Physicians often include patients’ allergies to substances other than medications (latex, adhesive tape, peanuts and other foods) in Allergy Lists. </p>
					
					<div class="quicktip" id="other_allergies">
						<div class="sidebar cf">
							<h5>Other Kinds of Allergies</h5>
							<p class="preview">Inhalant allergies (hay fever, allergies to dust and mold, and asthma) are usually not included in the Allergy List, but rather<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Inhalant allergies (hay fever, allergies to dust and mold, and asthma) are usually not included in the Allergy List, but rather in the Problem List. Very few food allergies could have an effect on prescriptions (a few injectable medications use peanut oil, glucosamine tablets may be derived from shellfish, and patients with egg or soy allergies should not be prescribed propofol).</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>

					<p>In one way, the Allergy List is the safety net that supports the Medication List.  Physicians check the medication list against this list of allergies in order to ensure patient safety. Allergic reactions can range from minor to fatal, so the Allergy List needs to be kept current to prevent these events. Good design can make correcting errors in the Allergy List easy.</p>
				</div>
			</div>
		</section><!--end Allergy List intro-->
		
		<section id="three-tasks" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>4.1 Three Main Tasks</h3>
					</div>
					<p>Developers must design Allergy Lists with an eye to users’ three main tasks: glance at the list, explore the details, and change the list.</p>
					<h5>4.1.1 Glancing at the list</h5>
						<p>Often, ideally every time they prescribe or administer a new medication, doctors and nurses will need to quickly refer to the Allergy List. Glancing at the list may reveal that a patient has “no known medication allergies” – or that he’s deathly allergic to the medication the physician is about to order for him. For this task, physicians need to be able to glance at a short list that only contains the names of the drugs a patient is allergic to. This list should be clearly visible when prescribing or administering, but is not needed with other tasks such as documentation. It could be included in the patient demographic banner, where it would always be visible.</p>
					<h5>4.1.2 Exploring the details</h5>
						<p>Sometimes, a clinician needs to know all the details of a purported medication allergy in order to make a clinical decision about whether a drug’s benefits outweigh the risks. How severe was the patient’s allergic reaction? What were the patient’s symptoms? How certain are we of the facts? In such cases, physicians will need access to a more detailed table-view of the Allergy List.</p>
					<h5>4.1.3 Changing the list (Adding and editing entries)</h5>
						<p>Adding new entries to the list should be quick and straightforward. EHRs should allow physicians to record that a patient has no known medication allergies with one or two clicks. EHRs should allow, but never require, physicians to record details beyond the name of the drug. The physician may not know or the patient may not remember details like the symptoms, date and severity of a patient's reaction.</p>
					<p>Now let’s do some design makeovers and get into some real world scenarios.</p>
				</div>
			</div>
		</section> <!--end section 4.1 Three Main Tasks-->
		
		<section id="glancing" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>4.2 Glancing at the Allergy List</h3>
					</div>
					<div class="scenario" id="">
						<h5>Glancing at Allergy list when considering a new prescription</h5>
						<p>A young woman visits Dr. Barnes with what seems to be a simple bladder infection.The antibiotic of choice would be sulfamethoxazole / trimethoprim (Bactrim). By glancing at the allergy list in the patient demographic banner, Dr. Barnes notices that the patient is allergic to sulfa drugs (Bactrim is a sulfa drug), and chooses a suitable and equally inexpensive drug, ciprofloxacin.</p>
					</div>
					<p>Every time they prescribe new medication, doctors will need to quickly refer to the Allergy List, and should also ask the patient if he or she is allergic to the drug in question.</p>
					<p>Developers should work to minimize physicians and nurses' cognitive loads, or the mental effort they must expend to perform this task, by making the information needed easy to find, and by not over-burdening them with unnecessary details. Navigating through the EHR requires time and effort, and remembering where to look increases the cognitive load on often already-overburdened health care providers. Instead, why not ensure ready access by placing a concise version of the Allergy List in the patient demographic banner?</p>
					<p>We've mocked-up "before and after" versions of an allergy list (<a href="#fig-4-1">Figures 4.1</a> and <a href="#fig-4-2">4.2</a>, respectively) to illustrate what we mean.</p>
					<p>This example (<a href="#fig-4-1">Figure 4.1</a>) uses some of its limited space to list symptoms. The total number of items in this potentially long list is not visible unless the user hovers over the list with a mouse. The user may, however, be using a touch interface, and touch interfaces don't allow users to hover. Thus information stored in this format therefore isn't easily accessible to some users. Listing additional substances here would actually help physicians out more. Physicians need to know, at a glance, if they're seeing all the substances on the Allergy List, or if what they're looking at has been truncated.</p>
				</div>
				<!--Before and After 4.1, 4.2-->
				<div class="one-half column">
					<div class="example" id="fig-4-1">
						<div class="ex-title">
							<span class="ex-type">Figure 4.1</span>
							<span class="ex-caption">Before: Glancing at the List – A Design That Hides Key Details</span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_0001_med-list-bad.png" class="fancybox" data-fancybox-group="gallery-0" title="Before: Glancing at the List – A Design That Hides Key Details">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0001_med-list-bad.png" class="scale-with-grid" alt="Before: Glancing at the List – A Design That Hides Key Details" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-2">
						<div class="ex-title">
							<span class="ex-type">Figure 4.2</span>
							<span class="ex-caption">After: Glancing at the List – A Design That Brings Key Details to the Forefront</span>
						</div>
						<a href="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="fancybox" data-fancybox-group="gallery-0" title="After: Glancing at the List – A Design That Brings Key Details to the Forefront" >
							<img src="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="scale-with-grid" alt="After: Glancing at the List – A Design That Brings Key Details to the Forefront" /></a>
					</div>
				</div><!--end Before and After 4.1, 4.2-->

				<div class="sixteen columns">
					<p>In our After example (<a href="#fig-4-2">Figure 4.2</a>), by not listing the symptoms we were able to show more substances. The "5 more" indicator is more obvious and helpful than the hover-function it replaces, clearly telling users that the patient has 5 more drug allergies which are not displayed in this concise view. The number without the word “more” could be confusing. At first glance, our minds will try to jump to a conclusion about what the number means (Is it a “total of 5”, or are there “5 more” to be seen?).</p>
					<p>Including the Allergy List in the patient demographic banner, as we've chosen to do, is only one means of incorporating this list into the workflow. The Allergy List could only pop up in the workflow when the physician enters a new medication prescription or renewal (<a href="#fig-4-3">Figure 4.3</a>). This would still make the Allergy List readily available to a physician making prescriptions. Most other workflows such as reviewing lab results or vital signs, or reading reports, don’t require that the physician be aware of a patient's medication allergies.</p>
					<div class="example" id="fig-4-3">
						<div class="ex-title">
							<span class="ex-type">Figure 4.3</span>
							<span class="ex-caption">Add Prescriptions</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0003_add-orders.png">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0003_add-orders.png" class="scale-with-grid" /></a>
					</div>		
				</div>
			</div>
		</section> <!--end section 4.2 glancing-at-the-allergy-list-->
		
		<section id="exploring-the-details" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>4.3 Exploring the Details</h3>
					</div>
					<p>Sometimes a physician wants to know a bit more detail about a drug allergy on the list. How accurate is the information? Are the potential risks of using the drug outweighed by strong benefits, such as increased effectiveness or significantly lower costs?</p>
					<div class="scenario">
						<h5>Reviewing allergy details</h5>
						<p>Dr. Barnes is seeing a 38-year-old father of four. For the last two days, the patient's throat has been getting increasingly sore. Five days ago, one of his children came home from school with a fever and headache. The patient’s rapid strep test indicates that he has strep throat.</p>
						<p>Dr. Barnes would usually prescribe penicillin because it's cheap and effective. A few years ago, however, the patient had a severe reaction to penicillin, which included hives and a swelling of the lips. The physician's next choice would be cephalexin (Keflex). Because penicillin and cephalexin are chemically similar, if the patient's allergic reaction to penicillin was truly severe, he might also have an allergic reaction to cephalexin. Sometimes it is perfectly safe to prescribe </p>
						<p>Cephalexin can be perfectly safe for people with mild penicillin allergy. However people with severe penicillin allergy should avoid cephalexin. The third-choice alternatives would be clindamycin or azithromycin (Z-Pak), both of which are more expensive.</p>
					</div>
					<p>Glancing at the patient demographic banner (<a href="#fig-4-4">Figure 4.4</a>), the physician can see some information, but she still needs more details. What exactly happened when the patient took this drug? Was the patient's reaction severe?</p>
					
					<div class="example" id="fig-4-4">
						<div class="ex-title">
							<span class="ex-type">Figure 4.4</span>
							<span class="ex-caption">Patient demographic banner shows only medication names</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/UM_EHR_0013_patient-banner.png">
							<img src="./assets/images/examples/allergy-list/UM_EHR_0013_patient-banner.png" class="scale-with-grid" /></a>
					</div>
					
					<p>To get this additional information, the physician will have to use the detailed table view (<a href="#fig-4-5">Figure 4.5</a>).</p>
					
					<div class="example" id="fig-4-5">
						<div class="ex-title">
							<span class="ex-type">Figure 4.5</span>
							<span class="ex-caption">Medication Allergy List - Table View shows details</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png" class="scale-with-grid" /></a>
					</div>
					
					<p>With this list (Figure 4.6), the physician or nurse can see the information they need. More important information is on the left, and less important information is on the right. The table is simple and effective. It shows limited information, and reduces the visual load on the user. By drilling a step deeper, the user can access further details.</p>
					
					<div class="example" id="fig-4-6">
						<div class="ex-title">
							<span class="ex-type">Figure 4.6</span>
							<span class="ex-caption">Users Can Click Rows to Either Edit Them or to See More Detail</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png" class="scale-with-grid" /></a>
					</div>
					
					<p>By keeping the table clean and simple we are taking advantage of a human factors principle that “our eyes have expectations” so physicians can instantly make sense of it. How did we know what information was needed and what priority to put on each category? Check out our sidebar for more.</p>
					
					<div class="quicktip" id="">
						<div class="sidebar cf">
							<h5>What Allergy List details are important to physicians?</h5>
							<p class="preview">Know your user and their needs. We sent a convenience-sample survey to mostly academic health center physician faculty members<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Know your user and their needs. We sent a convenience-sample survey to mostly academic health center physician faculty members and residents at several institutions, asking what they felt was important to include in a Medication Allergy List. We had 52 responses. Our survey didn't consider regulatory requirements, which might change over time.</p>
								<div class="example" id="fig-4-7">
									<div class="ex-title">
										<span class="ex-type">Figure 4.7</span>
										<span class="ex-caption">What Allergy List details are important to you?</span>
									</div>
									<a class="fancybox" href="./assets/images/examples/allergy-list/chart.png">
										<img src="./assets/images/examples/allergy-list/chart.png" class="scale-with-grid" /></a>
								</div>
							</div>
						</div>
						<div class="tip"></div>
					</div><!--end sidebar-->

				</div>
			</div>
		</section><!--end section exploring-the-details-->

		<section id="changing-the-allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>4.4 Changing the Allergy List (Adding and Editing)</h3>
					</div>
					<div class="scenario"><h5>Modifying the Allergy List</h5>
						<p>Dr. Barnes is seeing an adult patient who has had a sinus infection for the past two weeks. Dr. Barnes would like to prescribe the antibiotic Augmentin. As she prepares to do so, she asks the patient whether he has any drug allergies, while simultaneously glancing at the patient's allergy list in the demographic banner.</p>
						<p>The patient's allergy list currently includes Augmentin, but gives no details about the patient's reaction to the drug. Dr. Barnes decides to take advantage of this opportunity to add some detail to the medication allergy list.</p>
						<p>The patient reports that he took Augmentin years ago and became nauseated. During their conversation, the patient reveals that since then he has taken amoxicillin with no ill effects. Augmentin and amoxicillin are both in the penicillin family, and thus Augmentin should be safe to prescribe.</p>
						<p>To correct the allergy list, Dr. Barnes will recategorize the Augmentin allergy as a side effect.</p>
					</div>
					<h5>4.4.1 Editing the Allergy List</h5>
					<p>Our physician wants to quickly edit two parts of the EHR's entry for the patient's reaction to Augmentin. She wants to provide information about the patient's symptom, nausea, and to change the reaction's category from allergy to side-effect. The doctor wants to work quickly, because other clinical tasks demand her attention. The developer’s task is to make adding and removing substances from the Allergy List quick and intuitive. Here are some details for developers to keep in mind while creating EHRs that meet physicians' needs:
						<ul class="disc">
							<li>Physicians often take on new patients and need to add several allergies to their lists, so make adding entries quick and effortless.</li>
							<li>Younger patients often have no known medication allergies, so make it equally quick and effortless to record “No known medication allergies.”</li>
							<li>Make recording the details of a reaction (the symptoms, date and severity) optional. Patients may not know or remember the details, and just recording the drug name can be enough to ensure the patient's safety.</li>
							<li>Include an optional comment field for further information.</li>
							<li>Make it easy to correct erroneous information.</li>
							<li>Make it easy to find out who made entries or edits to the Allergy List. This field can be auto-populated with the active user’s name. Trustworthiness of the given information can vary depending on the source.</li>
							<li>Allow drug allergies on the  list to be inactivated and removed. Otherwise, physicians will need to repeatedly override drug-allergy alerts while prescribing medications, even when no allergies or adverse effects exist.</li>
						</ul>
					</p>					
					<p>Take a look at how these two displays enable users to add allergies (<a href="fig-4-8">Figures 4.8</a> and <a href="#fig-4-9">4.9</a>). Which one looks easier? Why? Are they both equally safe?</p>
					
					<!--Before and After 4.1, 4.2-->
					<div class="one-half column">
						<div class="example" id="fig-4-8">
							<div class="ex-title">
								<span class="ex-type">Figure 4.8</span>
								<span class="ex-caption">Before: Visually busy dialog when adding an allergy</span>
							</div>
							<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="fancybox" data-fancybox-group="gallery-1" title="4.8 Before: Visually busy dialog when adding an allergy">
								<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="Before: Visually busy dialog when adding an allergy" /></a>
						</div>
					</div>
					<div class="one-half column">
						<div class="example" id="fig-4-9">
							<div class="ex-title">
								<span class="ex-type">Figure 4.9</span>
								<span class="ex-caption">After: Simplified dialog requires only key details (removes less important information to a box in the lower screen)</span>
							</div>
							<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="fancybox" data-fancybox-group="gallery-1" title="After: Simplified dialog requires only key details (removes less important information to a box in the lower screen)" >
								<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" alt="After: Simplified dialog requires only key details (removes less important information to a box in the lower screen)" /></a>
						</div>
					</div><!--end Before and After 4.1, 4.2-->

					<!--<div class="example" id="gal-4-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 4.1</span>
							<span class="ex-caption">Adding Allergies</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">4.1 a</span> Before: Visually busy dialog when adding an allergy</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" title="4.1 a Before: Visually busy dialog when adding an allergy" >
										<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="4.1 a Before: Visually busy dialog when adding an allergy" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">4.2 b</span> 4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" title="4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)" >
										<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" alt="4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)" /></a>
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">4.2 b</span> 4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" title="4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)" >
										<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" alt="4.1 b After:  Simplified dialog requires only key details (removes less important information to a box in the lower screen)" /></a>
								</div></li>
							</ul>
						</div>
					</div>-->
					<p>The “after” example looks more straightforward, but is it as safe as the "before" example? Let’s look at the design details.</p>
					<p>In the following screenshot (<a href="#fig-4-10">Figure 4.10</a>), only the highlighted areas are essential to the task of adding a substance to the Allergy List.</p>
					<div class="example" id="fig-4-10">
						<div class="ex-title">
							<span class="ex-type">Figure 4.10</span>
							<span class="ex-caption">Essential data elements are highlighted</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_highlighted2.png" title="Essential data elements are highlighted" >
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_highlighted2.png" class="scale-with-grid" alt="Essential data elements are highlighted" /></a>
					</div>
					<p>The information not highlighted is optional for the task at hand, but still has to be looked at, evaluated, and then ignored to complete the task. All the additional unnecessary information for this task is overwhelming and creates more mental work for the physician. This exemplifies "<a href="./human-factors#cognitive-load">information overload</a>."</p>
					<p>In our “after” example, only the necessary data fields are included at the top, and optional details are in the shaded section in the bottom portion. Other technical terms are simply not shown. They don’t help the physician user.</p>
					<div class="example" id="fig-4-10">
						<div class="ex-title">
							<span class="ex-type">Figure 4.10</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" /></a>
					</div>
					<div class="sidebar">
						<h5>Drug Allergy Severity: How Serious is this Reaction?</h5>
						<p>There are no published standards for describing the severity of medication allergy reactions. Here is a list of reactions for classifying contrast agent allergies, which will suit for our purposes of appreciating the spectrum of allergic reaction severity.</p>
						<p><strong>Mild: </strong><br/>
							Nausea, vomiting, diaphoresis, itching, hives, rash, headache, pallor, nasal stuffiness, dizziness, chills, swelling around eyes and face, anxiety.</p>
						<p><strong>Moderate: </strong><br/>
							Tachycardia, hypotension, dyspnea, wheezing, laryngospasm, bronchospasm. </p>
						<p><strong>Severe: </strong><br />
							Anaphylaxis, convulsions, cardiopulmonary arrest.</p>
					</div>
					<p>Another reason the “after” design is an improvement has to do with a human factor principle known as the principle of least effort. What are the tasks for adding a new entry to the Allergy List?</p>
						<ol>
							<li>Find the name of the drug or substance.</li>
							<li>Describe or find the reaction symptoms.</li>
							<li>(Optional) Add any additional details needed including the type of reaction, dates, source of the information, etc</li>
						</ol>
					<p>Compare these two examples below.</p>
					<div class="example" id="gal-4-2">
						<div class="ex-title">
							<span class="ex-caption">Example 1: Sample current EHR workflow for adding new allergy.</span>
							<span class="ex-type">Gallery 4.2</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png" class="scale-with-grid" /></a>
									<div class="caption">First, find the name of the drug</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png">
									<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png" class="scale-with-grid" /></a>
									<div class="caption">Next, add the reaction symptoms</div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="example" id="fig-4-11">
						<div class="ex-title">
							<span class="ex-type">Figure 4.11</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0007_add-allergy-visual.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0007_add-allergy-visual.png" class="scale-with-grid" /></a>
					</div>
					<p>The simple example is easier navigate because it has a clear visual sequence in which the data fields should be completed. The optional section is visually distinct because of it’s shading. This is important because the less effort it takes to complete a task the more likely someone will complete the task. Also it is less time consuming and tiring.</p>
					<h5>Predictive Search Fields</h5>
					<p>Predictive search fields can substantially reduce the mental effort and time required to quickly add to an Allergy List. Putting the most likely results at the top makes the visual search easier. In this case, the simple reaction description “cough” is far more likely than the more detailed results such as “whooping cough,” “smoker’s cough,” etc.</p>
					<p>One example is be sure the search algorithm places the most likely substances and symptoms at the top rather than following some other sort of ordering system. This is another example of top down processing which is more useful in this case. The top being the broad symptom like a cough with the bottom being a particular type of cough.</p>
					<div class="example" id="gal-4-3">
						<div class="ex-title">
							<span class="ex-caption">Example 1: Sample current EHR workflow for adding new allergy.</span>
							<span class="ex-type">Gallery 4.3</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png" class="scale-with-grid" /></a>
									<div class="caption">Before</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0008_add-allergy-after.png">
									<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0008_add-allergy-after.png" class="scale-with-grid" /></a>
									<div class="caption">After</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>As you can see in our “before” example, it’s challenging to find the simple term “cough” about a third of the way down the list buried amidst the many other complex terms.</p>
					<p>Here in our “after” example the simple cough is listed at the top while the other options are listed alphabetically after a visual break, further down the list.</p>
				</div>
			</div>
		</section><!--end section changing-the-allergy-list-->
		
		<section id="review" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Summary</h3>
					</div>
					<p><ol>
						<li>Consider the user and the task at hand. That consideration will help you decide what details and functionality are needed for a particular medication list view.</li>
						<li>Thoroughly understand the user tasks and their mental models. The deeper your understanding of the user tasks, the richer and more useful your designed user experience will be.</li>
						<li>Reduce information chaos by eliminating unnecessary details and ambiguity.</li>
						<li>Reduce cognitive load. Don’t make the user do math when the application could. Don’t require repetitive reading. Hide unessential details.</li>
					</ol></p>					
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
							<p class="pagination prev_ch"><a href="./medication-reconciliation.php"><span class="prev"></span>Medication Reconciliation</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./eprescribing.php">ePrescribing<span class="next"></span></a></p></div>
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
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="./assets/js/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="./assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				prevEffect : 'none',
				nextEffect : 'none',

				nextClick : true,

				helpers : {
					title : {
						type : 'outside'
					},
					thumbs : {
						width  : 50,
						height : 50
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