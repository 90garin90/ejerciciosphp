<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicios03</title>
</head><body>
<?php
//inicializamos el array asociati
$array = array (
    'base' => array(
        'jugador1' => 700000,
        'jugador2' => 'Zaragozano'
    ), 
    'escolta' => array(
        'jugador1' => 3000000,
        'jugador2' => 'Madrileño'
    ), 
    'alero' => array(
        'jugador1' => 3000000,
        'jugador2' => 'Barcelonés'
    ), 
    'alaPivot' => array(
        'jugador1' => 500000,
        'jugador2' => 'Bilbaino'
    ), 
    'Pivot' => array(
        'jugador1' => 500000,
        'jugador2' => 'Bilbaino'
    ), 
); 


foreach ($array as $posicion=>$datos){    
    echo '<tr>';
    echo "<td> $posicion </td>";
    echo '<br>';
    foreach ($datos as $clave=>$dato){
        echo "<td> $dato </td>";
        echo '<br>';
    }
    echo '</tr>';
} 

?>
</body>
</html>