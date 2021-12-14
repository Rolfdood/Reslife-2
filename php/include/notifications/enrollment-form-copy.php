<?php echo '<h3>NOTE: Please review your submitted enrollment form before leaving this page.</h3>'; ?>

<link rel="stylesheet" href="include/style/form-stylesheet.css">

<form method="post" action="enrollment.php" name="enrollment-form" enctype="multipart/form-data" id="student-enrollment-form">
	<!-- LEARNER INFORMATION -->
	<div class="enrollment-form">
		<fieldset>
			<legend class="form-title">LEARNER INFORMATION</legend>
			<fieldset>
				<legend>Student's Name</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_last_name" id="student-last-name" value="<?php echo $_POST['student_last_name']; ?>" disabled>
						<br>
						<label for="last-name">Last Name</label>
					</div>

					<div>
						<input type="text" name="student_first_name" id="student-first-name" value="<?php echo $_POST['student_first_name']; ?>" disabled>
						<br>
						<label for="first-name">First Name</label>
					</div>

					<div>
						<input type="text" name="student_middle_name" id="student-middle-name" value="<?php echo $_POST['student_middle_name']; ?>" disabled>
						<br>
						<label for=" middle-name">Middle Name</label>
					</div>
				</section>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_suffix_name" id="student-suffix-name" value="<?php echo $_POST['student_suffix_name']; ?>" disabled>
						<br>
						<label for=" student-suffix-name">Suffix</label>
					</div>
				</section>
			</fieldset>

			<section class="horizontal-form">
				<fieldset>
					<legend>Student's Date of Birth</legend>

					<section id="horizontal-items">
						<div>
							<input type="text" name="student_birthdate_month" id="student-birthdate-month" value="<?php echo $_POST['student_birthdate_month']; ?>" disabled>
							<br>
							<label for="student-birthdate-month">Month</label>
						</div>

						<div>
							<input type="text" name="student_birthdate_day" id="student-birthdate-day" value="<?php echo $_POST['student_birthdate_day']; ?>" disabled>
							<br>
							<label for="student-birthdate-month">Day</label>
						</div>

						<div>
							<input type="text" name="student_birthdate_year" id="student-birthdate-year" value="<?php echo $_POST['student_birthdate_year']; ?>" disabled>
							<br>
							<label for="student-birthdate-month">Year</label>
						</div>
					</section>
				</fieldset>

				<fieldset style="width: 100%;">
					<legend>Place of Birth</legend>
					<input type="text" name="student_birthplace" id="student-birthplace" value="<?php echo $_POST['student_birthplace']; ?>" disabled>
					<label for="student-birthplace">Address</label>
				</fieldset>
			</section>

			<section class="horizontal-form" id="horizontal-items">
				<div>
					<fieldset>
						<legend>Age</legend>
						<input type="number" name="student_age" id="student-age" value="<?php echo $_POST['student_age']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Gender</legend>
						<input type="text" name="student_gender" id="student-gender" value="<?php echo $_POST['student_gender']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Religion</legend>
						<input type="text" name="student_religion" id="student-religion" value="<?php echo $_POST['student_religion']; ?>" disabled>
					</fieldset>
				</div>
			</section>

			<section class="horizontal-form" id="horizontal-items">
				<div style="flex-grow: 4;">
					<fieldset>
						<legend>Email Address</legend>
						<input type="email" name="student_email" id="student-email" value="<?php echo $_POST['student_email']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Contact Number</legend>
						<input type="tel" name="student_contact_number" id="student-contact-number" value="<?php echo $_POST['student_contact_number']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Telephone Number</legend>
						<input type="tel" name="student_telephone_number" id="student-telephone-number" value="<?php echo $_POST['student_telephone_number']; ?>" disabled>
					</fieldset>
				</div>
			</section>

			<fieldset>
				<legend>Address</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div style="flex-grow: 7;">
						<input type="text" name="student_address_street" id="student-address-street" value="<?php echo $_POST['student_address_street']; ?>" disabled>
						<br>
						<label for="student-address-street">Street Address</label>
					</div>

					<div style="flex-grow: 1;">
						<input type="text" name="student_address_municipality" id="student-address-municipality" value="<?php echo $_POST['student_address_municipality']; ?>" disabled>
						<br>
						<label for="student-address-municipality">Municipality</label>
					</div>

					<div style="flex-grow: 1;">
						<input type="text" name="student_address_province" id="student-address-province" value="<?php echo $_POST['student_address_province']; ?>" disabled>
						<br>
						<label for="student-address-province">Province</label>
					</div>
				</section>
			</fieldset>
		</fieldset>
	</div>

	<br>

	<!-- APPLICATION DETAILS -->
	<div class="enrollment-form">
		<fieldset>
			<legend class="form-title">APPLICATION DETAILS</legend>
			<fieldset>
				<legend>Application Type</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<label for="student-application-grade">Application Grade</label>
						<br>
						<select name="student_application_grade" id="student-application-grade" value="<?php echo $_POST['student_application_grade']; ?>" style="width: 100%" disabled>
							<option value="<?php echo $_POST['student_application_grade']; ?>"><?php echo $_POST['student_application_grade']; ?></option>
						</select>
					</div>

					<div>
						<label for="student-enrollment-status">Enrollment Status</label>
						<br>
						<select name="student_enrollment_status" id="student-enrollment-status" value="<?php echo $_POST['student_enrollment_status']; ?>" style="width: 100%" disabled>
							<option value="<?php echo $_POST['student_enrollment_status']; ?>"><?php echo $_POST['student_enrollment_status']; ?></option>
						</select>
					</div>

					<div>
						<label for="student-number">Student Number</label>
						<input type="text" name="student_number" id="student-number" value="<?php echo $_POST['student_number']; ?>" disabled>
					</div>
				</section>
			</fieldset>

			<fieldset>
				<legend>Strand Preference</legend>
				<select name="student_strand_preference" id="student-strand-preference" value="<?php echo $_POST['student_strand_preference']; ?>" disabled>
					<option value="<?php echo $_POST['student_strand_preference']; ?>"><?php echo $_POST['student_strand_preference']; ?></option>
				</select>
			</fieldset>

			<fieldset>
				<ul>
					<label for="student-additional-files">Please upload a soft copy of the following:</label>
					<li>
						2x2 Picture
					</li>
					<li>
						PSA
					</li>
					<li>
						Good Moral
					</li>
					<li>
						Form 137
					</li>
				</ul>

				<section class="horizontal-form-items" id="horizontal-items">
					<div style="flex: auto; width: 50%;">
						<label for="student-picture">Upload your 2x2 picture here:</label>
						<input type="text" name="student_picture" id="student-picture" value="<?php echo $_POST['student_picture']; ?>" disabled>
					</div>

					<div style="flex: auto; width: 50%;">
						<label for="student-psa">Upload your PSA here:</label>
						<input type="text" name="student_psa" id="student-psa" value="<?php echo $_POST['student_psa']; ?>" disabled>
					</div>
				</section>

				<section class="horizontal-form-items" id="horizontal-items">
					<div style="flex: auto; width: 50%;">
						<label for="student-good-moral">Upload your Good Moral here:</label>
						<input type="text" name="student_good_moral" id="student-good-moral" value="<?php echo $_POST['student_good_moral']; ?>" disabled>
					</div>

					<div style="flex: auto; width: 50%;">
						<label for="student-form-137">Upload your Form 137 here:</label>
						<input type="text" name="student_form_137" id="student-form-137" value="<?php echo $_POST['student_form_137']; ?>" disabled>
					</div>
				</section>
			</fieldset>
		</fieldset>
	</div>

	<br>

	<!-- EDUCATIONAL BACKGROUND -->
	<div class="enrollment-form">
		<fieldset>
			<legend class="form-title">EDUCATIONAL BACKGROUND</legend>
			<fieldset>
				<legend>Learner Reference Number (LRN)</legend>
				<input type="text" name="student_lrn" id="student-lrn" value="<?php echo $_POST['student_lrn']; ?>" disabled>
			</fieldset>

			<fieldset>
				<legend>Name of Former School</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div style="flex-grow: 4;">
						<input type="text" name="student_former_school" id="student-former-school" value="<?php echo $_POST['student_former_school']; ?>" disabled>
						<br>
						<label for="student-former-school">Complete School Name</label>
					</div>

				</section>

				<br>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_former_school_graduate_year" id="student-former-school-graduate-year" value="<?php echo $_POST['student_former_school_graduate_year']; ?>" disabled>
						<br>
						<label for="student_former_school-graduate-year">Year Graduated</label>
					</div>

					<div>
						<input type="text" name="student_former_school_schoolyear" id="student-former-school-schoolyear" value="<?php echo $_POST['student_former_school_schoolyear']; ?>" disabled>
						<br>
						<label for="student-former-school-schoolyear">School Year</label>
					</div>
				</section>
			</fieldset>
		</fieldset>
	</div>

	<br>

	<!-- PARENT INFORMATION -->
	<div class="enrollment-form">
		<fieldset>
			<legend class="form-title">PARENT INFORMATION</legend>
			<fieldset>
				<legend>Mother's Name</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_mother_last_name" id="student-mother-last-name" value="<?php echo $_POST['student_mother_last_name']; ?>" disabled>
						<br>
						<label for="last-name">Last Name</label>
					</div>

					<div>
						<input type="text" name="student_mother_first_name" id="student-mother-first-name" value="<?php echo $_POST['student_mother_first_name']; ?>" disabled>
						<br>
						<label for="first-name">First Name</label>
					</div>

					<div>
						<input type="text" name="student_mother_middle_name" id="student-mother-middle-name" value="<?php echo $_POST['student_mother_middle_name']; ?>" disabled>
						<br>
						<label for=" middle-name">Middle Name</label>
					</div>
				</section>

			</fieldset>

			<section class="horizontal-form" id="horizontal-items">
				<div style="flex-grow: 5;">
					<fieldset>
						<legend>Occupation</legend>
						<input type="text" name="student_mother_occupation" id="student-mother-occupation" value="<?php echo $_POST['student_mother_occupation']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Contact Number</legend>
						<input type="tel" name="student_mother_contact_number" id="student-mother-contact-number" value="<?php echo $_POST['student_mother_contact_number']; ?>" disabled>
					</fieldset>
				</div>
			</section>

			<hr style="border-color: rgb(210, 210, 210);">

			<fieldset>
				<legend>Father's Name</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_father_last_name" id="student-father-last-name" value="<?php echo $_POST['student_father_last_name']; ?>" disabled>
						<br>
						<label for="last-name">Last Name</label>
					</div>

					<div>
						<input type="text" name="student_father_first_name" id="student-father-first-name" value="<?php echo $_POST['student_father_first_name']; ?>" disabled>
						<br>
						<label for="first-name">First Name</label>
					</div>

					<div>
						<input type="text" name="student_father_middle_name" id="student-father-middle-name" value="<?php echo $_POST['student_father_middle_name']; ?>" disabled>
						<br>
						<label for=" middle-name">Middle Name</label>
					</div>
				</section>

			</fieldset>

			<section class="horizontal-form" id="horizontal-items">
				<div style="flex-grow: 5;">
					<fieldset>
						<legend>Occupation</legend>
						<input type="text" name="student_father_occupation" id="student-father-occupation" value="<?php echo $_POST['student_father_occupation']; ?>" disabled>
					</fieldset>
				</div>

				<div>
					<fieldset>
						<legend>Contact Number</legend>
						<input type="tel" name="student_father_contact_number" id="student-father-contact-number" value="<?php echo $_POST['student_father_contact_number']; ?>" disabled>
					</fieldset>
				</div>
			</section>
		</fieldset>
	</div>

	<br>

	<!-- CONTACT IN CASE OF EMERGENCY -->
	<div class="enrollment-form">
		<fieldset>
			<legend class="form-title">CONTACT IN CASE OF EMERGENCY</legend>
			<fieldset>
				<legend>Contact Name</legend>

				<section class="horizontal-form-items" id="horizontal-items">
					<div>
						<input type="text" name="student_emergency_contact_last_name" id="student-emergency-contact-last-name" value="<?php echo $_POST['student_emergency_contact_last_name']; ?>" disabled>
						<br>
						<label for="last-name">Last Name</label>
					</div>

					<div>
						<input type="text" name="student_emergency_contact_first_name" id="student-emergency-contact-first-name" value="<?php echo $_POST['student_emergency_contact_first_name']; ?>" disabled>
						<br>
						<label for="first-name">First Name</label>
					</div>

					<div>
						<input type="text" name="student_emergency_contact_middle_name" id="student-emergency-contact-middle-name" value="<?php echo $_POST['student_emergency_contact_middle_name']; ?>" disabled>
						<br>
						<label for=" middle-name">Middle Name</label>
					</div>
				</section>

			</fieldset>

			<section class="horizontal-form" id="horizontal-items">
				<div>
					<fieldset>
						<legend>Contact Number</legend>
						<input type="tel" name="student_emergency_contact_contact_number" id="student-emergency-contact-contact-number" value="<?php echo $_POST['student_emergency_contact_contact_number']; ?>" disabled>
					</fieldset>
				</div>
			</section>
		</fieldset>
		</fieldset>
	</div>
</form>