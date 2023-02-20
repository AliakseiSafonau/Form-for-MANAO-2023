<?php

namespace Helpers;

class Utils {
    public function getCookie() {
        $result = 0;
        if (isset($_COOKIE["PHPSESSID"]))  $result = $_COOKIE["PHPSESSID"];
        return $result;
    }

    public function setCookie($data) {
        if (isset($_COOKIE["PHPSESSID"]))  $result = $_COOKIE["PHPSESSID"];
        return $result;
    }
}