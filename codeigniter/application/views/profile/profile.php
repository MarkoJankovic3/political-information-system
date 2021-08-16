<div class="bg-overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Profile</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-6 d-flex align-items-stretch card special-card">
									<div class="contact-wrap w-100 p-md-5 p-4 py-5">
										<h3 class="mb-4 text-primary">Profile info</h3>
										<div id="form-message-warning" class="mb-4"></div>
										<div class="row">
										<?php if(!empty($profile)){ ?>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">First Name: <?php echo $profile['first_name']; ?></h5>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Last Name: <?php echo $profile['last_name']; ?></h5>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Date of Birth: <?php echo $profile['date_of_birth']; ?></h5>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Address : <?php echo $profile['address']; ?></h5>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Email : <?php echo $profile['email']; ?></h5>
													
												</div>
											</div>

											<?php } else { ?>
												<p>Profile not found...</p>
											<?php } ?>
											<div class="col-md-12">
												<div class="form-group">
													<a href="<?php echo base_url() ?>index.php/profile/editForm" class="btn btn-primary">Edit account </a>
												</div>
											</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>