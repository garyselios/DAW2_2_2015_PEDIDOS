<?php

    
class LoginModel{

    private $username;
    private $contrasena;
    private $email;

        
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
        return $this;
    }
    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getContrasena() {
        return $this->contrasena;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function logar(){
        
        $parameters = array();
        $parameters [':username'] = $this->getUsername();
        $parameters [':contrasena'] = $this->getContrasena();
        
        $objLoginDao = new LoginDao();
        
        return $objLoginDao->login($parameters);
    }
    
     public function recuperarContrasena(){
        
        $parameters = array();
        $parameters [':email'] = $this->getEmail();
        
        
        $objLoginDao = new LoginDao();
        
        return $objLoginDao->recuperacion($parameters);
    }
}