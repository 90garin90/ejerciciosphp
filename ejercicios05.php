<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicios05</title>
</head><body>
<?php

function ordenar(&$array1)
{
    for ($row=0; $row <count($array1)-1; $row++){
        for ($num=$row; $num <count($array1)-1; $num++){
    	   if ($array1[$num]>$array1[$num+1]){
    		  $aux=$array1[$num+1];
              $array1[$num+1]=$array1[$num];
              $array1[$num]=$aux;
            }
    	}
    }
}


//vamos a usar las funciones
$array1 = array (8,7,0,5,2);

echo "Array desordenado".'<br>';
foreach ($array1 as $element){
    echo $element . '<br>'; 
}
echo "<br>";

echo "Array ordenado".'<br>';
ordenar($array1);
foreach ($array1 as $element){
    echo $element . '<br>'; 
}
?>

</body>
</html>