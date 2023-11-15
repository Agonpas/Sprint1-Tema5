<?php
include_once 'Animal.php';

class Gato extends Animal {
    public function hablar() {
        return "Miau, Miau!!";
    }
}
?>