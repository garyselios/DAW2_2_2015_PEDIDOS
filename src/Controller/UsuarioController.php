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
        include 'View/Local/RegistroUsuario.php';
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
    
    public function listarTodos(){
        
        $objUsuarioModel = new UsuarioModel();
        
        $usuarios = $objUsuarioModel->listarTodosUsuario();
        
        include 'View/Local/ListarUsuario.php';        
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
        
        include 'View/Local/AtualizarUsuario.php';
    }
}
