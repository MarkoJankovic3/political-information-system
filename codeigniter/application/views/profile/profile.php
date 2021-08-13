<div>
	<?php if(!empty($profile)){ ?>

            <h5>First Name: <?php echo $profile['first_name']; ?></h5>
            <h5>Last Name: <?php echo $profile['last_name']; ?></h5>
            <h5>Date of Birth: <?php echo $profile['date_of_birth']; ?></h5>
            <h5>Address : <?php echo $profile['address']; ?></h5>
            <h5>Email : <?php echo $profile['email']; ?></h5>
            

            

	<?php } else { ?>
		<p>Parties not found...</p>
	<?php } ?>
</div>