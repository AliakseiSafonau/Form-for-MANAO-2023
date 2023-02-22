<form class="form form_signup" name="form_signup" method="post" action="">
    <h3 class="form__title">Create account</h3>
    <p class="form_signup-login form__error">Please choose another login!</p>
    <p>
        <input type="text" class="form__input" name="login" placeholder="<?php
            echo $this -> controller -> model -> login
        ?>">
    </p>
    <p class="form_signup-email form__error">This email already has an account</p>
    <p>
        <input type="email" class="form__input" name="email" placeholder="<?php
            echo $this -> controller -> model -> email
        ?>">
    </p>
    <p class="form_signup-password form__error">At least 6 characters, number and a letter
    </p>
    <p>
        <input type="password" class="form__input" name="password" placeholder="<?php
            echo $this -> controller -> model -> password
        ?>">
    </p>
    <p class="form_signup-confirm_password form__error">Password mismatch!</p>
    <p>
        <input type="password" class="form__input" name="confirm_password" placeholder="<?php
            echo $this -> controller -> model -> confirm_password
        ?>">
    </p>
    <p class="form_signup-name form__error">Minimum 2 characters, letters only</p>
    <p>
        <input type="text" class="form__input" name="name" placeholder="<?php
            echo $this -> controller -> model -> name
        ?>">
    </p>
    <p>
        <button type="submit" class="form__btn form__btn_signup">
            <?php echo $this -> controller -> model -> btn_registration?>
        </button>
    </p>
</form>