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

	<link rel="stylesheet" type="text/css" media="screen" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" media="print" href="./assets/css/print.css" />


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="allergy-list">
	<!--php include './nav.php';-->
	<nav class="main" role="navigation">
		<div class="container">
			<div class="sixteen columns">
				<ul>
					<li class="allergy-list">
					<a href="./medication-reconciliation.php"><span class="prev"></span><span class="prev-text">Previous</span></a> 
					<a href="./allergy-list.php"><span class="ch-name">Allergy List</span></a> 
					<a href="./e-prescribing.php"><span class="next"></span><span class="next-text">Next</span></a>
					<div class="section-nav">
						<ul>
							<li><a href="./allergy-list.php#three-tasks">4.1 Three Main Tasks</a></li>
							<li><a href="./allergy-list.php#glancing">4.2 Glancing at the Allergy List</a></li>
							<li><a href="./allergy-list.php#exploring-the-details">4.3 Exploring the Details</a></li>
							<li><a href="./allergy-list.php#changing-the-allergy-list">4.4 Changing the Allergy List</a></li>
							<li><a href="./allergy-list.php#summary">4.5 Summary</a></li>
						</ul>
					</div></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-4" class="chapter">
		<div class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>4</h2>
					<h2>Allergy List</h2>
					<div class="subheader"><p>Streamline data entry and create clear, uncluttered displays to highlight important allergies.</p></div>
				</div>
			</div>
		</div>
		<section id="allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>Medication Allergy Lists (or simply Allergy Lists) currently include a patient’s known medication allergies, but they could include more.</p>
					<p>Historically, physicians, nurses, patients, and pharmacists have included patients’ true drug allergies, other adverse drug reactions (also known as side-effects or adverse effects) such as nausea or drowsiness, and allergic reactions in their allergy lists. In this chapter, we will focus on true drug allergies and adverse drug reactions. Physicians often also include patients’ allergies to substances other than medications (such as latex, adhesive tape, peanuts and other foods) in Allergy Lists.</p>
					
					<div class="quicktip" id="other_allergies">
						<div class="sidebar cf">
							<h4>Other Kinds of Allergies</h4>
							<p class="preview">Inhalant allergies (such as asthma, hay fever, or allergies to dust and mold) are usually not included in the Allergy List, but rather<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Inhalant allergies (such as asthma, hay fever, or allergies to dust and mold) are usually not included in the Allergy List, but rather in the Problem List. Very few food allergies could have an effect on prescriptions. A few injectable medications use peanut oil, glucosamine tablets may be derived from shellfish, and patients with egg or soy allergies should not be prescribed propofol.</p>
							</div>
						</div>
						<div class="tip"></div>
					</div>

					<p>In one way, the Allergy List is the safety net that supports the Medication List. Physicians check the medication list against this list of allergies in order to ensure patient safety. Allergic reactions can range from minor to fatal, so the Allergy List needs to be kept current to prevent these events. Good design can simplify correcting errors in the Allergy List.</p>
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
					<p>Developers might design Allergy Lists keeping in mind a user's three main tasks: glancing, exploring, and changing the list.</p>
					<p><strong>Glancing at the list</strong> may reveal that a patient has “no known medication allergies” – or that he’s deathly allergic to the medication the physician is about to order for him. Often, ideally every time they prescribe or administer a new medication, doctors and nurses will need to quickly refer to the Allergy List.</p>
					<p><strong>Exploring the details</strong> may help a physician decide whether a drug’s benefits outweigh the risks.</p>
					<p><strong>Adding new entries</strong> to the list can be quick and straightforward. <strong>Editing the list</strong> can be fast, assured, and flexible, requiring minimal details.</p>
					<p>Let's consider the clinical scenarios prompting our three tasks, and some design makeovers that better address the needs of these scenarios and tasks.</p>
				</div>
			</div>
		</section> <!--end section 4.1 Three Main Tasks-->
		
		<section id="glancing" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>4.2 Glancing at the Allergy List</h3>
					</div>
					<div class="scenario" id="new-script">
						<h4>Clinical Scenario &mdash; Considering a New Prescription</h4>
						<p>A young woman visits Dr. Barnes with what seems to be a simple bladder infection. Dr. Barnes would normally prescribe the antibiotic sulfamethoxazole / trimethoprim (or Bactrim) for this complaint, but a quick glance at the allergy list in the patient's demographic banner reveals that this patient is allergic to sulfa drugs such as Bactrim. Instead, Dr. Barnes prescribes ciprofloxacin, a suitable and equally inexpensive drug.</p>
					</div>
					<p>Every time they prescribe new medication, doctors will need to quickly refer to the Allergy List and may ask patients if they are allergic to the drugs in question.</p>
					<p>For this task, physicians need to be able to glance at a short list that only contains the names of the drugs a patient is allergic to. This list could be clearly visible when physicians are prescribing or administering, but they don't need to see it when performing unrelated tasks, such as documenting the visit in a note. The list could be included in the patient demographic banner, where it would always be visible even while physicians do tasks that don't require it.</p>
					<p>Developers can work to minimize physicians' cognitive loads, or the mental effort they must expend to perform this task, by making the information physicians need easy to find, and by not over-burdening them with unnecessary details. Navigating through the EHR requires time and effort, and remembering where they need to look increases the cognitive load on often already-overburdened health care providers.</p>
					<p>We've mocked-up "before and after" versions of an allergy list (<a href="#fig-4-1">Figures 4.1</a> and <a href="#fig-4-2">4.2</a>) to illustrate what we mean.</p>
					<p>This example (<a href="#fig-4-1">Figure 4.1</a>) uses some of its limited space to list symptoms. The total number of items in this potentially long list is not visible unless the user hovers over the list with a mouse. The user may, however, be using a touch interface, and touch interfaces don't allow users to hover. Thus information stored in this format isn't easily accessible to some users; making use of a click or tap instead of hover will help. Listing additional substances here would actually help physicians out more. Physicians need to know, at a glance, if they're seeing all the substances on the Allergy List, or if what they're looking at has been truncated.</p>
				</div>
				<!--Before and After 4.1, 4.2-->
				<div class="one-half column">
					<div class="example" id="fig-4-1">
						<div class="ex-title">
							<span class="ex-type">Figure 4.1</span>
							<span class="ex-caption">Before: Glancing at the List <span class="capt-desc">&mdash; A design that hides key details</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_0001_med-list-bad.png" class="fancybox" data-fancybox-group="gallery-0" title="Figure 4.1 - Before: Glancing at the List – A design that hides key details">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0001_med-list-bad.png" class="scale-with-grid" alt="A design that hides key details" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-2">
						<div class="ex-title">
							<span class="ex-type">Figure 4.2</span>
							<span class="ex-caption">After: Glancing at the List <span class="capt-desc">&mdash; A design that brings key details to the forefront</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="fancybox" data-fancybox-group="gallery-0" title="Figure 4.2 - After: Glancing at the List - A design that brings key details to the forefront" >
							<img src="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="scale-with-grid" alt="Bring key details to the forefront of the design" /></a>
					</div>
				</div><!--end Before and After 4.1, 4.2-->

				<div class="sixteen columns">
					<p>In our "after" example (<a href="#fig-4-2">Figure 4.2</a>), by not listing the symptoms we were able to show more substances. The "5 more" indicator is more obvious and helpful than the hover-function it replaces, clearly telling users that the patient has five more drug allergies which are not displayed in this concise view. The number without the word “more” could be confusing. At first glance, our minds will try to jump to a conclusion about what the number means (Is it a “total of 5,” or are there “5 more” to be seen?).</p>
					<p>Including the Allergy List in the patient demographic banner, as we've chosen to do, is one means of incorporating this list into the workflow. The Allergy List could only pop up in the workflow when the physician enters a new medication prescription or renewal (<a href="#fig-4-3">Figure 4.3</a>). This would still make the Allergy List readily available to a physician making prescriptions. Most other workflows such as reviewing lab results or vital signs or reading reports, don’t require that the physician be aware of a patient's medication allergies.</p>
					<div class="example" id="fig-4-3">
						<div class="ex-title">
							<span class="ex-type">Figure 4.3</span>
							<span class="ex-caption">Add Prescriptions</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0003_add-orders.png" title="Figure 4.3 - Add Prescriptions">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0003_add-orders.png" class="scale-with-grid" alt="Add Prescriptions" /></a>
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
						<h4>Clinical Scenario &mdash; Reviewing Allergy Details</h4>
						<p>Dr. Barnes is seeing a 38-year-old father of four. For the last two days, the patient's throat has been getting increasingly sore. Five days ago, one of his children came home from school with a fever and headache. The patient’s rapid strep test indicates that he has strep throat.</p>
						<p>Dr. Barnes would usually prescribe penicillin because it's cheap and effective. A few years ago, however, the patient had a severe reaction to penicillin, which included hives and a swelling of the lips. The physician's next choice would be cephalexin (Keflex). Because penicillin and cephalexin are chemically similar, if the patient's allergic reaction to penicillin was truly severe, he might also have an allergic reaction to cephalexin. Other times it may perfectly safe to prescribe.</p>
						<p>Cephalexin can be perfectly safe for people with a mild penicillin allergy. However people with a severe penicillin allergy should avoid cephalexin. The third-choice alternatives would be clindamycin or azithromycin (Z-Pak), both of which are more expensive.</p>
					</div>
					<p>Glancing at the patient demographic banner (<a href="#fig-4-4">Figure 4.4</a>), the physician can see some information, but she still needs more details. What exactly happened when the patient took this drug? Was the patient's reaction severe?</p>
					<div class="print-only page-break"></div>
					<div class="example" id="fig-4-4">
						<div class="ex-title">
							<span class="ex-type">Figure 4.4</span>
							<span class="ex-caption">Patient Demographic Banner <span class="capt-desc">&mdash; Shows only medication names.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/UM_EHR_0013_patient-banner.png" title="Figure 4.4 - Patient Demographic Banner - Shows only medication names.">
							<img src="./assets/images/examples/allergy-list/UM_EHR_0013_patient-banner.png" class="scale-with-grid" alt="Patient banner shows only medication names." /></a>
					</div>
					
					<p>To get this additional information, the physician will have to use the detailed table view (<a href="#fig-4-5">Figure 4.5</a>).</p>
					
					<div class="example" id="fig-4-5">
						<div class="ex-title">
							<span class="ex-type">Figure 4.5</span>
							<span class="ex-caption">Medication Allergy List <span class="capt-desc">&mdash; Table view shows details.</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png" title="Figure 4.5 - Medication Allergy List - Table view shows details.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png" class="scale-with-grid" alt="Allergy table shows details." /></a>
					</div>
					
					<p>With this list (<a href="#fig-4-5">Figure 4.5</a>), the physician or nurse can see the information they need. More important information is on the left, and less important information is on the right. The table is simple and effective. It shows limited information and reduces the visual load on the user. By drilling a step deeper, the user can access further details.</p>
					
					<div class="example" id="fig-4-6">
						<div class="ex-title">
							<span class="ex-type">Figure 4.6</span>
							<span class="ex-caption">Users Can Click Rows to Either Edit Them or to See More Details</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png" title="Figure 4.6 - Users Can Click Rows to Either Edit Them or to See More Details">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png" class="scale-with-grid" alt="Click Rows to Edit or See More Details" /></a>
					</div>
					
					<div class="quicktip" id="important-details">
						<div class="sidebar cf">
							<h4>What Allergy List details are important to physicians?</h4>
							<p class="preview">Know your user and their needs. We sent a convenience-sample survey to mostly academic health center physician faculty members<span class="elipsis">... &nbsp;<span class="a">Read more</span></span></p>
							<div class="qt-content show">
								<p>Know your user and their needs. We sent a convenience-sample survey to mostly academic health center physician faculty members and residents at several institutions, asking what they felt was important to include in a Medication Allergy List. We had 52 responses. Our survey didn't consider regulatory requirements, which might change over time.</p>
								<div class="print-only page-break"></div>
								<div class="example" id="fig-4-7">
									<div class="ex-title">
										<span class="ex-type">Figure 4.7</span>
										<span class="ex-caption">What Allergy List Details are Important to You?</span>
									</div>
									<a class="fancybox" href="./assets/images/examples/allergy-list/chart.png" title="Figure 4.7 - What Allergy List Details are Important to You?">
										<img src="./assets/images/examples/allergy-list/chart.png" class="scale-with-grid" alt="Priority of Allergy List Details" /></a>
								</div>
								<p>These users don't often need to know about inactive allergies, allergies' dates of onset, or the source of the EHR's information about these allergies. It's safe to hide this information in the course of regular usage.</p>
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
						<div class="print-only page-break"></div>
						<h3>4.4 Changing the Allergy List (Adding and Editing)</h3>
					</div>
					<div class="scenario">
						<h4>Clinical Scenario &mdash; Modifying the Allergy List</h4>
						<p>Dr. Barnes is seeing an adult patient who has had a sinus infection for the past two weeks. Dr. Barnes would like to prescribe the antibiotic Augmentin. As she prepares to do so, she asks the patient whether he has any drug allergies, while simultaneously glancing at the patient's allergy list in the demographic banner.</p>
						<p>The patient's allergy list currently includes Augmentin, but gives no details about his reaction to the drug. Dr. Barnes decides to take advantage of this opportunity to add some detail to the medication allergy list.</p>
						<p>The patient reports that he took Augmentin years ago and became nauseated. During their conversation, the patient reveals that, since then, he has taken amoxicillin with no ill effects. Augmentin and amoxicillin are both in the penicillin family, and thus Augmentin should be safe to prescribe.</p>
						<p>To correct the allergy list, Dr. Barnes will recategorize the Augmentin allergy as a side effect.</p>
					</div>
					<h4>4.4.1 Editing the Allergy List</h4>
					<p>Our physician wants to quickly edit two parts of the EHR's entry for the patient's reaction to Augmentin. She wants to provide information about the patient's symptom, nausea, and to change the reaction's category from allergy to side-effect. The doctor wants to work quickly, because other clinical tasks demand her attention. The developer’s task is to make adding and removing substances from the Allergy List quick and intuitive. Here are some details for developers to keep in mind while creating EHRs that meet physicians' needs:</p>
						<ul class="disc">
							<li>Physicians often take on new patients and need to add several allergies to their lists, so make adding entries quick and effortless.</li>
							<li>Younger patients often have no known medication allergies, so make it equally quick and effortless to record, “No known medication allergies.”</li>
							<li>Make recording the details of a reaction (the symptoms, date and severity) optional. Patients may not know or remember the details, and just recording the drug name can be enough to ensure the patient's safety.</li>
							<li>Include an optional comment field for further information.</li>
							<li>Make it easy to correct erroneous information.</li>
							<li>Make it easy to find out who made entries or edits to the Allergy List. This field can be auto-populated with the active user’s name. Trustworthiness of the given information can vary depending on the source.</li>
							<li>Allow drug allergies on the list to be inactivated and removed. Otherwise, physicians will need to repeatedly override drug-allergy alerts while prescribing medications, even when no allergies or adverse effects exist.</li>
						</ul>
										
					<p>Take a look at how these two displays enable users to add allergies (<a href="fig-4-8">Figures 4.8</a> and <a href="#fig-4-9">4.9</a>). Which one looks easier? Why? Are they both equally safe?</p>
				</div>
					<!--Before and After 4.1, 4.2-->
				<div class="one-half column">
					<div class="example" id="fig-4-8">
						<div class="ex-title">
							<span class="ex-type">Figure 4.8</span>
							<span class="ex-caption">Before: Adding an Allergy to a Visually Busy Dialog</span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="fancybox" data-fancybox-group="gallery-1" title="Figure 4.8 - Before: Visually busy dialog when adding an allergy">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="Visually busy dialog when adding an allergy" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-9">
						<div class="ex-title">
							<span class="ex-type">Figure 4.9</span>
							<span class="ex-caption">After: Simplified Dialog Requires Only Key Details <span class="capt-desc">&mdash; Removes less important information to a box in the lower screen.</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy_2.png" class="fancybox" data-fancybox-group="gallery-1" title="Figure 4.9 - After: Simplified dialog requires only key details (removes less important information to a box in the lower screen)" >
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy_2.png" class="scale-with-grid" alt="Simplified dialog requires only key details" /></a>
					</div>
				</div><!--end Before and After 4.1, 4.2-->

				<div class="sixteen columns">
					<p>The “after” example looks more straightforward, but is it as safe as the “before” example? Let’s look at the design details.</p>
					<p>In the following screenshot (<a href="#fig-4-10">Figure 4.10</a>), only the highlighted areas are essential to the task of adding a substance to the Allergy List. The information we haven't highlighted is optional, but physicians trying to complete this task still have to look at it, evaluate it, and ignore it. This unnecessary information overwhelms the physician, leading to <a href="./human-factors.php#info_chaos">information overload</a>.</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-10">
						<div class="ex-title">
							<span class="ex-type">Figure 4.10</span>
							<span class="ex-caption">Before: Essential Data Elements Are Highlighted for Adding a Drug Allergy</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_highlighted2.png" title="Figure 4.10 - Before: Essential Data Elements Are Highlighted for Adding a Drug Allergy" >
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_highlighted2.png" class="scale-with-grid" alt="Essential data elements are highlighted" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-11">
						<div class="ex-title">
							<span class="ex-type">Figure 4.11</span>
							<span class="ex-caption">After: Simple, Sequential Design for Adding a Drug Allergy</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" title="Figure 4.11 - After: Simple, Sequential Design for Adding a Drug Allergy">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="scale-with-grid" alt="Simple, Sequential Design for Adding a Drug Allergy" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p>Our "after" example (Figure 4.11) only includes the necessary data fields. The shaded section at the bottom offers physicians the ability to enter optional details. Our "after" design exemplifies the <a href="./human-factors.php#how-people-perceive">principle of least effort</a>.</p>
					
					<h4>4.4.2 Adding to the Allergy List</h4>
					<p>When adding new entries to the Allergy Lists, nurses and physicians might:</p>
						<ol>
							<li>Find the name of the drug or substance from a list of possible choices.</li>
							<li>Find the symptoms that characterized the patient's reaction from a list of symptom choices.</li>
							<li>If desired, add additional details such as the type of reaction, the dates it occurred on, the source of this information, etc.</li>
						</ol>
					<p>Compare two examples of ways to add new allergies to lists below (<a href="#gal-4-1">Gallery 4.1</a>):</p>
							
					<div class="example" id="gal-4-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 4.1</span>
							<span class="ex-caption">Make It Simple to Add New Allergies</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">4.1 a</span> Before: First, Find the Name of the Drug or Substance</div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png" title="Gallery 4.1 a - Before: First, Find the Name of the Drug or Substance">
										<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png" class="scale-with-grid" alt="impossible to find the name of the drug or substance" /></a>
								</div></li>
								<li><div>
									<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">4.1 b</span> Before: Next, Add the Reaction Symptoms</div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png" title="Gallery 4.1 b - Before: Next, Add the Reaction Symptoms">
										<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png" class="scale-with-grid" alt="Adding reaction symptoms is difficult" /></a>
								</div></li>
								<li id="gal-4-1-c"><div>
								<div class="print-only page-break"></div>
									<div class="caption"><span class="ex-type">4.1 c</span> After: Simplified Visual Path with Fewer Fields when Adding Allergies</div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_0007_add-allergy-visual.png" title="Gallery 4.1 c - After: Simplified Visual Path with Fewer Fields when Adding Allergies">
										<img src="./assets/images/examples/allergy-list/Um_Ehr_0007_add-allergy-visual.png" class="scale-with-grid" alt="Simplified Visual Path with Fewer Fields" /></a>
								</div></li>
							</ul>
						</div>
					</div><!--end gallery 4.1-->
					<p>The simplified example's design (see <a href="#gal-4-1-c">Gallery 4.1 c</a>) can be faster and easier to use. It has a clear visual sequence, which makes it easier to navigate and thus more likely to be completed.</p>
					<h4>4.4.3 Predictive Search Fields</h4>
					<p>Predictive search fields can substantially reduce the mental effort and time it takes physicians to add entries to an Allergy List. Pushing the most likely results to the top of the list of predictive search results will make it easier for users to find what they're looking for. Users are far more likely to want to enter a simple description, like "cough," than they are to want to enter a more detailed result, such as "whooping cough" or "smoker's cough."</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-12">
						<div class="ex-title">
							<span class="ex-type">Figure 4.12</span>
							<span class="ex-caption">Before: Searching Symptoms to Add a New Allergy <span class="capt-desc">&mdash; The search result listing shows the primary term, "cough," far down a visually busy list.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" title="Figure 4.12 - Before: Searching Symptoms to Add a New Allergy - The search result listing shows the primary term, 'cough,' far down a visually busy list.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="searching symptoms results in a visually busy list" /></a>
					</div>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-4-13">
						<div class="ex-title">
							<span class="ex-type">Figure 4.13</span>
							<span class="ex-caption">After: Searching Symptoms to Add a New Allergy <span class="capt-desc">&mdash; List displays fewer results and pushes simpler, more frequently-chosen results to the top.</span></span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-4" href="./assets/images/examples/allergy-list/Um_Ehr_0008_add-allergy-after.png" title="Figure 4.13 - After: Searching Symptoms to Add a New Allergy - List displays fewer results and pushes simpler, more frequently-chosen results to the top.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0008_add-allergy-after.png" class="scale-with-grid" alt="simpler search results pushes fewer, frequently-chosen results to the top" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p>As you can see, it is difficult to find the simple term "cough" in our "before" example (<a href="fig-4-12">Figure 4.12</a>). The term is about a third of the way down the list, buried among many other terms.</p>
					<p>In our "after" example (<a href="fig-4-13">Figure 4.13</a>), the simple cough is at the top of the list. Other options are listed alphabetically further down the list, after a visual break.</p>
				</div>
			</div>
		</section><!--end section changing-the-allergy-list-->
		
		<section id="summary" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<div class="print-only page-break"></div>
						<h3>4.5 Summary</h3>
					</div>
					<ol>
						<li>Consider the users and their tasks. This will help you decide what details and functions to incorporate in a particular Allergy List view.</li>
						<li>Create a clear, uncluttered navigation path through the form physicians use to input allergy information.</li>
						<li>Reduce information chaos by eliminating unnecessary details and amount of reading users must do to accomplish the targeted task.</li>
						<li>Reduce cognitive load and reduce errors by offering a predictive search function.</li>
						<li>Make adding the details of reactions (such as symptoms, dates and severity) optional.</li>
						<li>Make recording that a patient has "no known medication allergies" effortless.</li>
						<li>Make correcting erroneous information from previous entries easy.</li>
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
							<li class="allergy-list">
								<a class="prev-ch" href="./medication-reconciliation.php"><span class="prev"></span><span class="ch-name">Medication Reconciliation</span></a> 
								<a class="next-ch" href="./e-prescribing.php"><span class="next"></span><span class="ch-name">E-Prescribing</span></a></li>
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
							<li>Profile photo in interfaces by <a href="https://www.flickr.com/photos/pedronchi/" class="link" target="_blank">pedronchi</a></li>
						</ol>
					</div>
				</div>
			</div>
		</section>
	</section>
	

</div><!--end wrapper-->
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="./assets/js/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="./assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();

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