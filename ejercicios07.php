<?php
/*
 * Crea una clase Rectangulo con dos atributos; base y altura. Debe incluir los metodos:
 * -constructor
 * - perimetro 
 * - superficie
 * - añadir los getters y los setters
 *  En el fichero Ejercicio07 debes crear un ejemplar de la clase anterior 
 *  y usar los metodos disponibles. La variedad de pruebas. 
 */ 
require_once 'rectangulo.php';

$rectangulo = new Rectangulo(20, 12);

echo "El perimetro es " . $rectangulo->perimetro();

echo "<br>";

echo "La superficie es " . $rectangulo->superficie();

echo "<br>";

