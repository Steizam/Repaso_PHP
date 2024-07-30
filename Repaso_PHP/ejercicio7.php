<h1>Ejercicio 7</h1>
<h2>Mismo ejercicio que el anterior pero con el foreach</h2>

<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

 echo "<h3>Los meses del año en un blucle foreach</h3><hr>";
 
 foreach ($meses as $key => $mes){
    echo "<h2>El mes del año numero ". $key+1 ." es ". $mes. "</h2>";
 }

?>