<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicos04</title>
</head><body>
<?php

function mayor($array1)
{
    $max = $array1[0];
    for ($row=0; $row <count($array1); $row++){
    	if ($array1[$row]>$max){
    		$max=$array1[$row];
    	}
    }
	echo  $max;
}

function menor($array1)
{
    $min = $array1[0];
    for ($row=0; $row <count($array1); $row++){
    	if ($array1[$row]<$min){
    		$min=$array1[$row];
    	}
    }
	echo  $min;
}
//vamos a usar las funciones:
$array1 = array (4,7,0,5,2);

echo "Nuestro mayor: ";
mayor($array1);
echo "<br>";


echo "Nuestro menor: ";
menor($array1);
echo "<br>";

?>

</body>
</html>