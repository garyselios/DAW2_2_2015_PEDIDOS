<?php

class ClienteDao extends Dao{
    
    public function insertCliente($parameters){
        
        $sqlCommand = "INSERT INTO cliente (nome,username,email,senha)"
                . " VALUES (:nome,:username,:email,:senha)";
        
        return $this->executeCommand($sqlCommand,$parameters);
    }
 
    public function deleteCliente($parameters){
        
        $sqlCommand = "DELETE FROM cliente"
                . " WHERE id = :id";
        
        return $this->executeCommand($sqlCommand, $parameters);
    }
    
    public function selectAllCliente(){
        
        $sqlCommand = "SELECT * FROM cliente";
        
        return $this->executeQuery($sqlCommand, array());
    }
    
    public function selectByIdCliente($parameters){
        
        $sqlCommand = "SELECT * FROM cliente"
                . " WHERE id = :id";
        
        return $this->executeQuery($sqlCommand, $parameters);
    }
    
    public function updateCliente($parameters){
        
        $sqlCommand = "UPDATE cliente"
                . " SET nome = :nome, username = :username, email = :email, senha = :senha,"
                . " WHERE id = :id";
        
        return $this->executeCommand($sqlCommand, $parameters);
    }
}

