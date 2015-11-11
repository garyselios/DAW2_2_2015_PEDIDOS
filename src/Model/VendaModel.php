<?php

class VendaModel {

    private $id;
    private $idUsuario;
    private $idProducto;
    private $fecha;
    private $cantidad;
    private $aux;

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
        return $this;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
        return $this;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
        return $this;
    }

    public function setAux($aux) {
        $this->aux = $aux;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getAux() {
        return $this->aux;
    }

    public function insertarVendas() {

        $parameters = array();
        $parameters [':id_usuario'] = $this->getIdUsuario();
        $parameters [':id_prod'] = $this->getIdProducto();
        $parameters [':data'] = $this->getFecha();
        $parameters [':quantidade'] = $this->getCantidad();
        echo 'ok';

        $objVendasDao = new VendasDao();

        return $objVendasDao->insertVendas($parameters);
    }

    public function eliminarVendas() {

        $parameters = array();
        $parameters [':id'] = $this->getId();

        $objVendasDao = new VendasDao();

        return $objVendasDao->deleteVendas($parameters);
    }

    public function listarTodosVendas() {

        $objVendasDao = new VendasDao();

        return $objVendasDao->selectAllVendas();
    }

    public function listarVendas() {

        $objVendasDao = new VendasDao();

        $parameters = array();
        $parameters ['id'] = $this->getId();

        return $objVendasDao->selectByIdVendas($parameters);
    }

    public function atualizarVendas() {

        $parameters = array();
        $parameters ['id'] = $this->getId();
        $parameters [':id_usuario'] = $this->getIdUsuario();
        $parameters [':id_prod'] = $this->getIdProducto();
        $parameters [':data'] = $this->getFecha();
        $parameters [':quantidade'] = $this->getCantidad();

        $objProductoDao = new ProductoDao();

        return $objProductoDao->updateProducto($parameters);
    }
    
    public function completaVendas() {

        $parameters = array();
        $parameters [0][':id_usuario'] = $this->getIdUsuario();
        $parameters [0][':id_prod'] = $this->getIdProducto();
        $parameters [0][':data'] = $this->getFecha();
        $parameters [0][':quantidade'] = $this->getCantidad();
        
        $parameters [1][':id'] = 1;
        
        
        $objVendasDao = new VendaDao();

        return $objVendasDao->multipleVendas($parameters);
    }

}
