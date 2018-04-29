<?php

    class clientController {

        function __construct() {
            require_once ("models/clientesModel.php");
        }

        public function cadastrarCliente(){

            require_once ("views/header.php");
            require_once ("views/clientes/cadastroCliente.php");
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
                require_once ("views/clientes/listaClientes.php");
                require_once ("views/footer.php");
        }

        public function inserirCliente() {

            $arrayClientes["nome"] = $_POST["nome"];
            $arrayClientes["endereco"] = $_POST["endereco"];
            $arrayClientes["telefone"] = $_POST["telefone"];
            $arrayClientes["email"] = $_POST["email"];
            $cliente = new clientesModel();
            $cliente -> inserirCliente($arrayClientes);
            $this -> listarClientes();
        }

        public function alterarCliente($cod) {
            $cliente = new clientesModel();
            $cliente -> consultarCliente($cod);
            $resultado = $cliente -> getConsulta();

            if( $arrayClientes = $resultado -> fetch_assoc()) {
                require_once ("views/header.php");
                require_once ("views/clientes/alterarCliente.php");
                require_once ("views/footer.php");
            }
        }

        public function atualizarCliente() {

            $arrayClientes["id"] = $_POST["id"];
            $arrayClientes["nome"] = $_POST["nome"];
            $arrayClientes["endereco"] = $_POST["endereco"];
            $arrayClientes["telefone"] = $_POST["telefone"];
            $arrayClientes["email"] = $_POST["email"];
            $cliente = new clientesModel();
            $cliente -> atualizarCliente( $arrayClientes );
            $this -> listarClientes();

        }

        public function deletarCliente($cod) {
            $cliente = new clientesModel();
            $cliente -> apagarCliente($cod);
            $this -> listarClientes();
        }
    }
?>