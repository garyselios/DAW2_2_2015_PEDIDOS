<?php

class UsuarioController{
    
    public function inserir(){
        
        if(isset($_POST['nome'])){

            $objUsuarioModel = new UsuarioModel();

            $objUsuarioModel->setNome($_POST['nome']);
            $objUsuarioModel->setUsername($_POST['username']);
            $objUsuarioModel->setEmail($_POST['email']);
            $objUsuarioModel->setSenha($_POST['senha']);
            
            if($objUsuarioModel->insertarUsuario()){
                $msg = "ok";
            } else{
                $msg = "problem";
            }
        }  
        include 'View/User/RegistroUsuario.php';
    }
    
    public function deletar(){
        
        if(isset($_GET['id'])){
            
            $objUsuarioModel = new UsuarioModel();
            
            $objUsuarioModel->setId($_GET['id']);
            
            if ($objUsuarioModel->eliminarUsuario()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }
        
    }
    
    public function listar(){
        
        $objUsuarioModel = new UsuarioModel();
        
        $usuarios = $objUsuarioModel->listarTodosUsuario();
            
        include 'View/User/ListarUsuario.php';        
    }
    
    public function atualizar(){
        
        $objUsuarioModel = new UsuarioModel();
        
        if(isset($_POST['nome'])){
            
            $objUsuarioModel->setId($_GET['id']);
            $objUsuarioModel->setNome($_POST['nome']);
            $objUsuarioModel->setUsername($_POST['username']);
            $objUsuarioModel->setEmail($_POST['email']);
            $objUsuarioModel->setSenha($_POST['senha']);
            
            if($objUsuarioModel->atualizarUsuario()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }
        
        if($_GET['id']){
            
            $objUsuarioModel->setId($_GET['id']);
            $usuario = $objUsuarioModel->listarUsuario();
        }
        
        include 'View/User/AtualizarUsuario.php';
    }
    
    //A partit de aqui estan los metodos para configurar los clientes a partir de la interfaz de usuario.
    
    
     public function inserirCliente(){
        
        if(isset($_POST['nome'])){

            $objClienteModel = new ClienteModel();

            $objClienteModel->setNome($_POST['nome']);
            $objClienteModel->setUsername($_POST['username']);
            $objClienteModel->setEmail($_POST['email']);
            $objClienteModel->setSenha($_POST['senha']);
            
            if($objClienteModel->insertarCliente()){
                $msg = "ok";
            } else{
                $msg = "problem";
            }
        }  
        include 'View/User/RegistroClienteLocal.php';
    }
    
    public function deletarCliente(){
        
        if(isset($_GET['id'])){
            
            $objClienteModel = new ClienteModel();
            
            $objClienteModel->setId($_GET['id']);
            
            if ($objClienteModel->eliminarCliente()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }
        
    }
    
    public function listarCliente(){
        
        $objClienteModel = new ClienteModel();
        
        $clientes = $objClienteModel->listarTodosCliente();
        
        include 'View/User/ListarClienteLocal.php';        
    }
    
    public function atualizarCliente(){
        
        $objClienteModel = new ClienteModel();
        
        if(isset($_POST['nome'])){
            
            $objClienteModel->setId($_GET['id']);
            $objClienteModel->setNome($_POST['nome']);
            $objClienteModel->setUsername($_POST['username']);
            $objClienteModel->setEmail($_POST['email']);
            $objClienteModel->setSenha($_POST['senha']);
            
            if($objClienteModel->atualizarCliente()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }
        
        if($_GET['id']){
            
            $objClienteModel->setId($_GET['id']);
            $cliente = $objClienteModel->listarCliente();
        }
        
        include 'View/User/AtualizarClienteLocal.php';
    }
}
