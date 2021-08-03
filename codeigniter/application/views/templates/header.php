<!DOCTYPE html>
<html>
<head>
	<title>Political Information System</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tooplate-gymso-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/contact_page.css">
</head>
<body>

	<!-- NAVBAR -->

	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('pages/home'); ?>" class="nav-link smoothScroll">Home</a>
                    </li>
					<li class="nav-item">
				        <a href="<?php echo site_url('pages/elections'); ?>" class="nav-link smoothScroll">Elections</a>
					</li>
					<li class="nav-item">
                        <a href="<?php echo site_url('pages/party'); ?>" class="nav-link smoothScroll">Party</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('pages/policy'); ?>" class="nav-link smoothScroll">Policy</a>
                    </li>
                    <li class="nav-item">
                    	<a href="<?php echo site_url('user_authentication/register'); ?>" class="nav-link smoothScroll">Login/Register</a>
                    </li>
                </ul>
            </div>
		</div>
	</nav>