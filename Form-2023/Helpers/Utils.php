<?php

namespace Helpers;

class Utils {
    public function getCookie($data) {
        $result = 'not';
        if (isset($_COOKIE[$data]))  $result = $_COOKIE[$data];
        return $result;
    }

    public function setCookie($data) {
        setcookie($data['name'], $data['title']);
    }

    public function cleanCookie($data) {
        unset($_COOKIE[$data]);
    }
}