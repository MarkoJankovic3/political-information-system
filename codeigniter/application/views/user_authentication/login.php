<div class="box-form">
    <div class="login-box" id="main">
        <h2>Sign in</h2>
        <div id="login">
        <?php echo validation_errors(); ?>

        <?php echo form_open('user_authentication/signin'); ?>
        <div class="user-box">
            <input type="email" name="email" />
            <label>Enter Email:</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" />
            <label>Enter Password:</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>

        <a href="<?php echo base_url() ?>index.php/user_authentication/register">Don't have an account?</a>

        <?php echo form_close(); ?>

       </div>
    </div>
</div>