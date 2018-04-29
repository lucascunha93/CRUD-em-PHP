<?php

    class userController { 


        public function consultaLoginUser(){
            $login = $_POST["email"];
            require("models/userModel.php");
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
                     print("Senha incorreta");
                 }
            }
            else {
                print("Usuário não cadastrado");
            }
        }
    }
?>