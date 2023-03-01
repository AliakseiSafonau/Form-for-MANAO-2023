<form class="form form_signup" name="form_signup" method="post" action="">
    <h3 class="form__title">Create account</h3>
    <p class="form_signup-login form__error">Please choose another login!</p>
    <p>
        <input type="text" class="form__input" name="login" placeholder="<?php
            echo $this -> controller -> model -> login
        ?>" required>
    </p>
    <p class="form_signup-email form__error">This email already has an account</p>
    <p>
        <input type="email" class="form__input" name="email" placeholder="<?php
            echo $this -> controller -> model -> email
        ?>" required>
    </p>
    <p class="form_signup-password form__error">At least 6 characters, number and a letter
    </p>
    <p>
        <input type="password" class="form__input" name="password" placeholder="<?php
            echo $this -> controller -> model -> password
        ?>" required>
    </p>
    <p class="form_signup-confirm_password form__error">Password mismatch!</p>
    <p>
        <input type="password" class="form__input" name="confirm_password" placeholder="<?php
            echo $this -> controller -> model -> confirm_password
        ?>" required>
    </p>
    <p class="form_signup-name form__error">Minimum 2 characters, letters only</p>
    <p>
        <input type="text" class="form__input" name="name" placeholder="<?php
            echo $this -> controller -> model -> name
        ?>" required>
    </p>
    <p class="form_signup-btn form__error">All fields must be filled</p>
    <p>
        <button type="submit" class="form__btn form__btn_signup">
            <?php echo $this -> controller -> model -> btn_registration?>
        </button>
    </p>
</form>