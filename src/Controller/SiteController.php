<?php

class SiteController{

    public function index() {

    include 'View/Site/Home.php';
    }

    public function inserir() {

        if (isset($_POST['submit'])) {

            $objClienteModel = new ClienteModel();

            $objClienteModel->setNombre($_POST['nombre']);
            $objClienteModel->setUsername($_POST['username']);
            $objClienteModel->setEmail($_POST['email']);
            $objClienteModel->setSenha($_POST['contrasena']);
            $objClienteModel->setTipoUsuario(3);

            if ($objClienteModel->insertarCliente()) {
                $msg = "ok";
            } else {
                $msg = "problem";
            }
        }
        include 'View/Client/RegistroCliente.php';
    }

}