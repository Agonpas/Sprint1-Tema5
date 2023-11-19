<?php
class Animal {
    /*atributos*/
    protected $nombre;
    /*constructor*/
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    /*setter*/
    public function SetNombre($nombre) {
        $this->nombre = $nombre;
    }
    /*getter*/
    public function getNombre() {
        return $this->nombre;
    }
    public function hablar() {

    }
}

?>