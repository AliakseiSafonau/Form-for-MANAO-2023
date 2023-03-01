<form class="form form_signin" name="form_signin" method="post" action="">
    <h3 class="form__title"><?php echo $this -> controller -> model -> btn_sign_in ?></h3>
    <p class="form_signin-error form__error">Incorrect Login or Password!</p>
    <p>
        <input type="text" class="form__input" name="login" placeholder="<?php
            echo $this -> controller -> model -> login
        ?>" required> 
    </p>
    <p class="form__error"></p>
    <p>
        <input type="password" class="form__input" name="password" placeholder="<?php
            echo $this -> controller -> model -> password
        ?>" required>
    </p>
    <p class="form_signin-btn form__error">All fields must be filled</p>
    <p>
        <button type="submit" class="form__btn form__btn_signin">
            <?php 
                echo $this -> controller -> model -> btn_login
            ?>
        </button>
    </p>
</form>