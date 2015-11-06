<?php

class UsuarioDao extends Dao {

    public function insertUsuario($parameters) {

        $sqlCommand = "INSERT INTO usuario (nome,username,email,senha,tipo_usuario)"
                . " VALUES (:nome,:username,:email,:senha,:tipo_usuario)";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function deleteUsuario($parameters) {

        $sqlCommand = "DELETE FROM usuario"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function selectAllUsuario() {

        $sqlCommand = "SELECT tipo_usuario.nome AS tipo,usuario.* "
                . " FROM usuario "
                . " LEFT JOIN tipo_usuario "
                . " ON usuario.tipo_usuario = tipo_usuario.id "
                . " WHERE tipo_usuario.id = 2";

        return $this->executeQuery($sqlCommand, array());
    }

    public function selectByIdUsuario($parameters) {

        $sqlCommand = "SELECT * FROM usuario"
                . " WHERE id = :id";

        return $this->executeQuery($sqlCommand, $parameters);
    }

    public function updateUsuario($parameters) {

        $sqlCommand = "UPDATE usuario"
                . " SET nome = :nome, username = :username, email = :email, senha = :senha,"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

}
