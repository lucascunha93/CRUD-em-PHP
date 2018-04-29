<?php

    class userController { 

        function __construct() {
            require_once ("models/userModel.php");
        }

        public function consultaLoginUser(){
            $login = $_POST["email"];
            $user = new userModel();
            $user -> consultaLogin($login);
            $resultado = $user -> getConsulta();

            if ($line = $resultado -> fetch_assoc()) {
                $logou = $line['senha'];
                $passouUser = $_POST["senha"];

                if ($logou == $passouUser) {
                    $_SESSION['idUser'] = $line['id_cliente'];
                    $_SESSION['User'] = $line['email'];
                    header("Location: index.php?c=m&a=i");
                 }
                 else{
                     header("location: index.php?c=m&a=cu");
                 }
            }
            else {
                header("location: index.php?c=m&a=cu");
            }
        }

        public function cadastrarUsuario(){

            $arrayUsuario["nome"] = $_POST["nome"];
            $arrayUsuario["endereco"] = $_POST["endereco"];
            $arrayUsuario["senha"] = $_POST["senha"];
            $arrayUsuario["telefone"] = $_POST["telefone"];
            $arrayUsuario["email"] = $_POST["email"];
            $usuario = new userModel();
            $usuario -> inserirUsuario($arrayUsuario);
            header("location: index.php?c=m&a=l");
        }
    }
?>