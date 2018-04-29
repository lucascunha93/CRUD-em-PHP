<?php

    class mainController {

        public function index(){

            if (!isset($_SESSION["User"])) {
                header("Location: index.php?c=m&a=l");
            }
            else {
            require_once ("views/header.php");
            require_once ("views/home.php");
            require_once ("views/footer.php");
            }
        }

        public function login(){
            require_once("views/security/login.php");
        }
        
        public function sessionOff() {
            session_destroy();
            header("Location: ../index.php");
        }
    }
?>