<?php

class ClienteDao extends Dao{
    
    public function insertCliente($parameters){
        
        $sqlCommand = "INSERT INTO usuario (nome,username,email,senha,tipo_usuario)"
                . " VALUES (:nome,:username,:email,:senha,:tipo_usuario)";
        
        return $this->executeCommand($sqlCommand,$parameters);
    }
 
    public function deleteCliente($parameters){
        
        $sqlCommand = "DELETE FROM usuario"
                . " WHERE id = :id";
        
        return $this->executeCommand($sqlCommand, $parameters);
    }
    
    public function selectAllCliente(){
        
        $sqlCommand = "SELECT tipo_usuario.nome AS tipo,usuario.* "
                . " FROM usuario "
                . " LEFT JOIN tipo_usuario "
                . " ON usuario.tipo_usuario = tipo_usuario.id "
                . " WHERE tipo_usuario.id = 3";
        
        return $this->executeQuery($sqlCommand, array());
    }
    
    public function selectByIdCliente($parameters){
        
        $sqlCommand = "SELECT * FROM usuario"
                . " WHERE id = :id";
        
        return $this->executeQuery($sqlCommand, $parameters);
    }
    
    public function updateCliente($parameters){
        
        $sqlCommand = "UPDATE usuario"
                . " SET nome = :nome, username = :username, email = :email, senha = :senha,"
                . " WHERE id = :id";
        
        return $this->executeCommand($sqlCommand, $parameters);
    }
}

