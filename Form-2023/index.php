<?php
    require_once './Helpers/autoload.php';

    $utils = new Helpers\Utils;
    /*if ($utils -> getCookie()) {
        $controller->logIn();
    }*/

    
    $formModel = new FormModule\Model\FormModel;
    $phpFormController = new FormModule\Controller\PHPFormController($formModel);
    $formView = new FormModule\View\FormView($phpFormController);
    $formView -> render();
    
    
?>