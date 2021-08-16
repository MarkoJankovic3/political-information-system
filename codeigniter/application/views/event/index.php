<div class="menu-box d-flex flex-column justify-content-center align-items-center">

<!-- List all events -->

<a href="<?php echo base_url() ?>index.php/event/create" class="btn btn-primary">Create New Event</a>
<p></p>
<div class="row col-lg-10">
	<?php if(!empty($events)){
		foreach($events as $row) { ?>
			<div class="card mb-3 special-card" style="margin-left: 50px; max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body text-primary">
							<h5 class="card-title"><?php echo $row["name"]; ?></h5>
							<h6 class="card-subtitle mb-2 text-white"> Date: <?php echo $row["date"]; ?></h6>

							<a href="<?php echo base_url() ?>index.php/event/view/<?php echo $row['eventid']; ?>"class="btn btn-primary">View event</a>
						</div>
					</div>
				</div>
			</div>

	<?php } } else { ?>
		<p>Events not found...</p>
	<?php } ?>
</div>
</div>

