<?php

class ProductoController extends ProductoModel {

    public function inserir() {

        if (isset($_POST['submit'])) {

            $this->setNombre($_POST['nombre']);
            $this->setPreco($_POST['preco']);
            $this->setCusto($_POST['custo']);
            $this->setIngredientes($_POST['ingredientes']);
            
            if ($this->insertarProducto()) {
                $msg = "ok";
            } else {
                $msg = "problem";
            }
        }
        include 'View/Local/RegistroProducto.php';
    }

    public function deletar() {

        if (isset($_GET['id'])) {

            $this->setId($_GET['id']);

            if ($this->eliminarProducto()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }
    }

    public function listar() {

        $productos = $this->listarTodosProducto();

        include 'View/Local/ListarProducto.php';
    }

    public function atualizar() {

        if (isset($_POST['submit'])) {

            $this->setId($_GET['id']);
            $this->setNombre($_POST['nombre']);
            $this->setPreco($_POST['preco']);
            $this->setCusto($_POST['custo']);
            $this->setIngredientes($_POST['ingredientes']);

            if ($this->atualizarProducto()) {
                echo "ok";
            } else {
                echo "problem";
            }
        }

        if ($_GET['id']) {

            $this->setId($_GET['id']);
            $producto = $this->listarProducto();
        }

        include 'View/Local/AtualizarProducto.php';
    }

}
