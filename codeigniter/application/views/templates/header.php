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

                    <?php if($this->session->userdata('logged_in') == true) { ?>
	                    <li class="nav-item">
	                        <a href="<?php echo site_url('event/index'); ?>" class="nav-link smoothScroll">Events</a>
	                    </li>

						<li class="nav-item">
					        <a href="<?php echo site_url('pages/elections'); ?>" class="nav-link smoothScroll">Elections</a>
						</li>
						<li class="nav-item">
	                        <a href="<?php echo site_url('party/index'); ?>" class="nav-link smoothScroll">Party</a>
	                    </li>

	                    <li class="nav-item">
	                        <a href="<?php echo site_url('policy/index'); ?>" class="nav-link smoothScroll">Policy</a>
	                    </li>

	                    <li class="nav-item">
	                        <a href="<?php echo site_url('profile/index'); ?>" class="nav-link smoothScroll">Profile</a>
	                    </li>

	                    <li class="nav-item">
	                    	<a href="<?php echo base_url() ?>index.php/user_authentication/signout" class="nav-link smoothScroll">Signout</a>
	                    </li>
	                <?php } else { ?>
                    	<li class="nav-item">
                    		<a href="<?php echo site_url('user_authentication/register'); ?>" class="nav-link smoothScroll">Login/Register</a>
                    	</li>
                    <?php } ?>
                </ul>
            </div>
		</div>
	</nav>