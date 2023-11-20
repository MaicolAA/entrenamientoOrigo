<?php

class User {
    private $nombre;
    private $apellido;

    public function setNombre($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre() {
        return $this->nombre;

    }

    public function getApellido() {
        $this->apellido;
    }
}

?>
