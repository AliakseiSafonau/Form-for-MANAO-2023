<?php 

    require_once './Helpers/autoload.php';

    if (isset($_POST) && ('POST' == $_SERVER['REQUEST_METHOD'])) {
        $utils = new Helpers\Utils;
        unset($_COOKIE['PHPSESSID']);
        setcookie('PHPSESSID', null, -1, '/');
        unset($_COOKIE['name']);
        setcookie('name', null, -1, '/');
        echo json_encode(['result' => 'exit']);
    } else {
        $name = '';
        $utils = new Helpers\Utils;
        if ($utils -> getCookie('PHPSESSID') !== 'not') {
            $name = $utils -> getCookie('name');
        }
        require_once './FormModule/View/echostartpage.php';
    }