<?php

class ClienteController extends ClienteModel{
    
    public function inserir(){
        
        if(isset($_POST['submit'])){

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
            $this->setTipoUsuario(3);
            
            if($this->insertarCliente()){
                $msg = "ok";
            } else{
                $msg = "problem";
            }
        }  
        include 'View/Client/RegistroCliente.php';
    }
    
    public function deletar(){
        
        if(isset($_GET['id'])){
            
            $this->setId($_GET['id']);
            
            if ($this->eliminarCliente()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }
        
    }
    
    public function listar(){
        
        $clientes = $this->listarTodosCliente();
        
        include 'View/Client/ListarCliente.php';        
    }
    
    public function atualizar(){
        
        if(isset($_POST['nombre'])){
            
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

            if($this->atualizarCliente()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }

        if($_GET['id']){
            
            $this->setId($_GET['id']);
            $cliente = $this->listarCliente();
        }
        
        include 'View/Client/AtualizarCliente.php';
    }
}
