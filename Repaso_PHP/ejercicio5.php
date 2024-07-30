<h1>Ejercicio 5</h1>
<h2>Imprimir por pantalla tabla de multiplicar de parametro pasado por get</h2>

<?php
//$numero = $_GET['numero'];


if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
    $numero = $_GET['numero'];
}else{
    $numero = 5; // numero por defecto
    echo "No ha introducido un numero válido. Se ha utilizado el número 5 por defecto.<br> ";
}
echo "<h2>Tabla de multiplicar del numero ". $numero. "</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo $numero. " x ". $i. " = ". ($numero * $i). "<br>";
}

?>