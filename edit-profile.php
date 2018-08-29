<?php

include 'header.php';

?>

	<div class="row edit_profile">
		<div class="col-12">
			<div class="tab_menu_border">
			</div>
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit_profile" role="tab" aria-controls="edit_profile" aria-selected="true">Edit Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="buy-tokens-tab" data-toggle="tab" href="#buy_tokens" role="tab" aria-controls="buy_tokens" aria-selected="false">Buy Tokens</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="upgrade-tab" data-toggle="tab" href="#upgrade" role="tab" aria-controls="upgrade" aria-selected="false">Upgrade</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="tokens-earned-tab" data-toggle="tab" href="#tokens_earned" role="tab" aria-controls="tokens_earned" aria-selected="false">Tokens Earned</a>
					</li>
				</ul>
			</div>

			<div class="container">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="edit_profile" role="tabpanel" aria-labelledby="edit-profile-tab">
						<form>
							<div class="form-row mb-4">
								<div class="form-group col-md-6">
									<label for="editDisplayName">Display Name:</label>
									<input type="text" class="form-control" id="editDisplayName">
								</div>
								<div class="form-group col-md-6 birthday_select">
									<label for="birthday_select">Birthday: <sup>*</sup></label>
									<div class="bday_select"></div>
								</div>
							</div>
							<div class="form-row mb-4">
								<div class="form-group col-md-6 gender edit_profile_gender">
									<label for="editGender">Gender</label>
									<select id="editGender" class="form-control">
										<option></option>
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label>Interested In: <sup>*</sup></label>
									<div class="row d-flex no-gutters justify-content-between">
										<div class="form-check edit_profile_check">
											<input class="form-check-input" type="checkbox" id="interestMen">
											<label class="form-check-label edit_profile_check" for="interestMen">Men</label>
										</div>
										<div class="form-check edit_profile_check">
											<input class="form-check-input" type="checkbox" id="interestWomen">
											<label class="form-check-label edit_profile_check" for="interestWomen">Women</label>
										</div>
										<div class="form-check edit_profile_check">
											<input class="form-check-input" type="checkbox" id="interestTrans">
											<label class="form-check-label edit_profile_check" for="interestTrans">Trans</label>
										</div>
										<div class="form-check edit_profile_check">
											<input class="form-check-input" type="checkbox" id="interestCouples">
											<label class="form-check-label edit_profile_check" for="interestCouples">Couples</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row mb-4">
								<div class="form-group col-md-6">
									<label for="editLocations">Location: <sup>*</sup></label>
									<input type="text" class="form-control" id="editLocations">
								</div>
								<div class="form-group col-md-6">
									<label for="editLang">Spoken Languages: <sup>*</sup></label>
									<input type="text" class="form-control" id="editLang">
								</div>
							</div>
							<div class="form-row mb-4">
								<div class="form-group col-md-6">
									<label for="editEmail">Email address:</label>
									<input type="text" class="form-control" id="editEmail">
								</div>
								<div class="form-group col-md-6">
									<label for="editCell">Cell Phone:</label>
									<input type="text" class="form-control" id="editCell">
								</div>
							</div>
							<div class="form-row mb-4">
								<div class="form-group col-md-12 p-0">
									<label for="editAbout">About:</label>
									<textarea class="form-control" name="editAbout" id="editAbout" cols="30" rows="20"></textarea>
								</div>
							</div>
							<button type="submit" class="btn orange text-uppercase">Update</button>
						</form>
					</div><!-- tab-pane -->
					<div class="tab-pane fade" id="buy_tokens" role="tabpanel" aria-labelledby="buy-tokens-tab">
						<form>
							<h3>Purchase Tokens</h3>
							<p>Credit Card Options(the more tokens you buy, the less they cost)</p>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="100Tokens" id="100Tokens" value="100Tokens" checked>
								<label class="form-check-label radio_button" for="100Tokens">
									100 Tokens <span>$12.99</span>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="250Tokens" id="250Tokens" value="250Tokens">
								<label class="form-check-label radio_button" for="250Tokens">
									250 Tokens ONLY <span>$27.60</span>(15% discount)
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="1000Tokens" id="1000Tokens" value="1000Tokens">
								<label class="form-check-label radio_button" for="1000Tokens">
									1,000 Tokens ONLY <span>$90.93</span>(30% discount)
								</label>
							</div>

							<button type="submit" class="btn orange text-uppercase mt-5">Continue To Payment Page</button>
						</form>
					</div>
					<div class="tab-pane fade" id="upgrade" role="tabpanel" aria-labelledby="upgrade-tab">
						<div class="text_box p-4 mb-5">
							<h3 class="mb-4"><span>Upgrade Today and</span> get 200 free tokens!</h3>
							<h4>Upgrade includes the following features along with your tokens</h4>
							<div class="rounded-circle d-flex">
								<div class="row align-self-center">
									<h2 class="mx-auto">ONLY</h2>
									<h3 class="mx-auto">$19.99/mo!</h3>
								</div>
							</div>
						</div>
						<div class="list_box mb-5">
							<h2 class="text-uppercase mb-4">Gold User</h2>
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-start">
									<h3 class="blue_stripe">Get a Gold Badge on your profile and in messages</h3>
								</li>
								<li class="list-group-item d-flex justify-content-start">
									<h3 >100% ad free experience</h3>
								</li>
								<li class="list-group-item d-flex justify-content-start">
									<h3 class="blue_stripe">20 Stickers per month to send to models</h3>
								</li>
								<li class="list-group-item d-flex justify-content-start">
									<h3>View Multiple Cams</h3>
								</li>
								<li class="list-group-item d-flex justify-content-start">
									<h3 class="blue_stripe">Private Messaging</h3>
								</li>
							</ul>
						</div>
						<a href="#" class="btn orange text-uppercase">Upgrade Your Account</a>
					</div>
					<div class="tab-pane fade table_tab" id="tokens_earned" role="tabpanel" aria-labelledby="tokens-earned-tab">
						<h3>Current Token Balance: 2511</h3>
						<a href="#" class="btn orange text-uppercase">Cash Out</a>
						<div class="table_wrap">
							<table class="table table-striped mt-5">
								<thead>
								<tr>
									<th scope="col">Date</th>
									<th scope="col">Action</th>
									<th scope="col">Tokens</th>
									<th scope="col">Token Balance</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>8/15/18</td>
									<td>150</td>
									<td>25</td>
									<td>200</td>
								</tr>
								<tr>
									<td>7/15/18</td>
									<td>100</td>
									<td>15</td>
									<td>25</td>
								</tr>
								<tr>
									<td>6/15/18</td>
									<td>125</td>
									<td>10</td>
									<td>15</td>
								</tr>
								<tr>
									<td>5/15/18</td>
									<td>400</td>
									<td>100</td>
									<td>200</td>
								</tr>
								<tr>
									<td>5/15/18</td>
									<td>400</td>
									<td>100</td>
									<td>200</td>
								</tr>
								<tr>
									<td>5/15/18</td>
									<td>400</td>
									<td>100</td>
									<td>200</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- tab-content -->
			</div><!-- container -->
		</div><!-- col-12 -->
	</div><!-- edit_profile -->

<?php

include 'footer.php';

?>