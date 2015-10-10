<?php

    
class LoginModel{

    private $username;
    private $senha;

        
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function logar(){
        
        $parameters = array();
        $parameters [':username'] = $this->getUsername();
        $parameters [':senha'] = $this->getSenha();
        
        $objLoginDao = new LoginDao();
        
        return $objLoginDao->login($parameters);
    }
}