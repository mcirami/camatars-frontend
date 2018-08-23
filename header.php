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
        <link rel="stylesheet" href="<?php echo $webroot; ?>css/main.min.css">
        <script type="text/javascript" src="<?php echo $webroot; ?>js/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo $webroot; ?>js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $webroot; ?>js/built.min.js"></script>
        <link rel="icon" type="image/x-icon" href="<?php echo $webroot; ?>favicon.ico" />

    </head>

    <body>
		<header>
			<div class="row">
				<div class="container">
					<div class="row no-gutters d-flex justify-content-between pt-5 pb-5">
						<div class="col-3 align-self-start">
							<img src="images/logo.png" alt="">
						</div>
						<a href="#" class="text-uppercase btn btn-lg black align-self-center">Join Now</a>
					</div>
				</div>
			</div>
			<div class="row header_nav">
				<div class="container">
					<nav class="nav nav-justified">
						<a class="nav-link text-uppercase light_gray" href="#">All Models</a>
						<a class="nav-link text-uppercase dark_gray" href="#">Followed Models</a>
						<a class="nav-link text-uppercase blue" href="#">Become A Model</a>
						<a class="nav-link text-uppercase align-self-end ml-auto orange text-center" href="#">
                            <p>(You have 250 tokens</p>
                            Buy Tokens
                        </a>
					</nav>
				</div>
			</div>

		</header>



