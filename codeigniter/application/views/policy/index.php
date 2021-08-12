<!-- List all policies -->

<div>
	<?php if(!empty($policies)){
		foreach($policies as $row) { ?>

            
            <h5><?php echo $row["name"]; ?></h5>
            <h6> Date: <?php echo $row["type"]; ?></h6>
            <p><?php echo $row["characteristics"]; ?></p>

	<?php } } else { ?>
		<p>Policies not found...</p>
	<?php } ?>
</div>