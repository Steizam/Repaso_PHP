<h1>Ejercicio 6</h1>
<h2>Crear array de meses y recorrer con un bucle for</h2>

<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

 echo "<h3>Los meses del año en un blucle for</h3> <hr>";
 for ($i=0; $i<count($meses); $i++){                       

    echo "Posicion :".($i+1). " ". $meses[$i]. "<br>";
    
 }
?>