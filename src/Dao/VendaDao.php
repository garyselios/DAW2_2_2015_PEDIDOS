<?php

class VendaDao extends Dao {

    public function insertVendas($parameters) {

        $sqlCommand = "INSERT INTO vendas (nome,preco,custo,ingredientes)"
                . " VALUES (:nome,:preco,:custo,:ingredientes)";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function deleteVendas($parameters) {

        $sqlCommand = "DELETE FROM vendas"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function selectAllVendas() { 

        $sqlCommand = "SELECT * "
                . " FROM vendas ";

        return $this->executeQuery($sqlCommand, array());
    }

    public function selectByIdVendas($parameters) {

        $sqlCommand = "SELECT * FROM vendas"
                . " WHERE id = :id";

        return $this->executeQuery($sqlCommand, $parameters);
    }

    public function updateVendas($parameters) {

        $sqlCommand = "UPDATE vendas"
                . " SET nome = :nome, preco = :preco, custo = :custo, ingredientes = :ingredientes"
                . " WHERE id = :id";

        return $this->executeCommand($sqlCommand, $parameters);
    }

    public function multipleVendas($parameters) {

        $sqlCommand [0] = "INSERT INTO vendas (id_usuario,id_prod,quantidade,data)"
                . " values (:id_usuario,:id_prod,:quantidade,:data)";
        $sqlCommand [1]= "UPDATE estoque "
                . " SET quantidade = quantidade - 1 "
                . " WHERE id = :id ";       
        
        return $this->multipleCommand($sqlCommand, $parameters);
    }

}
