<?php

    require_once './Helpers/autoload.php';
    require './index.php';
    $formModel = new FormModule\Model\FormModel;
    $phpFormController = new FormModule\Controller\PHPFormController($formModel);
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
        echo json_encode($phpFormController -> validateForm($_POST['login']));
    }
   
?>