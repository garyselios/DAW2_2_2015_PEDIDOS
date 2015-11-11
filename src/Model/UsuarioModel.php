<?php

class UsuarioModel {

    private $id;
    private $nombre;
    private $apellido;
    private $username;
    private $email;
    private $contrasena;
    private $tipoUsuario;
    private $documento;
    private $edad;
    private $telefono;
    private $direccion;
    private $ciudad;
    private $barrio;

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
        return $this;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
        return $this;
    }

    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
        return $this;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function setBarrio($barrio) {
        $this->barrio = $barrio;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getBarrio() {
        return $this->barrio;
    }

    public function insertarUsuario() {

        $parameters = array();
        $parameters [':nombre'] = $this->getNombre();
        $parameters [':apellido'] = $this->getApellido();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':contrasena'] = $this->getContrasena();
        $parameters [':tipo_usuario'] = $this->getTipoUsuario();
        $parameters [':documento'] = $this->getDocumento();
        $parameters [':edad'] = $this->getEdad();
        $parameters [':telefono'] = $this->getTelefono();
        $parameters [':direccion'] = $this->getDireccion();
        $parameters [':ciudad'] = $this->getCiudad();
        $parameters [':barrio'] = $this->getBarrio();

        $objUsuarioDao = new UsuarioDao();

        return $objUsuarioDao->insertUsuario($parameters);
    }

    public function eliminarUsuario() {

        $parameters = array();
        $parameters [':id'] = $this->getId();

        $objUsuarioDao = new UsuarioDao();

        return $objUsuarioDao->deleteUsuario($parameters);
    }

    public function listarTodosUsuario() {

        $objUsuarioDao = new UsuarioDao();

        return $objUsuarioDao->selectAllUsuario();
    }

    public function listarUsuario() {

        $objUsuarioDao = new UsuarioDao();

        $parameters = array();
        $parameters ['id'] = $this->getId();

        return $objUsuarioDao->selectByIdUsuario($parameters);
    }

    public function atualizarUsuario() {

        $parameters = array();
        $parameters [':id'] = $this->getId();
        $parameters [':nombre'] = $this->getNombre();
        $parameters [':apellido'] = $this->getApellido();
        $parameters [':username'] = $this->getUsername();
        $parameters [':email'] = $this->getEmail();
        $parameters [':contrasena'] = $this->getContrasena();
        $parameters [':documento'] = $this->getDocumento();
        $parameters [':edad'] = $this->getEdad();
        $parameters [':telefono'] = $this->getTelefono();
        $parameters [':direccion'] = $this->getDireccion();
        $parameters [':ciudad'] = $this->getCiudad();
        $parameters [':barrio'] = $this->getBarrio();


        $objUsuarioDao = new UsuarioDao();

        return $objUsuarioDao->updateUsuario($parameters);
    }

}
