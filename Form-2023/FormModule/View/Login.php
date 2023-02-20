<form class="form form_signin" name="form_signin" method="post" action="">
    <h3 class="form__title"><?php echo $this -> controller -> model -> btn_sign_in ?></h3>
    <p>
        <input type="text" class="form__input" name="login" placeholder="<?php
            echo $this -> controller -> model -> login
        ?>">
    </p>
    <p>
        <input type="password" class="form__input" name="password" placeholder="<?php
            echo $this -> controller -> model -> password
        ?>">
    </p>
    <p>
        <button type="submit" class="form__btn form__btn_signin">
            <?php 
                echo $this -> controller -> model -> btn_login
            ?>
        </button>
    </p>
</form>