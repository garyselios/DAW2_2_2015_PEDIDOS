<?php

class UsuarioModel {
    
    private $id;
    private $nome;
    private $username;
    private $email;
    private $senha;
    private $admin;
    
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
    
    public function setAdmin($admin) {
        $this->admin = $admin;
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
    
    public function getAdmin() {
        return $this->admin;
    }
    
    public function insertarUsuario() {  
        
        $paramters = array();
        $paramters [':nome'] = $this->getNome();
        $paramters [':username'] = $this->getUsername();
        $paramters [':email'] = $this->getEmail();
        $paramters [':senha'] = $this->getSenha();
        $paramters [':admin'] = $this->getAdmin();
        
        $objUsuarioDao = new UsuarioDao();
        
        return $objUsuarioDao->insertUsuario($paramters);
    }
    
}

