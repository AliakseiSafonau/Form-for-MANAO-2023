<?php 

    require_once $_SERVER['DOCUMENT_ROOT'].'/autoload.php';
    
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
        } else {
            $name = 'Guest';
        }
        require_once $_SERVER['DOCUMENT_ROOT'].'/FormModule/View/echostartpage.php';
    }