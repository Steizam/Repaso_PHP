<h2>Ejercicio 1</h2>
<?php

/*
Creación de dos variables donde mostramos el valor de cada
variable y ademas el tipo de dato que es.
*/

$uno = "Variable 1";
$dos = 100;

$tipo_uno = gettype($uno);
$tipo_dos = gettype($dos);

echo "Esta es la: " . $uno . " y es de tipo $tipo_uno <br>, y luego tenemos la variable 2 :" .  $dos . " y es de tipo $tipo_dos. <hr>";

?>