<?php

class ClienteModel {
    
    private $id;
    private $nome;
    private $username;
    private $email;
    private $senha;
    private $tipoUsuario;

    
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
    
    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
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
    
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
    
    
    public function insertarCliente() {  
        
        $parameters = array();
        $parameters [':nome'] = $this->getNome();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':senha'] = $this->getSenha();
        $parameters [':tipo_usuario'] = $this->getTipoUsuario();
        
        $objClienteDao = new ClienteDao();
        
        return $objClienteDao->insertCliente($parameters);
    }
    
    public function eliminarCliente() {
        
        $parameters = array();
        $parameters [':id'] = $this->getId();
        
        $objClienteDao = new ClienteDao();
        
        return $objClienteDao->deleteCliente($parameters);
    }
    
    public function listarTodosCliente(){
        
        $objClienteDao = new ClienteDao();
        
        return $objClienteDao->selectAllCliente();
    }
    
    public function  listarCliente(){
        
        $objClienteDao = new ClienteDao();
        
        $parameters = array();
        $parameters ['id'] = $this->getId();
        
        return $objClienteDao->selectByIdCliente($parameters);
    }
    
    public function atualizarCliente(){
        
        $parameters = array();
        $parameters ['id'] = $this->getId();
        $parameters [':nome'] = $this->getNome();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':senha'] = $this->getSenha();
        
        $objClienteDao = new ClienteDao();
        
        return $objClienteDao->updateCliente($parameters);
    }
}

