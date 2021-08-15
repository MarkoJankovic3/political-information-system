<!-- List all events -->


<div>
	<?php if(!empty($events)){
		foreach($events as $row) { ?>

        	<h5><?php echo $row["name"]; ?></h5>
        	
            <a href="<?php echo base_url() ?>index.php/event/view/<?php echo $row['eventid']; ?>"class="btn btn-warning">View event</a>

	<?php } } else { ?>
		<p>Events not found...</p>
	<?php } ?>
</div>

<a href="<?php echo base_url() ?>index.php/event/create">Create New Event</a>

