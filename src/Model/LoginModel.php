<?php

    
class LoginModel{

    private $username;
    private $senha;
    private $email;

        
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function logar(){
        
        $parameters = array();
        $parameters [':username'] = $this->getUsername();
        $parameters [':senha'] = $this->getSenha();
        
        $objLoginDao = new LoginDao();
        
        return $objLoginDao->login($parameters);
    }
    
     public function recuperarSenha(){
        
        $parameters = array();
        $parameters [':email'] = $this->getEmail();
        
        
        $objLoginDao = new LoginDao();
        
        return $objLoginDao->recuperacion($parameters);
    }
}