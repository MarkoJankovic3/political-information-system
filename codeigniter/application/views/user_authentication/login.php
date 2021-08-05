<h1>Login</h1>
<?php echo validation_errors(); ?>

<?php echo form_open('user_authentication/signin'); ?>

<div>
    <p>Enter Email:</p>
    <input type="email" name="email" placeholder="Enter Email" />
</div>
<div>
    <p>Enter Password:</p>
    <input type="password" name="password" placeholder="Enter Password" />
</div>
<button type="submit" class="btn" name="submit">Login</button>

<?php echo form_close(); ?>