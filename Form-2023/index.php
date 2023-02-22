<?php
    require_once './Helpers/autoload.php';

    $utils = new Helpers\Utils;
    
    $formModel = new FormModule\Model\FormModel;
    $phpFormController = new FormModule\Controller\PHPFormController($formModel);
    $formView = new FormModule\View\FormView($phpFormController);
    if (isset($_POST) && ('POST' == $_SERVER['REQUEST_METHOD'])) {
        $data = json_decode(file_get_contents('php://input'), true);
        $output_data = $phpFormController -> validateForm($data);
        echo json_encode($output_data);
    } else {
        if (isset($_COOKIE['PHPSESSID'])) {
            header('Location: http://localhost/startpage.php');
            exit;
        } else {
            $formView -> render();
        }
    }