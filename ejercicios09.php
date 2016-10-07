<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 09</title>
</head>
<body>
    <h2>Ejercicio 9</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Nombre</label><input type="text" name="nombre" ><br>
        <label>Telefono</label><input type="text" name="telefono" ><br>
        <input type="submit" value="enviar">
    </form>

    <?php
        require_once 'app.php';
        $app = new App();
    ?>

</body>
</html>
