<h1>Edit event</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('event/editEvent/'.$event['eventid']); ?>
<div class="form-group">
    <label><h6>Name of the event</h6></label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $event['name']?>">
</div>

<div class="form-group">
    <label><h6>Date of the event</h6></label>
    <input type="date" class="form-control" name="date" placeholder="Select Date" value="<?php echo $event['date']?>">
</div>

<div class="form-group">
    <label><h6>Location</h6></label>
    <input type="text" class="form-control" name="location" placeholder="Enter the location" value="<?php echo $event['location']?>">
</div>

<button type="submit" class="btn btn-primary btn-block" name="submit">Edit event</button>

<?php echo form_close(); ?>