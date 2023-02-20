<form class="form form_signup" name="form_signup" method="post" action="">
    <h3 class="form__title">Create account</h3>
    <p>
        <input type="text" class="form__input" name="login" placeholder="<?php
            echo $this -> controller -> model -> login
        ?>">
    </p>
    <p>
        <input type="email" class="form__input" name="email" placeholder="<?php
            echo $this -> controller -> model -> email
        ?>">
    </p>
    <p>
        <input type="password" class="form__input" name="password" placeholder="<?php
            echo $this -> controller -> model -> password
        ?>">
    </p>
    <p>
        <input type="password" class="form__input" name="confirm_password" placeholder="<?php
            echo $this -> controller -> model -> confirm_password
        ?>">
    </p>
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