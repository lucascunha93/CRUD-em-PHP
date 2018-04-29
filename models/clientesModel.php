<?php
    class clientesModel{

        public function __construct(){
            
            require_once("db/conexaoClass.php");
        }
        
        public function listaClientes(){

            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT * FROM clientes';
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }
?>