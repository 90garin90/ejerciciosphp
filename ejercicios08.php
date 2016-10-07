<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 08</title>
</head>
<body>
    <h2>Ejercicio8</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Nombre</label><input type="text" name="nombre" ><br>
        <label>Telefono</label><input type="text" name="telefono" ><br>
        <input type="submit" value="enviar">
    </form>

    <?php
        if (isset($_GET) && !empty($_GET)) {
            echo "RECIBIDO!!!";
            echo "<br>";
        }
    ?>

    <?php
        echo $_GET['nombre'];
        echo "<br>";
        echo $_GET['telefono'];
    ?>

</body>
</html>
