<?php

class VendaController extends VendaModel {

    public function inserir() {

        if (isset($_POST['submit'])) {

            $this->setIdUsuario($_POST['usuario']);
            $this->setIdProducto($_POST['producto']);
            $this->setFecha($_POST['fecha']);
            $this->setCantidad($_POST['cantidad']);
            //$this->setAux($_POST['aux']);

            if ($this->completaVendas()) {
                $msg = "ok";
            } else {
                $msg = "problem";
            }
        }

        include 'View/Site/vendas.php';
    }

}
