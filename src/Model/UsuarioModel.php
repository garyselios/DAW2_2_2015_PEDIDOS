<?php

class UsuarioModel {
    
    private $id;
    private $nome;
    private $username;
    private $email;
    private $senha;

    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    
    public function insertarUsuario() {  
        
        $parameters = array();
        $parameters [':nome'] = $this->getNome();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':senha'] = $this->getSenha();
        
        $objUsuarioDao = new UsuarioDao();
        
        return $objUsuarioDao->insertUsuario($parameters);
    }
    
    public function eliminarUsuario() {
        
        $parameters = array();
        $parameters [':id'] = $this->getId();
        
        $objUsuarioDao = new UsuarioDao();
        
        return $objUsuarioDao->deleteUsuario($parameters);
    }
    
    public function listarTodosUsuario(){
        
        $objUsuarioDao = new UsuarioDao();
        
        return $objUsuarioDao->selectAllUsuario();
    }
    
    public function  listarUsuario(){
        
        $objUsuarioDao = new UsuarioDao();
        
        $parameters = array();
        $parameters ['id'] = $this->getId();
        
        return $objUsuarioDao->selectByIdUsuario($parameters);
    }
    
    public function atualizarUsuario(){
        
        $parameters = array();
        $parameters ['id'] = $this->getId();
        $parameters [':nome'] = $this->getNome();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':senha'] = $this->getSenha();
        
        $objUsuarioDao = new UsuarioDao();
        
        return $objUsuarioDao->updateUsuario($parameters);
    }
}

