<!-- List all parties -->

<div>
	<?php if(!empty($parties)){
		foreach($parties as $row) { ?>

            
            <h5><?php echo $row["name"]; ?></h5>
            <h6> Date: <?php echo $row["date_of_foundation"]; ?></h6>
            <p><?php echo $row["party_organization"]; ?></p>
            <a href="<?php echo site_url("party/view/".$row['party_organization']); ?>" class="btn btn-warning">Enter</a>

	<?php } } else { ?>
		<p>Parties not found...</p>
	<?php } ?>
</div>
