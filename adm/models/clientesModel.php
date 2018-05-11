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

        public function consultarCliente($cod) {

            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM clientes WHERE idCliente = ".$cod.";";
            $this -> resultado = $conn -> query($sql);

        }

        public function inserirCliente($arrayClientes) {

            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO clientes (nome, email, endereco, telefone) VALUES ('".$arrayClientes['nome']."', '".$arrayClientes['email']."', 
                '".$arrayClientes['endereco']."', '".$arrayClientes['telefone']."');";
            $conn -> query($sql);
            $this -> resultado = $conn -> insert_id;
        }

        public function atualizarCliente($arrayClientes) {

            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "UPDATE clientes set nome='".$arrayClientes['nome']."', email='".$arrayClientes['email']."',
                endereco='".$arrayClientes['endereco']."', telefone='".$arrayClientes['telefone']."' WHERE idCliente=".$arrayClientes['id'].";";
            $this -> resultado = $conn -> query($sql);
        }

        public function apagarCliente($cod) {

            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM clientes WHERE idCliente = '".$cod."';";
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }

?>