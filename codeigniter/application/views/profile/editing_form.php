<h1>Profile</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('profile/edit'); ?>
<div class="form-group">
    <label><h6>First Name</h6></label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name" value = "<?php echo $profile['first_name']?>">
</div>

<div class="form-group">
    <label><h6>Last Name</h6></label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value = "<?php echo $profile['last_name']?>">
</div>

<div class="form-group">
    <label><h6>Date of Birth</h6></label>
    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth" value = "<?php echo $profile['date_of_birth']?>">
</div>

<div class="form-group">
    <label><h6>Address</h6></label>
    <input type="text" class="form-control" name="address" placeholder="Address" value = "<?php echo $profile['address']?>">
</div>

<div class="form-group">
    <label><h6>Email Address</h6></label>
    <input type="email" class="form-control" name="email" placeholder="Email Address" value = "<?php echo $profile['email']?>">
</div>

<button type="submit" class="btn btn-primary btn-block" name="submit">Save changes</button>

<?php echo form_close(); ?>