<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/ASSETS/CSS/styles.css">
    <title>Form-2023</title>
</head>
<body>
    <div class="sign">
    <article class="container_sign">
        <div class="block">
            <section class="block__item block-item">
                <h2 class="block-item__title">
                    <?php echo $this -> controller -> model -> sign_up_question?>
                </h2>
                <button type="button" class="block-item__btn signin-btn">
                    <?php echo $this -> controller -> model -> btn_sign_in?>
                </button>
            </section>
            <section class="block__item block-item">
                <h2 class="block-item__title">
                    <?php echo $this -> controller -> model -> sign_in_question?>
                </h2>
                <button type="button" class="block-item__btn signup-btn">
                    <?php echo $this -> controller -> model -> btn_create_account?>
                </button>
            </section>
        </div>
        <div class="form-box">
            <?php
                require $_SERVER['DOCUMENT_ROOT'].'/FormModule/View/Login.php';
                require $_SERVER['DOCUMENT_ROOT'].'/FormModule/View/Registration.php';
            ?>
<script type="module" src="app.js"></script>
</body>
</html>
