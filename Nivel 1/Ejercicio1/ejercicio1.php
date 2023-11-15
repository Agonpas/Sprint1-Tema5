<?
include_once 'Gato.php'; //llamamos a la familia gato
include_once 'Perro.php'; // llamammos a la familia perro

/*instanciamos un objeto de la familia gato y aplicamos el método hablar */
$felix = new Gato;
echo PHP_EOL;
echo "El gato hace: " . $felix->hablar() . PHP_EOL;

/*instanciamos un objeto de la familia perro y aplicamos el método hablar */
$pluto = new Perro;
echo PHP_EOL;
echo "El perro hace: " . $pluto->hablar() . PHP_EOL;
?>