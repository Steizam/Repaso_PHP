<h1>Ejercicio 3</h1>
<h2>Indicamos además si el cuadrado es Par o Impar</h2>

<?php
for ($i = 1; $i <= 30 ; $i++) {
    if($i % 2 == 0){
        echo "numero: ". $i ." y su cuadrado es: ". ($i * $i) . " (Par)<br>";
    } else {
        echo "numero: ". $i ." y su cuadrado es: ". ($i * $i) . " (Impar)<br>";
    }
    //echo "numero: ". $i ." y su cuadrado es: ". ($i * $i) "<br>";
}


?>