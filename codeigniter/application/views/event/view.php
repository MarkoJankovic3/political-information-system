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
										<h3 class="mb-4 text-primary">Event info</h3>
										<div id="form-message-warning" class="mb-4"></div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Name: <?php echo $event['name'];?></h5>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Date: <?php echo $event['date'];?></h5>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h5 class="card-text text-white">Location: <?php echo $event['location'];?></h5>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<a href="<?php echo base_url() ?>index.php/event/join/<?php echo $event['eventid']; ?>" class="btn btn-warning">Join event</a>

													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<a href="<?php echo base_url() ?>index.php/event/edit/<?php echo $event['eventid']; ?>"class="btn btn-primary">Edit event</a>
													
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<a href="<?php echo base_url() ?>index.php/event/deleteEvent/<?php echo $event['eventid']; ?>"class="btn btn-danger">Delete event</a>
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