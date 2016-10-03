<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicios01</title>
</head><body>
<?php
//inicializamos el array
$array1 = array (
    1,2,3,4,5
);

echo "<hr> Recorrido mediante bucle foreach simple <br>";

foreach ($array1 as $element){
    echo $element . '<br>';
}

?>
</body>
</html>
