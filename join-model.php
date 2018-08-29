<?php

include 'header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<form action="">
				<h3>Step 1: Agree to Performer Agreement</h3>
				<p>Please ensure this information is accurate. This information is never shared with 3rd parties or camatars.com users.</p>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputName">Full Name: <sup>*</sup></label>
						<input type="text" class="form-control" id="inputName">
					</div>
					<div class="form-group col-md-6 birthday_select">
						<label for="inputBirthday">Birthday: <sup>*</sup></label>
						<div class="bday_select"></div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail">Email address: <sup>*</sup></label>
						<input type="text" class="form-control" id="inputEmail">
					</div>
				</div>

				<div class="row section">
					<div class="col-12">
						<h3>Step 2: Upload Identification</h3>
						<p>To complete age verification, please upload two photos of your government issued personal identification.</p>
						<p>We require an image of the ID, as well as a high quality image of the ID held up next to your face. Couples are required to upload this
							for each person.</p>
						<p>We currently accept the following forms of identification: Passport, Drivers License.</p>
						<p>Small or blurry images will be denied and will delay verification. Please upload a clear photo of the ID so the following can be read: Name, Date of Birth, Issue Date and Expiration Date.</p>
						<p>Identification uploads are never shared with 3rd parties.</p>

						<h4>Required Images</h4>
						<p>High quality scan of ID.</p>
						<p>Picture of ID next to Face.</p>

						<div class="form-row">
							<div class="form-group">
								<label for="exampleFormControlFile1">Image 1: <sup>*</sup></label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group">
								<label for="exampleFormControlFile1">Image 2: <sup>*</sup></label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</div>

					</div>
				</div>

				<div class="row section">
					<div class="col-12">
						<h3>Step 3: Review and Submit</h3>
						<p>Review all information submitted above to verify it is accurate. Once Completed submit all for our teams to review. You will be notice by</p>
						<p>The submitted above once approved or if there are any remaining issues.</p>
						<h4>Thanks and wecolme!</h4>
					</div>
				</div>

				<button type="submit" class="btn orange text-uppercase">Submit For Review & Approval</button>
			</form>
		</div>
	</div>

</div>


<?php

include 'footer.php';

?>

