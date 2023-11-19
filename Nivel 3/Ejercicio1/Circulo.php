<?php
// Circle.php
require_once 'ShapeInterficie.php';
require_once 'Shape.php';

class Circulo extends Shape {
    public function __construct($base) {
        $this->base = $base;
    }
    public function setBase($base)
    {
        $this->base = $base;
    }
    public function area() {
        /* Fórmula del área de un círculo: pi * radio al cuadrado (tomo el atributo base como el radio del circulo) (pow se usa para elevar) */ 
        return pi() * pow($this->base, 2);
    }
}
?>
