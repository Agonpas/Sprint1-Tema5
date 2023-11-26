<?php
/* creamos la clase y damos los atributos base y altura*/
class Shape implements ShapeInterficie{
    protected $base;
    protected $altura;
    /*__construct es un método especial que se aplica por defecto al instanciar un objeto de la clase*/
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    /*setters*/
    public function setBase($base){
        $this->base = $base;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    /*getters*/
    public function getBase(){
        return $this->base;
    }
    public function getAltura(){
        return $this->altura;
    }
    /* creamos el metodo area es un metodo abstracto, es común a las subclases pero se implementa de forma diferente en cada una*/
    public function area(){
        return 0;
    }
}
?>