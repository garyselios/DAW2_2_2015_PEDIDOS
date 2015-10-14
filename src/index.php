<?php
session_start();

class ClassAutoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($nomeClasse) {
        if(file_exists('Controller/' . $nomeClasse . '.php')){
            $pasta = 'Controller/';
        } elseif(file_exists('Model/' . $nomeClasse . '.php')) {
            $pasta = 'Model/';
        } elseif(file_exists('Dao/' . $nomeClasse . '.php')) {
            $pasta = 'Dao/';
        }
        
        include_once $pasta . $nomeClasse . '.php';
    }

}

new ClassAutoloader();

if(isset($_SESSION['user']) || isset($_SESSION['admin']) || isset($_SESSION['client'])){

    if (isset($_GET['Controller'])) {
        $controller = $_GET['Controller'];
    } else {
        $controller = 'SiteController';
    }

    if (isset($_GET['Action'])) {
        $action = $_GET['Action'];
    } else {
        $action = 'index';
    }
    
} elseif(isset ($_GET['Controller']) && $_GET['Controller'] == 'SiteController'){
    
    $controller = 'SiteController';
    
    if (isset($_GET['Action'])) {
        $action = $_GET['Action'];
    } else {
        $action = 'index';
    }
}  else {
    
    $controller = 'LoginController';
    $action = 'entrar';
    
}

$controller = new $controller();
$controller->$action();
