<?php

session_start();

class ClassAutoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($nomeClasse) {
        if (file_exists('Controller/' . $nomeClasse . '.php')) {
            $pasta = 'Controller/';
        } elseif (file_exists('Model/' . $nomeClasse . '.php')) {
            $pasta = 'Model/';
        } elseif (file_exists('Dao/' . $nomeClasse . '.php')) {
            $pasta = 'Dao/';
        }

        include_once $pasta . $nomeClasse . '.php';
    }

}

new ClassAutoloader();


if (isset($_GET['Controller']) && $_GET['Controller'] == 'LoginController') {
    $controller = 'LoginController';
    $action = $_GET['Action'];
} elseif (isset($_SESSION['usuario'])) {

    switch ($_SESSION['usuario']) {

        case $_SESSION['usuario'][0]['tipo'] == 'ADMIN':

            if (isset($_GET['Controller'])) {
                $controller = $_GET['Controller'];
            } else {
                $controller = 'UsuarioController';
            }

            if (isset($_GET['Action'])) {
                $action = $_GET['Action'];
            } else {
                $action = 'index';
            }
            break;
            
        case $_SESSION['usuario'][0]['tipo'] == 'USER':

            if (isset($_GET['Controller']) && $_GET['Controller'] != 'UsuarioControler') {
                echo 'Usted no tiene permiso para entrar a este sitio <br>';
                $controller = 'SiteController';
                $action = 'index';
            }

            $controller = 'UsuarioController';


            if (isset($_GET['Action'])) {
                $action = $_GET['Action'];
            } else {
                $action = 'index';
            }
            break;
            
        case $_SESSION['usuario'][0]['tipo'] == 'CLIENT':

            if (isset($_GET['Controller']) && $_GET['Controller'] != 'SiteControler') {
                echo 'Usted no tiene permiso para entrar a este sitio <br>';
                $controller = 'SiteController';
                $action = 'index';
            }

            $controller = 'SiteController';

            if (isset($_GET['Action'])) {
                $action = $_GET['Action'];
            } else {
                $action = 'index';
            }
            break;
    }

    //var_dump($_SESSION['usuario']);
} elseif (isset($_GET['Controller']) && $_GET['Controller'] != 'SiteController') {
   
    echo 'Usted no tiene permiso para entrar a este sitio <br>';
    $controller = 'SiteController';
    $action = 'index';
    
} else {

    $controller = 'SiteController';
    
    if (isset($_GET['Action'])) {
        $action = $_GET['Action'];
    } else {
        $action = 'index';
    }
}

$controller = new $controller();
$controller->$action();
