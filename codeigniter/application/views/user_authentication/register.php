<div class="box-form">
    <div class="login-box" id="main">
        <h2>Sign up</h2>
        <div id="login">
        <?php echo validation_errors(); ?>

        <?php echo form_open('user_authentication/signup'); ?>
        <div class="user-box">
            <input type="text" class="form-control" name="first_name">
            <label>First Name</label>
        </div>
        <div class="user-box">
            <input type="text" class="form-control" name="last_name">
            <label>Last Name</label>
        </div>
        <div class="user-box">
            <input type="email" class="form-control" name="email">
            <label>Email Address</label>
        </div>
        <div class="user-box">
            <input type="password" class="form-control" name="password"">
            <label>Password</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>

        <a href="<?php echo base_url() ?>index.php/user_authentication/login">Already have and account?</a>
        
        <?php echo form_close(); ?>