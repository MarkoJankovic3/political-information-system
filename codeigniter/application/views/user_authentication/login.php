
<?php echo form_open('user_authentication/login'); ?>
<div class="base-container">
    <div class="main center">
        <div class="box center">
            <div class="icon center">
                <i class="far fa-user fa-2x"></i>
            </div>
            <h1>Login</h1>
            <div>
                <p>Enter Email:</p>
                <input type="email" name="" id="" placeholder="Enter Email" />
            </div>
            <div>
                <p>Enter Password:</p>
                <input type="password" name="" id="" placeholder="Enter Password" />
            </div>
            <button type="submit" class="btn">Login</button>
        </div>
    </div>
</div>

<?php echo form_close(); ?>