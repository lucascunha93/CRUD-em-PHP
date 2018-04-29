<?php

    class userModel{

        var $resultado;
        
        public function consultalogin($login){

            require_once("db/conexaoClass.php");
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $sql = "SELECT * FROM login WHERE email='".$login."'";
            print($sql);
            $conn = $Oconn -> getconn();
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }

?>