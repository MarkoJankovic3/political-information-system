<div class="menu-box d-flex flex-column justify-content-center align-items-center">

<!-- List all policies -->

<div class="row col-lg-12">
	<?php if(!empty($policies)){
		foreach($policies as $row) { ?>
			<div class="card mb-3 special-card" style="margin-left: 50px; max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body text-primary">
							<h5 class="card-title"><?php echo $row["name"]; ?></h5>
							<p class="card-text text-white"><?php echo $row["characteristics"]; ?></p>
							<a href="<?php echo $row['url'] ?>" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>
			</div>

	<?php } } else { ?>
		<p>Policies not found...</p>
	<?php } ?>
</div>
</div>