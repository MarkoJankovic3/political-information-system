<h1>Register</h1>
            <?php
            echo "<div class='error_msg'>";
                echo validation_errors();
            echo "</div>";

            echo form_open('user_authentication/signup');
            echo "<div>";
            echo form_input('username');
            echo "<div class='error_msg'>";

            if (isset($message_display)) {
                echo $message_display;
            }

            echo "</div>";
            echo "</div>";

            echo "<div>";
            $data = array(
            'type' => 'email',
            'name' => 'email_value'
            );
            echo form_input($data);
            echo "</div>";

            echo "<div>";
            echo form_password('password');
            echo "</div>";

            echo "<button class='btn' type='submit'>Register";
            echo "</button>";
            ?>
            <?php echo form_close(); ?>