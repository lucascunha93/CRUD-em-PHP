<?php
header('Content-Type: text/html; charset=utf-8');

session_start();

    if(!isset($_GET['c'])){
        require_once("controllers/main.php");
        $site = new mainController();
        $site -> index();
    }
    else {
        switch ($_REQUEST['c']) {
            case 'u': // controler user
                require_once('controllers/user.php');
                $user = new userController();

                if (!isset($_GET['a'])) {
                    print("Erro");
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'cl': $user -> consultaLoginUser(); break;
                        case 'cu': $user -> cadastrarUsuario(); break;
                    }
                }
            break;
            
            case 'm': // controller main
                require_once("controllers/main.php");
                $main = new mainController();

                if (!isset($_GET['a'])) {
                    $main -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'i': $main -> index(); break;
                        case 'cu': $main -> cadastroUsuario(); break;
                        case 'l': $main -> login(); break;
                        case 'off': $main -> sessionOff(); break;
                    }
                }
            break;

            case 'c': // controller cliente
                require_once("controllers/client.php");
                $cliente = new clientController();

                if (!isset($_GET['a'])) {
                    $cliente -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'lc': $cliente -> listarClientes(); break;
                        case 'cc': $cliente -> cadastrarCliente(); break;
                        case 'ic': $cliente -> inserirCliente(); break;
                        case 'ac': $cod=$_GET['id']; $cliente -> alterarCliente($cod); break;
                        case 'atc': $cliente -> atualizarCliente(); break;
                        case 'dc': $cod=$_GET['id']; $cliente -> deletarCliente($cod); break; 
                    }
                }
            break;
        }
    }
?>