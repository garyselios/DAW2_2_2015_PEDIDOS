<?php

class ClienteController{
    
    public function inserir(){
        
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
        include 'View/Client/RegistroCliente.php';
    }
    
    public function deletar(){
        
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
    
    public function listarTodos(){
        
        $objClienteModel = new ClienteModel();
        
        $clientes = $objClienteModel->listarTodosCliente();
        
        include 'View/Client/ListarCliente.php';        
    }
    
    public function atualizar(){
        
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
        
        include 'View/Client/AtualizarCliente.php';
    }
}
