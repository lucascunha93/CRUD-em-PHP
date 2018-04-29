<?php

    class clientController {

        function __construct() {
            require_once ("models/clientesModel.php");
        }

        public function cadastrarCliente(){
            require_once ("views/header.php");
            require_once ("views/cliente/cadastroCliente.php");
            require_once ("views/footer.php");
        }

        public function mostrarDadosForm() {
            $cliente = array(

                "nome" => $_POST['nome'],
                "sobrenome" => $_POST['sobrenome'],
                "genero" => $_POST['genero'],
                "endereco" => $_POST['endereco'],
                "email" => $_POST['email'],
                "senha" => $_POST['senha'],
                "cidade" => $_POST['cidade'],
                "estado" => $_POST['estado'],
                "telefone" => $_POST['telefone'],
                "texto" => $_POST['texto'],

            );

            require_once ("views/header.php");
            require_once ("views/cliente/mostraDadosForm.php");
            require_once ("views/footer.php");

        }

        public function listarClientes(){

                $cliente = new clientesModel();
                $cliente -> listaClientes();
                $resultado = $cliente -> getConsulta();

                $arrayClientes = array();

                while($linha = $resultado -> fetch_assoc()){
                    array_push($arrayClientes,$linha);
                }
                require_once ("views/header.php");
                require_once ("views/cliente/listaClientes.php");
                require_once ("views/footer.php");
        }
    }
?>