<?php

class UsuarioController extends UsuarioModel {

    public function inserir() {

        if (isset($_POST['submit'])) {

            $this->setNombre($_POST['nombre']);
            $this->setApellido($_POST['apellido']);
            $this->setUsername($_POST['username']);
            $this->setEmail($_POST['email']);
            $this->setContrasena($_POST['contrasena']);
            $this->setDocumento($_POST['documento']);
            $this->setEdad($_POST['edad']);
            $this->setTelefono($_POST['telefono']);
            $this->setDireccion($_POST['direccion']);
            $this->setCiudad($_POST['ciudad']);
            $this->setBarrio($_POST['barrio']);
            $this->setTipoUsuario(2);

            if ($this->insertarUsuario()) {
                $msg = "ok";
            } else {
                $msg = "problem";
            }
        }
        include 'View/Local/RegistroUsuario.php';
    }

    public function deletar() {

        if (isset($_GET['id'])) {

            $this->setId($_GET['id']);

            if ($this->eliminarUsuario()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }
    }

    public function listar() {

        $usuarios = $this->listarTodosUsuario();

        include 'View/Local/ListarUsuario.php';
    }

    public function atualizar() {

        if (isset($_POST['nombre'])) {

            $this->setId($_GET['id']);
            $this->setNombre($_POST['nombre']);
            $this->setApellido($_POST['apellido']);
            $this->setUsername($_POST['username']);
            $this->setEmail($_POST['email']);
            $this->setContrasena($_POST['contrasena']);
            $this->setDocumento($_POST['documento']);
            $this->setEdad($_POST['edad']);
            $this->setTelefono($_POST['telefono']);
            $this->setDireccion($_POST['direccion']);
            $this->setCiudad($_POST['ciudad']);
            $this->setBarrio($_POST['barrio']);

            if ($this->atualizarUsuario()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }

        if ($_GET['id']) {

            $this->setId($_GET['id']);
            $usuario = $this->listarUsuario();
        }

        include 'View/Local/AtualizarUsuario.php';
    }

    //A partit de aqui estan los metodos para configurar los clientes a partir de la interfaz de usuario.


    public function inserirCliente() {

        if (isset($_POST['nombre'])) {

            $objClienteModel = new ClienteModel();

            $objClienteModel->setNombre($_POST['nombre']);
            $objClienteModel->setUsername($_POST['username']);
            $objClienteModel->setEmail($_POST['email']);
            $objClienteModel->setContrasena($_POST['contrasena']);
            $objClienteModel->setApellido($_POST['apellido']);
            $objClienteModel->setDocumento($_POST['documento']);
            $objClienteModel->setEdad($_POST['edad']);
            $objClienteModel->setTelefono($_POST['telefono']);
            $objClienteModel->setDireccion($_POST['direccion']);
            $objClienteModel->setCiudad($_POST['ciudad']);
            $objClienteModel->setBarrio($_POST['barrio']);
            $objClienteModel->setTipoUsuario(3);
            
            if ($objClienteModel->insertarCliente()) {
                $msg = "ok";
            } else {
                $msg = "problem";
            }
        }
        include 'View/Client/RegistroCliente.php';
    }

    public function deletarCliente() {

        if (isset($_GET['id'])) {

            $objClienteModel = new ClienteModel();

            $objClienteModel->setId($_GET['id']);

            if ($objClienteModel->eliminarCliente()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }
    }

    public function listarCliente() {

        $objClienteModel = new ClienteModel();

        $clientes = $objClienteModel->listarTodosCliente();

        include 'View/Client/ListarCliente.php';
    }

    public function atualizarCliente() {

        $objClienteModel = new ClienteModel();

        if (isset($_POST['nombre'])) {

            $objClienteModel->setId($_GET['id']);
            $objClienteModel->setNombre($_POST['nombre']);
            $objClienteModel->setUsername($_POST['username']);
            $objClienteModel->setEmail($_POST['email']);
            $objClienteModel->setContrasena($_POST['contrasena']);
            $objClienteModel->setApellido($_POST['apellido']);
            $objClienteModel->setDocumento($_POST['documento']);
            $objClienteModel->setEdad($_POST['edad']);
            $objClienteModel->setTelefono($_POST['telefono']);
            $objClienteModel->setDireccion($_POST['direccion']);
            $objClienteModel->setCiudad($_POST['ciudad']);
            $objClienteModel->setBarrio($_POST['barrio']);
            
            if ($objClienteModel->atualizarCliente()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }

        if ($_GET['id']) {

            $objClienteModel->setId($_GET['id']);
            $cliente = $objClienteModel->listarCliente();
        }

        include 'View/Client/AtualizarCliente.php';
    }

    public function index() {

        include 'View/Local/HomeLocal.php';
    }

}
