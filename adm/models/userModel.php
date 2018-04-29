<?php

    class userModel{

        var $resultado;

        public function __construct() {
            require_once ("db/conexaoClass.php");
        }
        
        public function consultalogin($login){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $sql = "SELECT * FROM usuario WHERE email='".$login."'";
            $conn = $Oconn -> getconn();
            $this -> resultado = $conn -> query($sql);
        }

        public function inserirUsuario($arrayUsuario) {
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            print("VEIO ATÉ AQUI O MERDA");
            $sql = "INSERT INTO usuario (nome, email, senha, endereco, telefone) VALUES ('".$arrayUsuario['nome']."', '".$arrayUsuario['email']."', 
            '".$arrayUsuario['senha']."', '".$arrayUsuario['endereco']."',  '".$arrayUsuario['telefone']."');";
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }

?>