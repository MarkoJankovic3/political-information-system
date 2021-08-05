<h1>Register</h1>
<?php echo validation_errors(); ?>

<?php echo form_open('user_authentication/signup'); ?>
<div class="form-group">
    <label><h6>First Name</h6></label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name">
</div>

<div class="form-group">
    <label><h6>Last Name</h6></label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
</div>

<div class="form-group">
    <label><h6>Email Address</h6></label>
    <input type="email" class="form-control" name="email" placeholder="Email Address">
</div>

<div class="form-group">
    <label><h6>Password</h6></label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
<?php echo form_close(); ?>