<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicios02</title>
</head><body>
<?php
//inicializamos el array asociati
$array1 = array (
    'base' => 'López',
    'escolta' => 'Manuel',
    'alero' => 'García López',
    'alaPivot' => 'paco',
    'Pivot' => 'manolo'
); 


foreach ($array1 as $position => $element){
    echo $position . ': ' . $element. '<br>';
}

?>
</body>
</html>