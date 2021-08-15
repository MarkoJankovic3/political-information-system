<h1>Create new event</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('event/createEvent'); ?>
<div class="form-group">
    <label><h6>Name of the event</h6></label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
</div>

<div class="form-group">
    <label><h6>Date of the event</h6></label>
    <input type="date" class="form-control" name="date" placeholder="Select Date">
</div>

<div class="form-group">
    <label><h6>Location</h6></label>
    <input type="text" class="form-control" name="location" placeholder="Enter the location">
</div>

<button type="submit" class="btn btn-primary btn-block" name="submit">Create event</button>

<?php echo form_close(); ?>