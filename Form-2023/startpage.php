<?php 
    //echo 'Hello, ' . $_COOKIE["PHPSESSID"] . '<br>';
    preg_match('/^[a-zA-Z0-9_]{6,}/',  'AliakseiSafonau', $matches, PREG_OFFSET_CAPTURE);
    if(!empty($matches)) {
        var_dump($matches);
    }
    