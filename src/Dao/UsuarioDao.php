<?php

class UsuarioDao extends Dao{
    
    public function insertUsuario($parameters){
        
        $sqlCommand = "INSERT INTO usuario (nome,username,email,senha,senha_admin)"
                . " VALUES (:nome,:username,:email,:senha,:admin)";
        
        return $this->executeCommand($sqlCommand,$parameters);
    }
    
}

