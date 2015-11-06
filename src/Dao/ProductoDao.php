<?php

class ProductoDao extends Dao {

    public function insertProducto($parameters) {

        $sqlCommand = "INSERT INTO produto (nome,preco,custo,ingredientes)"
                . " VALUES (:nome,:preco,:custo,:ingredientes)";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function deleteProducto($parameters) {

        $sqlCommand = "DELETE FROM produto"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function selectAllProducto() { 

        $sqlCommand = "SELECT * "
                . " FROM produto ";

        return $this->executeQuery($sqlCommand, array());
    }

    public function selectByIdProducto($parameters) {

        $sqlCommand = "SELECT * FROM produto"
                . " WHERE id = :id";

        return $this->executeQuery($sqlCommand, $parameters);
    }

    public function updateProducto($parameters) {

        $sqlCommand = "UPDATE produto"
                . " SET nome = :nome, preco = :preco, custo = :custo, ingredientes = :ingredientes"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

}
