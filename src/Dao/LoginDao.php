<?php

class LoginDao extends Dao {

    public function login($parameters) {

        $sqlCommand = "SELECT tipo_usuario.nombre AS tipo,usuario.* "
                . " FROM usuario "
                . " INNER JOIN tipo_usuario "
                . " ON usuario.tipo_usuario = tipo_usuario.id "
                . " WHERE username = :username || email = :username && contrasena = :contrasena";

        return $this->executeQuery($sqlCommand, $parameters);
    }

    public function recuperacion($parameters) {

        $sqlCommand = "SELECT nombre,username,email,contrasena"
                . " FROM usuario "
                . " WHERE email = :email ";

        return $this->executeQuery($sqlCommand, $parameters);
    }

}
