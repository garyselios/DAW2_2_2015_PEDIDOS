<?php

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

$controller = new $controller();
$controller->$action();
