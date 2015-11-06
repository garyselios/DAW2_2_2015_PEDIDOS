<?php

class ProductoModel {

    private $id;
    private $nome;
    private $preco;
    private $custo;
    private $ingredientes;

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }

    public function setCusto($custo) {
        $this->custo = $custo;
        return $this;
    }

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getCusto() {
        return $this->custo;
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function insertarProducto() {

        $parameters = array();
        $parameters [':nome'] = $this->getNome();
        $parameters [':preco'] = $this->getPreco();
        $parameters [':custo'] = $this->getCusto();
        $parameters [':ingredientes'] = $this->getIngredientes();
        echo 'ok';

        $objProductoDao = new ProductoDao();

        return $objProductoDao->insertProducto($parameters);
    }

    public function eliminarProducto() {

        $parameters = array();
        $parameters [':id'] = $this->getId();

        $objProductoDao = new ProductoDao();

        return $objProductoDao->deleteProducto($parameters);
    }

    public function listarTodosProducto() {

        $objProductoDao = new ProductoDao();

        return $objProductoDao->selectAllProducto();
    }

    public function listarProducto() {

        $objProductoDao = new ProductoDao();

        $parameters = array();
        $parameters ['id'] = $this->getId();

        return $objProductoDao->selectByIdProducto($parameters);
    }

    public function atualizarProducto() {

        $parameters = array();
        $parameters ['id'] = $this->getId();
        $parameters [':nome'] = $this->getNome();
        $parameters [':preco'] = $this->getPreco();
        $parameters [':custo'] = $this->getCusto();
        $parameters [':ingredientes'] = $this->getIngredientes();

        $objProductoDao = new ProductoDao();

        return $objProductoDao->updateProducto($parameters);
    }

}
