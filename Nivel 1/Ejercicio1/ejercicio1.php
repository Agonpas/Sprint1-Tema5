<?
include_once 'Gato.php'; //llamamos a la familia gato
include_once 'Perro.php'; // llamammos a la familia perro

/*instanciamos un objeto de la familia gato y aplicamos el método hablar */
$gato1 = new Gato("Félix");
echo PHP_EOL;
echo "El gato " . $gato1->getNombre() . " hace: " . $gato1->hablar() . PHP_EOL;

/*instanciamos un objeto de la familia perro y aplicamos el método hablar */
$perro1 = new Perro("Pluto");
echo PHP_EOL;
echo "El perro " . $perro1->getNombre() . " hace: " . $perro1->hablar() . PHP_EOL;
?>