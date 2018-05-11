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
            $idCliente = $cliente -> getConsulta();

            // inicio de manipulação de imagem
                        
            $foto_temp = $_FILES["foto"]["tmp_name"];	//pega o caminho tempor�rio do arquivo
            $foto_name = $_FILES["foto"]["name"];		//pega o nome

            $extensao = str_replace('.','',strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name))); //seleciona a exten��o da imagem
            $max_width = 600; //define largura m�xima
            $max_height = 600; //define altura m�xima

            // Carrega a imagem 
            $img = null;

            //Transforma a imagem em JPG
            if ($extensao == 'jpg' || $extensao == 'jpeg') { 
                $img = @imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') { 
                $img = @imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') { 
                $img = @imagecreatefromgif($foto_temp); 
            }  else     
                $img = @imagecreatefromjpeg($foto_temp); 

            // Se a imagem foi carregada com sucesso, testa o tamanho da mesma
            if ($img) { 
                // Pega o tamanho da imagem e calcula propor��o de resize 
                $width  = imagesx($img); 
                $height = imagesy($img); 
                $scale  = min($max_width/$width, $max_height/$height); 
                // Se a imagem � maior que o permitido, encolhe ela! 
                if ($scale < 1) { 
                    $new_width = floor($scale*$width); 
                    $new_height = floor($scale*$height);
                    // Cria uma imagem tempor�ria 
                    $tmp_img = @imagecreatetruecolor($new_width, $new_height);
                    // Copia e resize a imagem velha na nova     
                    @imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                                    $new_width, $new_height, $width, $height);  
                    @imagedestroy($img); 
                    $img = $tmp_img; 
                }           
            }

            //cria imagem no diret�rio @imagejpeg($img,"diretorio/".$id_noticia) se j� tiver com este nome vai substituir
            @imagejpeg($img,"assets/imagens/clientes/".$idCliente.".jpg"); 

            // fim de manipulação de imagem
            
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