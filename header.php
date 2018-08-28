<?php


    if($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
        $protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
        $webroot = $protocol . $_SERVER['HTTP_HOST'] . '/';
    } else {
        //$protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';
        $webroot = '';
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Camatars</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="<?php echo $webroot; ?>css/bootstrap/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo $webroot; ?>css/bootstrap/bootstrap-formhelpers.min.css">
        <link rel="stylesheet" href="<?php echo $webroot; ?>css/main.min.css">
        <script type="text/javascript" src="<?php echo $webroot; ?>js/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo $webroot; ?>js/bootstrap/bootstrap.min.js"></script>
	    <script type="text/javascript" src="<?php echo $webroot; ?>js/bootstrap/bootstrap-formhelpers.min.js"></script>
	    <script type="text/javascript" src="<?php echo $webroot; ?>js/bootstrap/bootstrap-birthday.min.js"></script>
        <script type="text/javascript" src="<?php echo $webroot; ?>js/built.min.js"></script>
        <link rel="icon" type="image/x-icon" href="<?php echo $webroot; ?>favicon.ico" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
		<header>
			<div class="row no-gutters">
				<div class="container">

					<div class="row no-gutters d-flex justify-content-center justify-content-md-between pt-3 pb-3 pt-md-5 pb-md-5">
						<div class="col-8 col-md-3 align-self-center align-self-md-start text-center">
							<a href="/"><img class="mx-auto float-none" src="images/logo.png" alt=""></a>
						</div>
						<!-- LOGGED OUT -->
						<div class="col-12 col-md-9 mt-4 mt-md-0 text-center text-md-right">
							<div class="row no-gutters">
								<a data-toggle="modal" href="#loginModal" class="mb-2 text-uppercase login ml-auto">Login</a>
							</div>
							<div class="row no-gutters">
								<a data-toggle="modal" href="#joinNowModal" class="text-uppercase btn btn-lg black align-self-center d-inline-block ml-md-auto">Join Now</a>
							</div>
						</div>
						<!-- LOGGED OUT -->

						<!-- LOGGED IN -->
						<div class="d-none col-12 col-md-9 align-self-end user_info mt-4 mt-md-0">
							<p class="text-center text-md-right">Welcome, <span>jasmine kate</span></p>
							<ul class="nav justify-content-center justify-content-md-end mt-2 mt-lg-4">
								<li class="nav-item">
									<a class="nav-link" href="#">Edit Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Upgrade</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn transparent" href="#">Logout</a>
								</li>
							</ul>
						</div>
						<!-- LOGGED IN -->

					</div>


				</div>
			</div>
			<div class="row header_nav">
				<div class="container">
					<nav class="nav navbar-expand-md pt-3 pt-md-0 pb-3 pb-md-0">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<img src="images/menu-icon.png" alt="">
							</span>
						</button>
						<div class="collapse navbar-collapse" id="navbarLinks">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link text-uppercase light_gray" href="#">All Models</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-uppercase dark_gray" href="#">Followed Models</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-uppercase blue" href="#">Become A Model</a>
								</li>
								<li class="nav-item align-self-sm-center align-self-md-end ml-0 ml-md-auto mt-3 mt-md-0">
									<a class="nav-link text-uppercase orange text-center" href="#">
										<p>(You have 250 tokens</p>
										Buy Tokens
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>

		</header>

		<!-- JOIN NOW MODAL -->
		<div class="modal fade" id="joinNowModal" tabindex="-1" role="dialog" aria-labelledby="joinNowModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="joinNowModalLabel">Create Your Free Account</h5>
						<p>You must be over 18 years old to register</p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						    <span aria-hidden="true">
                                <img src="images/close-button.png" alt="">
                            </span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputUsername">Username: <sup>*</sup></label>
									<input type="text" class="form-control" id="inputUsername">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword">Password: <sup>*</sup></label>
									<input type="password" class="form-control" id="inputPassword">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail">Email address:</label>
									<input type="text" class="form-control" id="inputEmail">
								</div>
								<div class="form-group col-md-6">
									<label for="inputCell">Cell Phone:</label>
									<input type="text" class="form-control" id="inputCell">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 birthday_select">
									<label for="inputBirthday">Birthday: <sup>*</sup></label>
									<div id="birthday_select"></div>
								</div>
								<div class="form-group col-md-6 gender">
									<label for="inputGender">Gender</label>
									<select id="inputGender" class="form-control">
										<option></option>
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="6LcEF2wUAAAAAO2_HLRdMFIhcnJVY25ASf4JQFTt"></div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="agreeCheck">
									<label class="form-check-label" for="agreeCheck">
										I have read and agree to the <a href="#">terms and conditions</a> and
										<a href="#">privacy policy</a>
									</label>
								</div>
							</div>
							<button type="submit" class="btn orange">Join For Free</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- JOIN NOW MODAL -->

		<!-- LOGIN MODAL -->

		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="logineModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="joinNowModalLabel">Login</h5>
						<p>Please sign in using the form below</p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						    <span aria-hidden="true">
                                <img src="images/close-button.png" alt="">
                            </span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="loginUsername">Username: <sup>*</sup></label>
								<input type="text" class="form-control" id="loginUsername">
							</div>
							<div class="form-group">
								<label for="inputPassword1">Password: <sup>*</sup></label>
								<input type="password" class="form-control" id="inputPassword1">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="keepCheck">
								<label class="form-check-label" for="keepCheck">Keep me logged in.</label>
							</div>
							<button type="submit" class="btn orange">Login</button>
							<div class="form_row mt-4 mb-2">
								<a href="#">Create Free Account</a>
							</div>
							<div class="form_row">
								<a href="#">Forgot password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- LOGIN MODAL -->

		<div class="row page_wrapper"> <!-- closes in footer -->
			<div class="col-12"><!-- closes in footer -->