<?php
abstract class Animal {
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
    abstract public function hablar();

}

?>