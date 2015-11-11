<?php

class ClienteDao extends Dao{
    
    public function insertCliente($parameters){
        
        $sqlCommand = "INSERT INTO usuario (nombre,apellido,username,email,contrasena,tipo_usuario,documento,edad,telefono,direccion,ciudad,barrio)"
                . " VALUES (:nombre,:apellido,:username,:email,:contrasena,:tipo_usuario,:documento,:edad,:telefono,:direccion,:ciudad,:barrio)";
        
        return $this->executeCommand($sqlCommand,$parameters);
    }
 
    public function deleteCliente($parameters){
        
        $sqlCommand = "DELETE FROM usuario"
                . " WHERE id = :id";
        
        return $this->executeCommand($sqlCommand, $parameters);
    }
    
    public function selectAllCliente(){
        
        $sqlCommand = "SELECT tipo_usuario.nombre AS tipo,usuario.* "
                . " FROM usuario "
                . " JOIN tipo_usuario "
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
                . " SET nombre = :nombre, apellido = :apellido, username = :username, email = :email,"
                . " contrasena = :contrasena, documento = :documento, edad = :edad, telefono = :telefono,"
                . " direccion = :direccion, ciudad = :ciudad, barrio = :barrio"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }
}