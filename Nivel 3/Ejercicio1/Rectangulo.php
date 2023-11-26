<?php
/* llamamos a los archivos*/
include_once 'ShapeInterficie.php';
include_once 'Shape.php';

/* cramos la clase Rectangulo e implementamos la función area*/
class Rectangulo extends Shape implements ShapeInterficie {
    public function area() {
        return $this->base * $this->altura;
    }
}
?>
