<?php

class UsuarioController{
    
    public function inserir(){
        
        if(isset($_GET['Nome'])){

            $usuarioModel = new UsuarioModel();

            $usuarioModel->setNome($_GET['Nome']);

            if($usuarioModel->insert()){
                echo "ok";
            } else{
                echo "problem";
            }
        }
    }
    
    public function deletar(){
        
    }
    
    public function listar(){
        
    }
    
    public function atualizar(){
        
    }
}
