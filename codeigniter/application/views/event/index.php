<!-- List all events -->


<div>
	<?php if(!empty($events)){
		foreach($events as $row) { ?>

            
            <h5><?php echo $row["name"]; ?></h5>
            <h6> Date: <?php echo $row["date"]; ?></h6>
            <p><?php echo $row["location"]; ?></p>
            <a href="<?php echo base_url() ?>index.php/event/join" class="btn btn-warning">Join event</a>

            <a href="<?php echo base_url() ?>index.php/event/edit/<?php echo $row['eventid']; ?>"class="btn btn-warning">Edit event</a>

            <a href="<?php echo base_url() ?>index.php/event/deleteEvent/<?php echo $row['eventid']; ?>"class="btn btn-warning">Delete event</a>

	<?php } } else { ?>
		<p>Events not found...</p>
	<?php } ?>
</div>

<a href="<?php echo base_url() ?>index.php/event/create">Create New Event</a>

