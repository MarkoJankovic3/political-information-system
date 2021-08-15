<h2><?php echo $event['name'];?></h2>
<p><?php echo $event['date'];?></p>
<p><?php echo $event['location'];?></p>

<a href="<?php echo base_url() ?>index.php/event/join/<?php echo $event['eventid']; ?>" class="btn btn-warning">Join event</a>


<a href="<?php echo base_url() ?>index.php/event/edit/<?php echo $event['eventid']; ?>"class="btn btn-warning">Edit event</a>

<a href="<?php echo base_url() ?>index.php/event/deleteEvent/<?php echo $event['eventid']; ?>"class="btn btn-warning">Delete event</a>