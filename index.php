<?php
    if(!isset($_GET['c'])){
        require_once("controllers/main.php");
        $site = new mainController();
        $site -> index();
    }
    else {
        switch ($_REQUEST['c']) {
            
            case 'm': // controller main
                require_once("controllers/main.php");
                $main = new mainController();

                if (!isset($_GET['a'])) {
                    $main -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'i': $main -> index(); break;
                    }
                }
            break;

            case 'c': // controller client
                require_once("controllers/client.php");
                $cliente = new clientController();

                if (!isset($_GET['a'])) {
                    $cliente -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'lc': $cliente -> listarClientes(); break;
                        case 'c': $cliente -> cadastrarCliente(); break;
                        case 'm': $cliente -> mostrarDadosForm(); break;
                    }
                }
            break;
        }
    }
?>