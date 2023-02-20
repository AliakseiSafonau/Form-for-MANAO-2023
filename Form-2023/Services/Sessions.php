<?php
    namespace Services;

    class DoSessions {
        public function sessionCreation() {
            session_start();
            header('Location: /startpage.php');
        }
    }
?>