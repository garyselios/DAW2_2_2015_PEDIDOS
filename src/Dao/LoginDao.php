<?php

class LoginDao extends Dao{
        
    public function login($parameters){
        
        $sqlCommand = "SELECT tipo_usuario.nome AS tipo,usuario.* "
                . " FROM usuario "
                . " LEFT JOIN tipo_usuario "
                . " ON usuario.tipo_usuario = tipo_usuario.id "
                . " WHERE username = :username && senha = :senha";
        
        return $this->executeQuery($sqlCommand, $parameters);
    }
    
}

