<h1>Register</h1>
<?php echo validation_errors(); ?>

<?php echo form_open('profile/edit'); ?>
<div class="form-group">
    <label><h6>First Name</h6></label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name">
</div>

<div class="form-group">
    <label><h6>Last Name</h6></label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
</div>

<div class="form-group">
    <label><h6>Date of Birth</h6></label>
    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
</div>

<div class="form-group">
    <label><h6>Address</h6></label>
    <input type="text" class="form-control" name="address" placeholder="Address">
</div>

<div class="form-group">
    <label><h6>Email Address</h6></label>
    <input type="email" class="form-control" name="email" placeholder="Email Address">
</div>

<button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>

<a href="<?php echo base_url() ?>index.php/user_authentication/login">Already have and account?</a>
<?php echo form_close(); ?>