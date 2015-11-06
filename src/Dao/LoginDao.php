<?php

class LoginDao extends Dao {

    public function login($parameters) {

        $sqlCommand = "SELECT tipo_usuario.nome AS tipo,usuario.* "
                . " FROM usuario "
                . " INNER JOIN tipo_usuario "
                . " ON usuario.tipo_usuario = tipo_usuario.id "
                . " WHERE username = :username || email = :username && senha = :senha";

        return $this->executeQuery($sqlCommand, $parameters);
    }

    public function recuperacion($parameters) {

        $sqlCommand = "SELECT nome,username,email,senha"
                . " FROM usuario "
                . " WHERE email = :email ";

        return $this->executeQuery($sqlCommand, $parameters);
    }

}
