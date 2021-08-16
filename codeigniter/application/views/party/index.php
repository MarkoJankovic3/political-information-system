<div class="menu-box d-flex flex-column justify-content-center align-items-center">

<!-- List all parties -->

<div class="row col-lg-12">
	<?php if(!empty($parties)){
		foreach($parties as $row) { ?>
			<div class="card mb-3 special-card" style="margin-left: 50px; max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body text-primary">
							<h5 class="card-title"><?php echo $row["name"]; ?></h5>
							<h6 class="card-subtitle mb-2 text-white"> Date: <?php echo $row["date_of_foundation"]; ?></h6>
							<p class="card-text text-white"><?php echo $row["party_organization"]; ?></p>

							<a href="<?php echo site_url("party/view/".$row['party_organization']); ?>" class="btn btn-primary">Enter</a>
						</div>
					</div>
				</div>
			</div>

	<?php } } else { ?>
		<p>Parties not found...</p>
	<?php } ?>
</div>
</div>
