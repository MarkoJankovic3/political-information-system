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
										<h3 class="mb-4 text-primary">Party info</h3>
										<div id="form-message-warning" class="mb-4"></div>
										<div class="row">
										<?php if(!empty($party)){ ?>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Name: <?php echo $party['name']; ?></h5>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Abbreviation: <?php echo $party['party_organization']; ?></h5>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Date of Foundation: <?php echo $party['date_of_foundation']; ?></h5>
												</div>
											</div>

											<?php } else { ?>
												<p><?php echo $party['party_organization']?> not found...</p>
											<?php } ?>
											<div class="col-md-12">
												<div class="form-group">
													<a href="<?php echo base_url() ?>index.php/party/joinParty/<?php echo $party['ppid']; ?>"class="btn btn-primary">Join party</a>
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