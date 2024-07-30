<h1>Ejercicio 4</h1>
<h2>Sumatorio de los 20 primeros numeros naturales</h2>
<?php

$number = 1;
$contador = 2;
while ($contador <= 20) {

    $number *= $contador;
    $contador++;
}
echo "La multiplicacion de los 20 primeros numeros naturales es: ". $number;

?>